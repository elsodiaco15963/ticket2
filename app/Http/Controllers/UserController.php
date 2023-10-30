<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserPlugin;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('user',compact('users'));
    }

    public function create()
    {
        return view('create_user');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'dni' => 'unique:users|sometimes|nullable|between:0,8',
        ],
        [
            'email.unique' => 'Correo en uso. Elige otro.',
            'dni.unique' => 'Dni en uso. Elige otro.',
        ]);
    
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'dni' => $request->dni,
        ]);
    
        // Crear el registro en la tabla user_plugin relacionado con el usuario
        $user->userPlugin()->create([
            'rol' => 1,
            'estado' => 1,
        ]);
    
        return redirect()->route('list_user')->with('success', 'Usuario creado exitosamente.');
    }

    public function edit($id)
    {
        $users = User::findOrFail($id);
        $plugins = User_plugin::all();
        return view('edit_user', compact('users', 'plugins'));
    }

    public function update(Request $request, $id)
    {
        $users = User::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);
        $users->name = $request->input('name');
        $users->email = $request->input('email');
        $users->dni = $request->input('dni');
        if ($request->filled('password')) {
            // Actualiza la contraseña solo si se proporcionó una nueva
            $users->password = bcrypt($request->input('password'));
        }
        $users->save();
        return redirect()->route('list_user')->with('success', 'Participante registrado exitosamente.');
    }
}

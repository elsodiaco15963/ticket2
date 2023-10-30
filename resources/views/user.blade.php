@extends('home')
    
@section('content')
    <div class="container-usuario">
        <div class="card-usuario">
            <div class="card-title-usuario">Usuarios</div>
            <div class="form-input-search-usuario">
                <img src="{{asset('assets/image/buscar.png')}}">
                <input type="text" id="name" name="name" required autofocus>
            </div>
            <div class="card-table-usuario">
                <div class="card-table-usuario-head">
                    <div class="usuario-i">#</div>
                    <div class="usuario-name">Nombres</div>
                    <div class="usuario-email">Email</div>
                    <div class="usuario-dni">DNI</div>
                    <div class="usuario-estado">Estado</div>
                    <div class="usuario-acciones">Editar</div>
                </div>
                @foreach ($users as $user)
                <div class="card-table-usuario-body">
                    <div class="usuario-i">{{ $user->id }}</div>
                    <div class="usuario-name">{{ $user->name }}</div>
                    <div class="usuario-email">{{ $user->email }}</div>
                    <div class="usuario-dni">{{ $user->dni }}</div>
                    <div class="usuario-estado">Inactivo</div>
                    <div class="usuario-acciones">
                        <a href="{{ route('edit_user', ['id' => $user->id]) }}">Editar</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
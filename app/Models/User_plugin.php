<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_plugin extends Model
{
    protected $table = 'user_plugins';
    protected $fillable = [
        'user_id',
        'rol',
        'estado',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}

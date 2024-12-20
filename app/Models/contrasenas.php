<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contrasenas extends Model
{
    use HasFactory;
    protected $connection = 'serve-yor';

    protected $table = 'proser.contrasenas';

    protected $fillable = [

        'nombre_usuario',
        'password',
        'server_id',

    ];
}

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

        'serve_id',
        'nombre_usuario',
        'password',


    ];
}

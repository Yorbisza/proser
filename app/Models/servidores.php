<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class servidores extends Model
{
    use HasFactory;
    protected $connection = 'serve-yor';

    protected $table = 'proser.servidores';

    protected $fillable = [

        'nombre_servidores',
        'ip_servidores',
        'puerto',
    ];
}

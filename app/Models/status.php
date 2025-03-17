<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class status extends Model
{
    use HasFactory;
    protected $connection = 'serve-yor';

    protected $table = 'public.status';

    protected $fillable = [

        'nombre',
        'descripcion',

    ];
}

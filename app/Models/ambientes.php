<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ambientes extends Model
{
    use HasFactory;
    protected $connection = 'serve-yor';

    protected $table = 'proser.ambientes';

    protected $fillable = [

        'nombre',

    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jardinplante extends Model
{
    use HasFactory;
    protected $table = 'plant_jardin';

    protected $primaryKey = 'id';

    protected $fillable = [
        'plant_id',
        'jardin_id',
        'quantite',
        'date_plantation',
    ];
}

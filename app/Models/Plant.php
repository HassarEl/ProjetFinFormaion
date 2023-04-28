<?php

namespace App\Models;

use App\Models\Jardin;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Plant extends Model
{
    use HasFactory;

    protected $table = 'plants';

    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'origin',
        'price',
    ];
    
    public function jardins()
    {
        return $this->belongsToMany(Jardin::class, 'plant_jardin', 'plant_id');
    }
    


}

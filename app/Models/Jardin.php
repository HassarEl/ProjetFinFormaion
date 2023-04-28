<?php

namespace App\Models;

use App\Models\Plant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Jardin extends Model
{
    use HasFactory;
    protected $table = 'jardins';

    protected $primaryKey = 'id';

    protected $fillable = [
        'NumJ',
        'nomJardin',
        'adresse',
        'ville',
        'image',
        'superficie',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    /* 
     * The roles that belong to the Jardin
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function plants()
    {
        return $this->belongsToMany(Plant::class, 'plant_jardin', 'jardin_id');
    }
    
}

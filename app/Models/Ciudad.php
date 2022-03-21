<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Ciudad extends Model
{
    use HasFactory;

    protected $table = 'ciudades';
    protected $primaryKey = 'id_ciudad';
    public $incrementing = false;
    public $timestamps = false;

    /**
     * Get all of the hoteles for the Ciudad
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function hoteles(): HasMany
    {
        return $this->hasMany(Hotel::class, 'id_ciudad');
    }
}
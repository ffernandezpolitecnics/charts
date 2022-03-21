<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Hotel extends Model
{
    use HasFactory;

    protected $table = 'hoteles';
    protected $primaryKey = ['id_ciudad', 'nombre'];
    public $incrementing = false;
    public $timestamps = false;

    /**
     * Get the user that owns the Hotel
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ciudad(): BelongsTo
    {
        return $this->belongsTo(Ciudad::class, 'id_ciudad');
    }
}
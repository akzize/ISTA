<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groupe extends Model
{
    use HasFactory;

    protected $fillable = [
        'groupe_code',
        'groupe_name',
        'filiere_id'
    ];

    /**
     * Get all of the filieres for the Promotion
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function filieres()
    {
        return $this->hasMany(Filiere::class);
    }
}

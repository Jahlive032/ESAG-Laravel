<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Etudiant extends Model{
    /**
     * @var string $table
     */
    protected $table = 'etudiants';

    /**
     * @var array $fillable
     */
    protected $fillable = [
        'id',
        'nom',
        'prenom',
		'sexe'
    ];

    use HasFactory;

    public function sexes(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Sexe::class, 'sexe');
    }
}

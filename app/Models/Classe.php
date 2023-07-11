<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Classe extends Model
{
    use HasFactory;

    protected $fillable = [
        'libelle',
        'niveau_id'
    ];
    public function niveau():BelongsTo{
        return $this->belongsTo(Niveau::class);
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Niveau extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function cycle():BelongsTo{
        return $this->belongsTo(Cycle::class);
    }
    public function classes():HasMany{
        return $this->hasMany(Classe::class);
    }

    
}
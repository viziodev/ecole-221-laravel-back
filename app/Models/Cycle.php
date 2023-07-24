<?php

namespace App\Models;

use App\Models\Niveau;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cycle extends Model
{
    use HasFactory;
    protected $hidden = [
        'created_at',
        'updated_at'
    ];
    
    protected $fillable = [
        'libelle'
    ];
    protected $guarded = [
        'id'
    ];

    public function niveaux(){
        return $this->hasMany(Niveau::class);
    }
}
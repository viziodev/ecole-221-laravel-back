<?php

namespace App\Models;

use App\Models\Cycle;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Niveau extends Model
{
    use HasFactory;
     protected $hidden = [
        'created_at',
        'updated_at'
    ];
    protected $guarded = [];
    protected $with = [
        //'cycle'
    ];

    public function cycle(){
        return $this->belongsTo(Cycle::class);
    }
}
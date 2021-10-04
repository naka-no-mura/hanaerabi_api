<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meaning extends Model
{
    use HasFactory;

    protected $fillable = [
        'meaning',
    ];

    public function flower()
    {
        return $this->belongsToMany('App\Models\Flower');
    }
}
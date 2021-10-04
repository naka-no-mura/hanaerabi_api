<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Flower;

class Season extends Model
{
    use HasFactory;

    protected $fillable = [
        'season',
    ];

    public function flower()
    {
        return $this->belongsToMany('App\Models\Flower');
    }

    public function meaning()
    {
        return $this->belongsToMany('App\Models\Meaning');
    }
}

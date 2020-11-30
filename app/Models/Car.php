<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as EloquentModel;

class Car extends EloquentModel
{
    use HasFactory;

    public function model()
    {
        return $this->belongsTo(Model::class);
    }

    public function color()
    {
        return $this->belongsTo(Color::class);
    }

    public function engine()
    {
        return $this->belongsTo(Engine::class);
    }
}

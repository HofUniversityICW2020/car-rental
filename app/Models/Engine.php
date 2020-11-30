<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Engine extends Model
{
    public const TYPE_GASOLINE = 1;
    public const TYPE_DIESEL = 2;

    use HasFactory;
}

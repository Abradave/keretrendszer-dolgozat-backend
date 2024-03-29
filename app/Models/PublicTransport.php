<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublicTransport extends Model
{
    use HasFactory;
    protected $fillable = [
        "model",
        "year_made",
        "capacity"
    ];
}

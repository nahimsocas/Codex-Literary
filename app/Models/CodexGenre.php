<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CodexGenre extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['genres_id', 'codexes_id'];
}

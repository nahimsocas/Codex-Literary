<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Codex extends Model
{
    use HasFactory;

    protected $fillable = ['cover', 'title', 'description', 'languages_id'];
}

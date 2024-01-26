<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requirement extends Model
{
    use HasFactory;

    public function upgrade()
    {
        return $this->belongsTo(Upgrade::class);
    }

    public function requirementable()
    {
        return $this->morphTo();
    }
}

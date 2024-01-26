<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requirement extends Model
{
    use HasFactory;

    protected $guarded = []; // todo: replace for fillable

    public function upgrade()
    {
        return $this->belongsTo(Upgrade::class);
    }

    public function requirementable()
    {
        return $this->morphTo();
    }

    public function type(): Attribute
    {
        return Attribute::get(fn ($value, $attributes) => str($attributes['requirementable_type'])->classBasename());
    }
}

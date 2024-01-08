<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class table_menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'menu',
        'kategori'
    ];

    protected function data(): Attribute{
        return Attribute::make(
            get: fn ($value) => json_decode($value, true),
            set: fn ($value) => json_decode($value),
        );
    }
}

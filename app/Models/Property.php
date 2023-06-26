<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'price',
        'description',
        'wc',
        'parking',
        'rooms',
    ];

    public function images() {
        return $this->hasMany(Image::class, 'property_id');
    }
}

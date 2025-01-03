<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
    ];

    // Relasi One to Many
    public function activityLog()
    {
        return $this->hasMany(activity_log::class); // One to Many relationship
    }
}

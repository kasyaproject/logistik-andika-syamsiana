<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class activity_log extends Model
{
    use HasFactory;

    protected $keyType = 'string';  // Mengatur tipe key menjadi string (UUID)

    protected $fillable = [
        'product_id',
        'activity_type',
        'quantity',
        'origin',
    ];

    // Relasi Many to One
    public function product()
    {
        return $this->belongsTo(Product::class); // Many to One relationship
    }
}

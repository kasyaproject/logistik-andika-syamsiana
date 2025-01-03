<?php

namespace Database\Seeders;

use App\Models\activity_log;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ActivityProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Menambahkan log aktivitas barang masuk
        $data = [
            [
                'id' => (string) Str::uuid(), // Menggunakan UUID
                'product_id' => 1, // Menggunakan id produk yang diambil
                'activity_type' => 'masuk', // Aktivitas masuk
                'quantity' => 100, // Jumlah barang yang masuk
                'origin' => 'Supplier A', // Asal barang
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => (string) Str::uuid(), // Menggunakan UUID
                'product_id' => 1, // Menggunakan id produk yang sama
                'activity_type' => 'keluar', // Aktivitas keluar
                'quantity' => 50, // Jumlah barang yang keluar
                'origin' => 'Retailer B', // Asal barang
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => (string) Str::uuid(),
                'product_id' => 2, // ID produk 2
                'activity_type' => 'masuk',
                'quantity' => 150,
                'origin' => 'Supplier B',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => (string) Str::uuid(),
                'product_id' => 2, // ID produk 2
                'activity_type' => 'keluar',
                'quantity' => 80,
                'origin' => 'Retailer C',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => (string) Str::uuid(),
                'product_id' => 3, // ID produk 3
                'activity_type' => 'masuk',
                'quantity' => 200,
                'origin' => 'Supplier C',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => (string) Str::uuid(),
                'product_id' => 3, // ID produk 3
                'activity_type' => 'keluar',
                'quantity' => 100,
                'origin' => 'Retailer D',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];


        activity_log::insert($data);
    }
}

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
        $data = [];
        for ($i = 1; $i <= 15; $i++) {
            // Data masuk
            $data[] = [
                'id' => (string) Str::uuid(),
                'product_id' => rand(1, 10), // ID produk sesuai iterasi
                'activity_type' => 'masuk',
                'quantity' => rand(50, 200), // Jumlah barang acak antara 50-200
                'origin' => 'Supplier ' . chr(64 + $i), // Asal barang dengan huruf abjad
                'created_at' => now(),
                'updated_at' => now(),
            ];

            // Data keluar
            $data[] = [
                'id' => (string) Str::uuid(),
                'product_id' => rand(1, 10), // ID produk sesuai iterasi
                'activity_type' => 'keluar',
                'quantity' => rand(20, 100), // Jumlah barang acak antara 20-100
                'origin' => 'Retailer ' . chr(64 + $i), // Asal barang dengan huruf abjad
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        activity_log::insert($data);
    }
}

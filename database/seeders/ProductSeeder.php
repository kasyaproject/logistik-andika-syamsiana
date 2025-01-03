<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::insert([
            [
                'name' => 'Laptop',
                'description' => 'Laptop modern dengan performa tinggi.',
                'price' => 15000000.00,
                'stock' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Smartphone',
                'description' => 'Smartphone dengan layar AMOLED.',
                'price' => 5000000.00,
                'stock' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Headset Bluetooth',
                'description' => 'Headset dengan kualitas suara HD.',
                'price' => 750000.00,
                'stock' => 50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Keyboard Mechanical',
                'description' => 'Keyboard dengan switch mechanical untuk gaming.',
                'price' => 1200000.00,
                'stock' => 30,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Mouse Gaming',
                'description' => 'Mouse gaming dengan DPI tinggi.',
                'price' => 850000.00,
                'stock' => 40,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Monitor 24 Inch',
                'description' => 'Monitor dengan resolusi Full HD.',
                'price' => 2500000.00,
                'stock' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Printer Laser',
                'description' => 'Printer laser cepat dan efisien.',
                'price' => 4000000.00,
                'stock' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Speaker Portable',
                'description' => 'Speaker dengan fitur Bluetooth.',
                'price' => 600000.00,
                'stock' => 35,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Power Bank',
                'description' => 'Power bank dengan kapasitas besar.',
                'price' => 300000.00,
                'stock' => 100,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Smartwatch',
                'description' => 'Jam tangan pintar dengan fitur kesehatan.',
                'price' => 2500000.00,
                'stock' => 45,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Drone',
                'description' => 'Drone dengan kamera 4K.',
                'price' => 12000000.00,
                'stock' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Tablet',
                'description' => 'Tablet dengan layar besar untuk produktivitas.',
                'price' => 6000000.00,
                'stock' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Router Wi-Fi',
                'description' => 'Router dengan kecepatan tinggi.',
                'price' => 800000.00,
                'stock' => 60,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Webcam',
                'description' => 'Webcam dengan resolusi HD untuk meeting online.',
                'price' => 500000.00,
                'stock' => 75,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'External Hard Drive',
                'description' => 'Penyimpanan eksternal dengan kapasitas 1TB.',
                'price' => 1500000.00,
                'stock' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

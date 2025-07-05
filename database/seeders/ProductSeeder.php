<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'MYKONOS - Caramel Fudge',
                'slug' => 'caramel-fudge',
                'description' => 'Parfum dengan aroma caramel yang manis dan menggoda.',
                'price' => 200000,
                'image' => 'caramelfudge-parfume-removebg-preview.png',
                'notes' => [
                    'top' => 'Caramel, Vanilla',
                    'middle' => 'Brown Sugar, Toffee',
                    'base' => 'Musk, Vanilla'
                ],
                'is_active' => true
            ],
            [
                'name' => 'MYKONOS - Vanilla Clouds',
                'slug' => 'vanilla-clouds',
                'description' => 'Parfum dengan aroma vanilla yang lembut dan nyaman.',
                'price' => 200000,
                'image' => 'vanillaclouds-parfume-removebg-preview.png',
                'notes' => [
                    'top' => 'Vanilla, Marshmallow',
                    'middle' => 'Cotton Candy, Caramel',
                    'base' => 'Musk, Vanilla'
                ],
                'is_active' => true
            ],
            [
                'name' => 'MYKONOS - Utopia',
                'slug' => 'utopia',
                'description' => 'Parfum dengan aroma yang menyegarkan.',
                'price' => 80000,
                'image' => 'utopia-paarfume-removebg-preview.png',
                'notes' => [
                    'top' => 'Citrus, Green Notes',
                    'middle' => 'Floral, Aquatic',
                    'base' => 'Musk, Woody'
                ],
                'is_active' => true
            ]
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}

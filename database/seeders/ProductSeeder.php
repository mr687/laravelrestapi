<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Product::factory(10)->create();

        for ($i=0; $i < 100; $i++) { 
            Product::create([
                'name' => "Product ke {$i}",
                'price' => 10000 * $i,
                'description' => "Deskripsi product ke {$i}",
            ]);
        }
    }
}

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
        Product::create([
        'category_id' => '1',
            'brand_id' => '1',
            'name' => 'Bag',
            'quantity' => '1',
            'color' => 'black',
            'buying_price'=>'1100',
            'selling_price' => '1200',
            'status' => 'false',
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::truncate(); 

        $product = new Product();
        $product->name = 'Pruducto 1';
        $product->description = fake()->paragraph();
        $product->price = 123.45;
        $product->tax = 5;
        $product->save();    

        $product = new Product();
        $product->name = 'Pruducto 2';
        $product->description = fake()->paragraph();
        $product->price = 45.65;
        $product->tax = 15;
        $product->save();    

        $product = new Product();
        $product->name = 'Pruducto 3';
        $product->description = fake()->paragraph();
        $product->price = 39.73;
        $product->tax = 12;
        $product->save();    

        $product = new Product();
        $product->name = 'Pruducto 4';
        $product->description = fake()->paragraph();
        $product->price = 250;
        $product->tax = 8;
        $product->save();    

        $product = new Product();
        $product->name = 'Pruducto 5';
        $product->description = fake()->paragraph();
        $product->price = 59.35;
        $product->tax = 10;
        $product->save();    
        
    }
}

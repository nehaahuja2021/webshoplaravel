<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
           [
            'name'=>'Carrots',
            'price'=>'5Euros',
            'description'=>"Fresh Carrots from farm",
            'category'=>"Vegetables",
            'gallery'=>"https://images.unsplash.com/photo-1532509774891-141d37f25ae9?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80"
           ],
           [
            'name'=>'Tomatoes',
            'price'=>'10Euros',
            'description'=>"Fresh Tomatoes from farm",
            'category'=>"Vegetables",
            'gallery'=>"https://images.unsplash.com/photo-1494220394759-e0b232f883ef?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=334&q=80"
           ],
           [
            'name'=>'Bananas',
            'price'=>'10Euros',
            'description'=>"Fresh Organically grown from farm",
            'category'=>"Fruits",
            'gallery'=>"https://images.unsplash.com/photo-1527546712175-827fa4321096?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=818&q=80"
           ],

           [
            'name'=>'Blueberries',
            'price'=>'12Euros',
            'description'=>"Fresh Berries from farm",
            'category'=>"Fruits",
            'gallery'=>"https://images.unsplash.com/photo-1527546712175-827fa4321096?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=818&q=80"
           ],

           [
            'name'=>'Blueberries',
            'price'=>'12Euros',
            'description'=>"Fresh Berries from farm",
            'category'=>"Fruits",
            'gallery'=>"https://images.unsplash.com/photo-1527546712175-827fa4321096?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=818&q=80"
           ],

         [
            'name'=>'Mixed Fruits',
            'price'=>'12Euros',
            'description'=>"From farm",
            'category'=>"Fruits",
            'gallery'=>"https://images.unsplash.com/photo-1519996529931-28324d5a630e?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=334&q=80"
           ],



          ]);
          
    }
}

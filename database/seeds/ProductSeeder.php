<?php

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
        DB::table('products')->insert([
            [
                'name'=>'Oppo mobile',
                'price'=>'200',
                'description'=>'A smartphone with 4gb ram and much more features',
                'category'=>'mobile',
                'gallery'=>'https://www.lg.com/in/images/mobile-phones/md06155757/gallery/Platinum_01-1100-V4.jpg'
            ],

            [
                'name'=>'Panasonic TV',
                'price'=>'200',
                'description'=>'A smart tv with much more features',
                'category'=>'tv',
                'gallery'=>'https://img.gigatron.rs/img/products/large/image5bd99a1ef2ccd.png'
            ],

            [
                'name'=>'Sony Tv',
                'price'=>'200',
                'description'=>'A tv with much more features',
                'category'=>'tv',
                'gallery'=>'https://img.gigatron.rs/img/products/large/image5e1d901b38d9c.png'
            ],
            [
                'name'=>'LG fridge',
                'price'=>'200',
                'description'=>'A fridge with much more features',
                'category'=>'fridge',
                'gallery'=>'https://www.lg.com/us/images/refrigerators/md07504171/gallery/desktop-01.jpgs'
                ],
        ]);
    }
}

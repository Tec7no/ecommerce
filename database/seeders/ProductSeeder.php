<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        //
        DB::table('products')->insert(
            [
                [
                    'name'=>'iPhone X',
                    'price'=>'214',
                    'description'=>'256GB Verizon GSM Unlocked T-Mobile AT&T 4G LTE - Good Condition',
                    'category'=>'mobile',
                    'gallery'=>'https://i.ebayimg.com/images/g/3qkAAOSwuz9lFDsX/s-l500.jpg'
                ],

                [
                    'name'=>'iPhone 11',
                    'price'=>'300',
                    'description'=>'Weight: 194 grams
                    Face ID
                    ROM: 4GB
                    4G LTE
                    Display: 6.1-inch Liquid Retina HD display
                    Splash, Water and Dust Resistant
                    A13 Bionic chip',
                    'category'=>'mobile',
                    'gallery'=>'https://m.media-amazon.com/images/I/715HCLsOHbL._AC_SX679_.jpg'
                ],

                [
                    'name'=>'iPhone 12',
                    'price'=>'519',
                    'description'=>'128GB - Factory Unlocked - Pre-Owned Very Good Condition',
                    'category'=>'mobile',
                    'gallery'=>'https://i.ebayimg.com/images/g/6VEAAOSwcrlhP6ad/s-l1600.jpg'
                ],

                [
                    'name'=>'iPhone 13',
                    'price'=>'1064',
                    'description'=>'6.1-inch Super Retina XDR display -  128GB Midnight',
                    'category'=>'mobile',
                    'gallery'=>'https://m.media-amazon.com/images/I/61VuVU94RnL.__AC_SY445_SX342_QL70_ML2_.jpg'
                ],

                [
                    'name'=>'iPhone 14',
                    'price'=>'2265',
                    'description'=>'Physical Dual Sim 256GB Deep Purple 5G Without FaceTime',
                    'category'=>'mobile',
                    'gallery'=>'https://f.nooncdn.com/p/v1686132021/N53346828A_1.jpg?format=avif&width=240'
                ],

                [
                    'name'=>'iPhone 15',
                    'price'=>'1064',
                    'description'=>'(256GB) - Titanium Black',
                    'category'=>'mobile',
                    'gallery'=>'https://m.media-amazon.com/images/I/41dFCfopoBL._AC_SX679_.jpg'
                ],

            ]
        );
    }
}

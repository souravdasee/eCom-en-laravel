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
        DB::table('products')->insert([
            [
                'name'=>'ipad',
                'price'=>'1000',
                'description'=>'Best Tablet',
                'catagory'=>'Tablet',
                'gallery'=>'https://i.gadgets360cdn.com/products/large/ipad-2022-706x800-1666162638.jpg?downsize=*:420&output-quality=80'
            ],
            [
                'name'=>'Asus ZenBook 17 Fold OLED (UX9702)',
                'price'=>'1500',
                'description'=>'Best Laptop',
                'catagory'=>'Laptop',
                'gallery'=>'https://i.gadgets360cdn.com/large/asus_zenbook_17_fold_main_ndtv_1666597494395.jpg?downsize=950:*'
            ],
            [
                'name'=>'Google Pixel 7',
                'price'=>'800',
                'description'=>'Best android phone',
                'catagory'=>'Mobile',
                'gallery'=>'https://i.gadgets360cdn.com/large/pixel7_xl_rear_black_ndtv_1665577002636.jpg'
            ],
            [
                'name'=>'Apple Watch',
                'price'=>'600',
                'description'=>'Best watch',
                'catagory'=>'Wearable',
                'gallery'=>'https://i.gadgets360cdn.com/large/apple_watch_series_6_review_cover_1606991072225.jpg?downsize=950:*?downsize=950:*'
            ]
        ]);
    }
}

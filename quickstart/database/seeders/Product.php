<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Product extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->delete();
        DB::table('product')->insert([
            ['id'=>1, 'product_code'=>'SP01', 'name'=>'Áo nam da thật MX105', 'price'=>500000, 'img'=>'no-img.jpg', 'category_id'=>2],
            ['id'=>2, 'product_code'=>'SP02', 'name'=>' Áo Thun Có Cổ', 'price'=>500000, 'img'=>'no-img.jpg', 'category_id'=>2],
            ['id'=>3, 'product_code'=>'SP03', 'name'=>'Quần âu nam Prazenta I-QAM61', 'price'=>500000, 'img'=>'no-img.jpg', 'category_id'=>3],
            ['id'=>4, 'product_code'=>'SP04', 'name'=>'Áo nữ cổ V viền tay xinh xắn', 'price'=>500000, 'img'=>'no-img.jpg', 'category_id'=>6],
            ['id'=>5, 'product_code'=>'SP05', 'name'=>'Quần Nữ Suông Ống Rộng', 'price'=>500000, 'img'=>'no-img.jpg', 'category_id'=>7],
            ['id'=>6, 'product_code'=>'SP06', 'name'=>'Áo Nữ Sơ Mi Chấm Bi', 'price'=>500000, 'img'=>'no-img.jpg', 'category_id'=>6],
            ['id'=>7, 'product_code'=>'SP07', 'name'=>'Áo Nữ Phối Viền', 'price'=>60000, 'img'=>'no-img.jpg', 'category_id'=>6],
            ['id'=>8, 'product_code'=>'SP08', 'name'=>'Áo Sơ Mi Có Cổ Đúc', 'price'=>700000, 'img'=>'no-img.jpg', 'category_id'=>6],
            ['id'=>9, 'product_code'=>'SP09', 'name'=>'Áo sơ mi caro xám Xanh', 'price'=>800000, 'img'=>'no-img.jpg', 'category_id'=>2],
            ['id'=>10, 'product_code'=>'SP010', 'name'=>'Áo Sơ Mi Hoạ Tiết Đen', 'price'=>900000, 'img'=>'no-img.jpg', 'category_id'=>2],
            ['id'=>11, 'product_code'=>'SP011', 'name'=>'Áo Sơ Mi Trắng Kem', 'price'=>100000, 'img'=>'no-img.jpg', 'category_id'=>2],
            ['id'=>12, 'product_code'=>'SP012', 'name'=>'Quần kaki Đỏ Nam', 'price'=>110000, 'img'=>'no-img.jpg', 'category_id'=>3],
            ['id'=>13, 'product_code'=>'SP013', 'name'=>'Quần kaki Xám', 'price'=>120000, 'img'=>'no-img.jpg', 'category_id'=>3],
        ]);
    }
}

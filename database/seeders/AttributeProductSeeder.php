<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttributeProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('attributes_products')->insert([
        [
        'attribute_id' => 1, //цвет
        'attribute_value_id' => 1, //черный
        'product_id' => 1, //футболка мужская
                                                        'created_at' => date('Y-m-d H:i,s'),
                                                        ],
        [
        'attribute_id' => 2, //размер
        'attribute_value_id' => 6, //большая
        'product_id' => 1, //футболка мужская
                                                        'created_at' => date('Y-m-d H:i,s'),
                                                        ],
        [
        'attribute_id' => 3, //материал
        'attribute_value_id' => 7, //хб
        'product_id' => 1, //футболка мужская
                                                        'created_at' => date('Y-m-d H:i,s'),
                                                        ],
        [
        'attribute_id' => 1, //цвет
        'attribute_value_id' => 3, //красный
        'product_id' => 2, //куртка мужская
                                                        'created_at' => date('Y-m-d H:i,s'),
                                                        ],
        [
        'attribute_id' => 2, //размер
        'attribute_value_id' => 6, //большая
        'product_id' => 2, //куртка мужская
                                                        'created_at' => date('Y-m-d H:i,s'),
                                                        ],
        [
        'attribute_id' => 3, //материал
        'attribute_value_id' => 8, //синтетика
        'product_id' => 2, //куртка мужская
                                                        'created_at' => date('Y-m-d H:i,s'),
                                                        ],
        [
        'attribute_id' => 1, //цвет
        'attribute_value_id' => 2, //белый
        'product_id' => 3, //толстовка мужская
                                                        'created_at' => date('Y-m-d H:i,s'),
                                                        ],
        [
        'attribute_id' => 2, //размер
        'attribute_value_id' => 6, //большая
        'product_id' => 3, //толстовка мужская
                                                        'created_at' => date('Y-m-d H:i,s'),
                                                        ],
        [
        'attribute_id' => 3, //материал
        'attribute_value_id' => 7, //хб
        'product_id' => 3, //толстовка мужская
                                                        'created_at' => date('Y-m-d H:i,s'),
                                                        ],
        [
        'attribute_id' => 1, //цвет
        'attribute_value_id' => 2, //белый
        'product_id' => 4, //футболка женская
                                                        'created_at' => date('Y-m-d H:i,s'),
                                                        ],
        [
        'attribute_id' => 2, //размер
        'attribute_value_id' => 5, //средняя
        'product_id' => 4, //футболка женская
                                                        'created_at' => date('Y-m-d H:i,s'),
                                                        ],
        [
        'attribute_id' => 3, //материал
        'attribute_value_id' => 7, //хб
        'product_id' => 4, //футболка женская
                                                        'created_at' => date('Y-m-d H:i,s'),
                                                        ],
        [
        'attribute_id' => 1, //цвет
        'attribute_value_id' => 1, //черный
        'product_id' => 5, //куртка женская
                                                        'created_at' => date('Y-m-d H:i,s'),
                                                        ],
        [
        'attribute_id' => 2, //размер
        'attribute_value_id' => 5, //средняя
        'product_id' => 5, //куртка женская
                                                        'created_at' => date('Y-m-d H:i,s'),
                                                        ],
        [
        'attribute_id' => 3, //материал
        'attribute_value_id' => 8, //синтетика
        'product_id' => 5, //куртка женская
                                                        'created_at' => date('Y-m-d H:i,s'),
                                                        ],
        [
        'attribute_id' => 1, //цвет
        'attribute_value_id' => 3, //красный
        'product_id' => 6, //толстовка женская
                                                        'created_at' => date('Y-m-d H:i,s'),
                                                        ],
        [
        'attribute_id' => 2, //размер
        'attribute_value_id' => 5, //средняя
        'product_id' => 6, //толстовка женская
                                                        'created_at' => date('Y-m-d H:i,s'),
                                                        ],
        [
        'attribute_id' => 3, //материал
        'attribute_value_id' => 7, //хб
        'product_id' => 6, //толстовка женская
                                                        'created_at' => date('Y-m-d H:i,s'),
                                                        ],
        [
        'attribute_id' => 1, //цвет
        'attribute_value_id' => 3, //красный
        'product_id' => 7, //футболка детская
                                                        'created_at' => date('Y-m-d H:i,s'),
                                                        ],
        [
        'attribute_id' => 2, //размер
        'attribute_value_id' => 4, //маленькая
        'product_id' => 7, //футболка детская
                                                        'created_at' => date('Y-m-d H:i,s'),
                                                        ],
        [
        'attribute_id' => 3, //материал
        'attribute_value_id' => 8, //синтетеика
        'product_id' => 7, //футболка детская
                                                        'created_at' => date('Y-m-d H:i,s'),
                                                        ],
        [
        'attribute_id' => 1, //цвет
        'attribute_value_id' => 1, //черный
        'product_id' => 8, //куртка детская
                                                        'created_at' => date('Y-m-d H:i,s'),
                                                        ],
        [
        'attribute_id' => 2, //размер
        'attribute_value_id' => 4, //маленькая
        'product_id' => 8, //куртка детская
                                                        'created_at' => date('Y-m-d H:i,s'),
                                                        ],
        [
        'attribute_id' => 3, //материал
        'attribute_value_id' => 8, //синтетика
        'product_id' => 8, //куртка детская
                                                        'created_at' => date('Y-m-d H:i,s'),
                                                        ],
        [
        'attribute_id' => 1, //цвет
        'attribute_value_id' => 3, //красный
        'product_id' => 9, //толстовка детская
                                                        'created_at' => date('Y-m-d H:i,s'),
                                                        ],
        [
        'attribute_id' => 2, //размер
        'attribute_value_id' => 4, //маленькая
        'product_id' => 9, //толстовка детская
                                                        'created_at' => date('Y-m-d H:i,s'),
                                                        ],
        [
        'attribute_id' => 3, //материал
        'attribute_value_id' => 7, //хб
        'product_id' => 9, //толстовка детская
                                                        'created_at' => date('Y-m-d H:i,s'),
                                                        ],

        ]);
    }
}

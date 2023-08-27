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
        DB::table('attribute_product')->insert([
        [
        'attribute_value_id' => 1, //черный
        'product_id' => 1, //футболка мужская
                                                        ],
        [
        'attribute_value_id' => 6, //большая
        'product_id' => 1, //футболка мужская
                                                        ],
        [
        'attribute_value_id' => 7, //хб
        'product_id' => 1, //футболка мужская
                                                        ],
        [
        'attribute_value_id' => 3, //красный
        'product_id' => 2, //куртка мужская
                                                        ],
        [
        'attribute_value_id' => 6, //большая
        'product_id' => 2, //куртка мужская
                                                        ],
        [
        'attribute_value_id' => 8, //синтетика
        'product_id' => 2, //куртка мужская
                                                        ],
        [
        'attribute_value_id' => 2, //белый
        'product_id' => 3, //толстовка мужская
                                                        ],
        [
        'attribute_value_id' => 6, //большая
        'product_id' => 3, //толстовка мужская
                                                        ],
        [
        'attribute_value_id' => 7, //хб
        'product_id' => 3, //толстовка мужская
                                                        ],
        [
        'attribute_value_id' => 2, //белый
        'product_id' => 4, //футболка женская
                                                        ],
        [
        'attribute_value_id' => 5, //средняя
        'product_id' => 4, //футболка женская
                                                        ],
        [
        'attribute_value_id' => 7, //хб
        'product_id' => 4, //футболка женская
                                                        ],
        [
        'attribute_value_id' => 1, //черный
        'product_id' => 5, //куртка женская
                                                        ],
        [
        'attribute_value_id' => 5, //средняя
        'product_id' => 5, //куртка женская
                                                        ],
        [
        'attribute_value_id' => 8, //синтетика
        'product_id' => 5, //куртка женская
                                                        ],
        [
        'attribute_value_id' => 3, //красный
        'product_id' => 6, //толстовка женская
                                                        ],
        [
        'attribute_value_id' => 5, //средняя
        'product_id' => 6, //толстовка женская
                                                        ],
        [
        'attribute_value_id' => 7, //хб
        'product_id' => 6, //толстовка женская
                                                        ],
        [
        'attribute_value_id' => 3, //красный
        'product_id' => 7, //футболка детская
                                                        ],
        [
        'attribute_value_id' => 4, //маленькая
        'product_id' => 7, //футболка детская
                                                        ],
        [
        'attribute_value_id' => 8, //синтетеика
        'product_id' => 7, //футболка детская
                                                        ],
        [
        'attribute_value_id' => 1, //черный
        'product_id' => 8, //куртка детская
                                                        ],
        [
        'attribute_value_id' => 4, //маленькая
        'product_id' => 8, //куртка детская
                                                        ],
        [
        'attribute_value_id' => 8, //синтетика
        'product_id' => 8, //куртка детская
                                                        ],
        [
        'attribute_value_id' => 3, //красный
        'product_id' => 9, //толстовка детская
                                                        ],
        [
        'attribute_value_id' => 4, //маленькая
        'product_id' => 9, //толстовка детская
                                                        ],
        [
        'attribute_value_id' => 7, //хб
        'product_id' => 9, //толстовка детская
                                                        ],

        ]);
    }
}

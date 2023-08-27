<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttributeValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('attribute_values')->insert([
        [
        'name' => 'Черный',
        'attribute_id' => 1,
                                                        'created_at' => date('Y-m-d H:i,s'),
],
        [
        'name' => 'Белый',
        'attribute_id' => 1,
                                                        'created_at' => date('Y-m-d H:i,s'),
],
        [
        'name' => 'Красный',
        'attribute_id' => 1,
                                                        'created_at' => date('Y-m-d H:i,s'),
],
        [
        'name' => 'Маленький',
        'attribute_id' => 2,
                                                        'created_at' => date('Y-m-d H:i,s'),
],
        [
        'name' => 'Средний',
        'attribute_id' => 2,
                                                        'created_at' => date('Y-m-d H:i,s'),
],
        [
        'name' => 'Большой',
        'attribute_id' => 2,
                                                        'created_at' => date('Y-m-d H:i,s'),
],
        [
        'name' => 'хб',
        'attribute_id' => 3,
                                                        'created_at' => date('Y-m-d H:i,s'),
],
        [
        'name' => 'синтетика',
        'attribute_id' => 3,
                                                        'created_at' => date('Y-m-d H:i,s'),
],
        [
        'name' => 'Шелк',
        'attribute_id' => 3,
                                                        'created_at' => date('Y-m-d H:i,s'),
],

        ]);
    }
}

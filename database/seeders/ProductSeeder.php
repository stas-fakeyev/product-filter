<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('products')->insert([
        [
        'name' => 'Футболка мужская',
        'category_id' => 1,
                                                'created_at' => date('Y-m-d H:i,s'),
],
        [
        'name' => 'Куртка мужская',
        'category_id' => 1,
                                                'created_at' => date('Y-m-d H:i,s'),
],
        [
        'name' => 'Толстовка мужская',
        'category_id' => 1,
                                                'created_at' => date('Y-m-d H:i,s'),
],
        [
        'name' => 'Футболка женская',
        'category_id' => 2,
                                                'created_at' => date('Y-m-d H:i,s'),
],
        [
        'name' => 'Куртка женская',
        'category_id' => 2,
                                                'created_at' => date('Y-m-d H:i,s'),
],
        [
        'name' => 'Толстовка женская',
        'category_id' => 2,
                                                'created_at' => date('Y-m-d H:i,s'),
],
        [
        'name' => 'Футболка детская',
        'category_id' => 3,
                                                'created_at' => date('Y-m-d H:i,s'),
],
        [
        'name' => 'Куртка детская',
        'category_id' => 3,
                                                'created_at' => date('Y-m-d H:i,s'),
],
        [
        'name' => 'Толстовка детская',
        'category_id' => 3,
                                                'created_at' => date('Y-m-d H:i,s'),
],
        ]);
    }
}

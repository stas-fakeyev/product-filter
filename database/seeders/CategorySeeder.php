<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('categories')->insert([
        [
        'name' => 'Мужская одежда',
                                        'created_at' => date('Y-m-d H:i,s'),
],
        [
        'name' => 'Женская одежда',
                                        'created_at' => date('Y-m-d H:i,s'),
],
        [
        'name' => 'Детская одежда',
                                        'created_at' => date('Y-m-d H:i,s'),
],
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('attributes')->insert([
        [
        'name' => 'Цвет',
                                                'created_at' => date('Y-m-d H:i,s'),
],
        [
        'name' => 'Размер',
                                                'created_at' => date('Y-m-d H:i,s'),
],
        [
        'name' => 'Материал',
                                                'created_at' => date('Y-m-d H:i,s'),
],
        ]);
    }
}

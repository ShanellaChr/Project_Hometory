<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert(
            [
                [
                    // 1
                    'category' => 'Personal Care', 
                ],
                [
                    // 2
                    'category' => 'Foods',
                ],
                [
                    // 3
                    'category' => 'Beverages',
                ],
                [
                    // 4
                    'category' => 'Kitchen Needs',
                ],
                [
                    // 5
                    'category' => 'Household Essentials',
                ],
                [
                    // 6
                    'category' => 'Health Supplies',
                ],
            ]
        );
    }
}
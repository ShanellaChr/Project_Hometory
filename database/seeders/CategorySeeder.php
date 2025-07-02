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
                    'color' => 'pinkcategory'
                ],
                [
                    // 2
                    'category' => 'Foods',
                    'color' => 'merahtuacategory'
                ],
                [
                    // 3
                    'category' => 'Beverages',
                    'color' => 'birucategory'
                ],
                [
                    // 4
                    'category' => 'Kitchen Needs',
                    'color' => 'coklatcategory'
                ],
                [
                    // 5
                    'category' => 'Household Essentials',
                    'color' => 'ijocategory'
                ],
                [
                    // 6
                    'category' => 'Health Supplies',
                    'color' => 'merahcategory'
                ],
            ]
        );
    }
}

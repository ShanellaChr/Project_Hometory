<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('subcategories')->insert(
            [
                [
                    'subcategory' => 'Makeup & Cosmetics',
                    'img' => 'img/Personal Care - Makeup & Cosmetics.svg',
                    'category_id' => 1,
                ],
                [
                    'subcategory' => 'Body Care',
                    'img' => 'img/PC - Body Care.svg',
                    'category_id' => 1,
                ],
                [
                    'subcategory' => 'Facial Care',
                    'img' => 'img/PC - Facial Care.svg',
                    'category_id' => 1,
                ],
                [
                    'subcategory' => 'Hair Care',
                    'img' => 'img/Personal Care - Hair Care.svg',
                    'category_id' => 1,
                ],
                [
                    'subcategory' => 'Fragrances',
                    'img' => 'img/Personal Care - Fragrances.svg',
                    'category_id' => 1,
                ],
                [
                    'subcategory' => 'Feminine Hygiene & Diapers',
                    'img' => 'img/Personal Care - Feminine Hygiene & Diapers.svg',
                    'category_id' => 1,
                ],
                [
                    'subcategory' => 'Oral Care',
                    'img' => 'img/Personal Care - Oral Care.svg',
                    'category_id' => 1,
                ],
                [
                    'subcategory' => 'Instant Food',
                    'img' => 'img/Foods - Instant Food.svg',
                    'category_id' => 2,
                ],
                [
                    'subcategory' => 'Snacks',
                    'img' => 'img/Foods - Snacks.svg',
                    'category_id' => 2,
                ],
                [
                    'subcategory' => 'Canned Food',
                    'img' => 'img/Foods - Canned Food.svg',
                    'category_id' => 2,
                ],
                [
                    'subcategory' => 'Spreads & Cereals',
                    'img' => 'img/Foods - Spreads & Cereals.svg',
                    'category_id' => 2,
                ],
                [
                    'subcategory' => 'Dairy Products',
                    'img' => 'img/Beverages - Dairy Products.svg',
                    'category_id' => 3,
                ],
                [
                    'subcategory' => 'Soft Drinks',
                    'img' => 'img/Beverages - Soft Drinks.svg',
                    'category_id' => 3,
                ],
                [
                    'subcategory' => 'Instant Beverages',
                    'img' => 'img/Beverages - Instant Beverages.svg',
                    'category_id' => 3,
                ],
                [
                    'subcategory' => 'Kitchen & Dining Utensils',
                    'img' => 'img/Kitchen Needs - Kitchen & Dining Utensils.svg',
                    'category_id' => 4,
                ],
                [
                    'subcategory' => 'Seasonings & Spices',
                    'img' => 'img/Kitchen Needs - Seasonings & Spices.svg',
                    'category_id' => 4,
                ],
                [
                    'subcategory' => 'Baking Ingredients',
                    'img' => 'img/Kitchen Needs - Baking Ingredients.svg',
                    'category_id' => 4,
                ],
                [
                    'subcategory' => 'Cooking Ingredients',
                    'img' => 'img/Kitchen Needs - Cooking Ingredients.svg',
                    'category_id' => 4,
                ],
                [
                    'subcategory' => 'Cleaning & Care Products',
                    'img' => 'img/Household Essentials - Cleaning & Care Products.svg',
                    'category_id' => 5,
                ],
                [
                    'subcategory' => 'Home Utilities',
                    'img' => 'img/Household Essentials - Home Utilities.svg',
                    'category_id' => 5,
                ],
                [
                    'subcategory' => 'Fresheners & Dehumidifiers',
                    'img' => 'img/Household Essentials - Air Fresheners & Dehumidifiers.svg',
                    'category_id' => 5,
                ],
                [
                    'subcategory' => 'Pest Control',
                    'img' => 'img/Household Essentials - Pest Control.svg',
                    'category_id' => 5,
                ],
                [
                    'subcategory' => 'Medicines',
                    'img' => 'img/Health Supplies - Medicines.svg',
                    'category_id' => 6,
                ],
                [
                    'subcategory' => 'Vitamins & Supplements',
                    'img' => 'img/Health Supplies - Vitamins & Supplements.svg',
                    'category_id' => 6,
                ],
                [
                    'subcategory' => 'Medical Devices',
                    'img' => 'img/Health Supplies - Medical Devices.svg',
                    'category_id' => 6,
                ],
                [
                    'subcategory' => 'Hygiene Products',
                    'img' => 'img/Health Supplies - Hygiene Products.svg',
                    'category_id' => 6,
                ],

            ]
        );
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StatisticSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('statistics')->insert([
            [
                'category_id' => 1,
                'month_year' => '2025-06',
                'total_items' => 210,
                // // 'total_percentage' => 21,
            ],
            [
                'category_id' => 2,
                'month_year' => '2025-06',
                'total_items' => 178,
                // // 'total_percentage' => 17.8,
            ],
            [
                'category_id' => 3,
                'month_year' => '2025-06',
                'total_items' => 154,
                // // 'total_percentage' => 15.4,
            ],
            [
                'category_id' => 4,
                'month_year' => '2025-06',
                'total_items' => 228,
                // // 'total_percentage' => 22.8,
            ],
            [
                'category_id' => 5,
                'month_year' => '2025-06',
                'total_items' => 125,
                // // 'total_percentage' => 12.5,
            ],
            [
                'category_id' => 6,
                'month_year' => '2025-06',
                'total_items' => 105,
                // // 'total_percentage' => 10.5,
            ],
            // juli
            [
                'category_id' => 1,
                'month_year' => '2025-07',
                'total_items' => 43,
                // // 'total_percentage' => 14.88,
            ],
            [
                'category_id' => 2,
                'month_year' => '2025-07',
                'total_items' => 36,
                // // 'total_percentage' => 12.46
            ],
            [
                'category_id' => 3,
                'month_year' => '2025-07',
                'total_items' => 27,
                // // 'total_percentage' => 9.34,
            ],
            [
                'category_id' => 4,
                'month_year' => '2025-07',
                'total_items' => 80,
                // // 'total_percentage' => 27.68,
            ],
            [
                'category_id' => 5,
                'month_year' => '2025-07',
                'total_items' => 91,
                // // 'total_percentage' => 31.49,
            ],
            [
                'category_id' => 6,
                'month_year' => '2025-07',
                'total_items' => 12,
                // // 'total_percentage' => 4.15,
            ],
            // agustus
            [
                'category_id' => 1,
                'month_year' => '2025-08',
                'total_items' => 52,
                // // 'total_percentage' => 17.99,
            ],
            [
                'category_id' => 2,
                'month_year' => '2025-08',
                'total_items' => 41,
                // // 'total_percentage' => 14.19,
            ],
            [
                'category_id' => 3,
                'month_year' => '2025-08',
                'total_items' => 34,
                // // 'total_percentage' => 11.76,
            ],
            [
                'category_id' => 4,
                'month_year' => '2025-08',
                'total_items' => 62,
                // // 'total_percentage' => 21.45,
            ],
            [
                'category_id' => 5,
                'month_year' => '2025-08',
                'total_items' => 76,
                // // 'total_percentage' => 26.3,
            ],
            [
                'category_id' => 6,
                'month_year' => '2025-08',
                'total_items' => 24,
                // // 'total_percentage' => 8.3,
            ],
            // september
            [
                'category_id' => 1,
                'month_year' => '2025-09',
                'total_items' => 63,
                // // 'total_percentage' => 19.27,
            ],
            [
                'category_id' => 2,
                'month_year' => '2025-09',
                'total_items' => 52,
                // // 'total_percentage' => 15.9,
            ],
            [
                'category_id' => 3,
                'month_year' => '2025-09',
                'total_items' => 38,
                // // 'total_percentage' => 11.63,
            ],
            [
                'category_id' => 4,
                'month_year' => '2025-09',
                'total_items' => 70,
                // // 'total_percentage' => 21.41,
            ],
            [
                'category_id' => 5,
                'month_year' => '2025-09',
                'total_items' => 84,
                // // 'total_percentage' => 25.69,
            ],
            [
                'category_id' => 6,
                'month_year' => '2025-09',
                'total_items' => 20,
                // // 'total_percentage' => 6.12,
            ],
            // oktober
            [
                'category_id' => 1,
                'month_year' => '2025-10',
                'total_items' => 56,
                // // 'total_percentage' => 18.6,
            ],
            [
                'category_id' => 2,
                'month_year' => '2025-10',
                'total_items' => 49,
                // // 'total_percentage' => 16.28,
            ],
            [
                'category_id' => 3,
                'month_year' => '2025-10',
                'total_items' => 34,
                // // 'total_percentage' => 11.3,
            ],
            [
                'category_id' => 4,
                'month_year' => '2025-10',
                'total_items' => 61,
                // // 'total_percentage' => 20.27,
            ],
            [
                'category_id' => 5,
                'month_year' => '2025-10',
                'total_items' => 78,
                // // 'total_percentage' => 25.91,
            ],
            [
                'category_id' => 6,
                'month_year' => '2025-10',
                'total_items' => 23,
                // // 'total_percentage' => 7.64,
            ],
            // november
            [
                'category_id' => 1,
                'month_year' => '2025-11',
                'total_items' => 81,
                // // 'total_percentage' => 19.38,
            ],
            [
                'category_id' => 2,
                'month_year' => '2025-11',
                'total_items' => 67,
                // // 'total_percentage' => 16.03,
            ],
            [
                'category_id' => 3,
                'month_year' => '2025-11',
                'total_items' => 54,
                // // 'total_percentage' => 12.92,
            ],
            [
                'category_id' => 4,
                'month_year' => '2025-11',
                'total_items' => 88,
                // // 'total_percentage' => 21.05,
            ],
            [
                'category_id' => 5,
                'month_year' => '2025-11',
                'total_items' => 102,
                // // 'total_percentage' => 24.4,
            ],
            [
                'category_id' => 6,
                'month_year' => '2025-11',
                'total_items' => 26,
                // // 'total_percentage' => 6.22,
            ],
            // desember
            [
                'category_id' => 1,
                'month_year' => '2025-12',
                'total_items' => 50,
                // // 'total_percentage' => 18.87,
            ],
            [
                'category_id' => 2,
                'month_year' => '2025-12',
                'total_items' => 39,
                // // 'total_percentage' => 14.72,
            ],
            [
                'category_id' => 3,
                'month_year' => '2025-12',
                'total_items' => 30,
                // // 'total_percentage' => 11.32,
            ],
            [
                'category_id' => 4,
                'month_year' => '2025-12',
                'total_items' => 56,
                // // 'total_percentage' => 21.13,
            ],
            [
                'category_id' => 5,
                'month_year' => '2025-12',
                'total_items' => 65,
                // // 'total_percentage' => 24.53,
            ],
            [
                'category_id' => 6,
                'month_year' => '2025-12',
                'total_items' => 25,
                // // 'total_percentage' => 9.43,
            ],
            // jan 26
            [
                'category_id' => 1,
                'month_year' => '2026-01',
                'total_items' => 71,
                // // 'total_percentage' => 18.3,
            ],
            [
                'category_id' => 2,
                'month_year' => '2026-01',
                'total_items' => 58,
                // // 'total_percentage' => 14.95,
            ],
            [
                'category_id' => 3,
                'month_year' => '2026-01',
                'total_items' => 54,
                // // 'total_percentage' => 13.92,
            ],
            [
                'category_id' => 4,
                'month_year' => '2026-01',
                'total_items' => 81,
                // // 'total_percentage' => 20.88,
            ],
            [
                'category_id' => 5,
                'month_year' => '2026-01',
                'total_items' => 86,
                // // 'total_percentage' => 22.16,
            ],
            [
                'category_id' => 6,
                'month_year' => '2026-01',
                'total_items' => 38,
                // // 'total_percentage' => 9.79,
            ],
            // februari
            [
                'category_id' => 1,
                'month_year' => '2026-02',
                'total_items' => 48,
                // 'total_percentage' => 17.33,
            ],
            [
                'category_id' => 2,
                'month_year' => '2026-02',
                'total_items' => 47,
                // 'total_percentage' => 16.97,
            ],
            [
                'category_id' => 3,
                'month_year' => '2026-02',
                'total_items' => 26,
                // 'total_percentage' => 9.39,
            ],
            [
                'category_id' => 4,
                'month_year' => '2026-02',
                'total_items' => 62,
                // 'total_percentage' => 22.38,
            ],
            [
                'category_id' => 5,
                'month_year' => '2026-02',
                'total_items' => 74,
                // 'total_percentage' => 26.71,
            ],
            [
                'category_id' => 6,
                'month_year' => '2026-02',
                'total_items' => 20,
                // 'total_percentage' => 7.22,
            ],
            // maret
            [
                'category_id' => 1,
                'month_year' => '2026-03',
                'total_items' => 59,
                // 'total_percentage' => 19.22,
            ],
            [
                'category_id' => 2,
                'month_year' => '2026-03',
                'total_items' => 53,
                // 'total_percentage' => 17.26,
            ],
            [
                'category_id' => 3,
                'month_year' => '2026-03',
                'total_items' => 31,
                // 'total_percentage' => 10.1,
            ],
            [
                'category_id' => 4,
                'month_year' => '2026-03',
                'total_items' => 68,
                // 'total_percentage' => 22.15,
            ],
            [
                'category_id' => 5,
                'month_year' => '2026-03',
                'total_items' => 73,
                // 'total_percentage' => 23.78,
            ],
            [
                'category_id' => 6,
                'month_year' => '2026-03',
                'total_items' => 23,
                // 'total_percentage' => 7.49,
            ],
            // april
            [
                'category_id' => 1,
                'month_year' => '2026-04',
                'total_items' => 52,
                // 'total_percentage' => 20.0,
            ],
            [
                'category_id' => 2,
                'month_year' => '2026-04',
                'total_items' => 41,
                // 'total_percentage' => 15.77,
            ],
            [
                'category_id' => 3,
                'month_year' => '2026-04',
                'total_items' => 29,
                // 'total_percentage' => 11.15,
            ],
            [
                'category_id' => 4,
                'month_year' => '2026-04',
                'total_items' => 55,
                // 'total_percentage' => 21.15,
            ],
            [
                'category_id' => 5,
                'month_year' => '2026-04',
                'total_items' => 56,
                // 'total_percentage' => 21.54,
            ],
            [
                'category_id' => 6,
                'month_year' => '2026-04',
                'total_items' => 27,
                // 'total_percentage' => 10.38,
            ],
            // mei
            [
                'category_id' => 1,
                'month_year' => '2026-05',
                'total_items' => 60,
                // 'total_percentage' => 19.29,
            ],
            [
                'category_id' => 2,
                'month_year' => '2026-05',
                'total_items' => 37,
                // 'total_percentage' => 11.9,
            ],
            [
                'category_id' => 3,
                'month_year' => '2026-05',
                'total_items' => 36,
                // 'total_percentage' => 11.58,
            ],
            [
                'category_id' => 4,
                'month_year' => '2026-05',
                'total_items' => 68,
                // 'total_percentage' => 21.86,
            ],
            [
                'category_id' => 5,
                'month_year' => '2026-05',
                'total_items' => 74,
                // 'total_percentage' => 23.79,
            ],
            [
                'category_id' => 6,
                'month_year' => '2026-05',
                'total_items' => 36,
                // 'total_percentage' => 11.58,
            ],
            // juni 26
            [
                'category_id' => 1,
                'month_year' => '2026-06',
                'total_items' => 56,
                // 'total_percentage' => 17.95,
            ],
            [
                'category_id' => 2,
                'month_year' => '2026-06',
                'total_items' => 39,
                // 'total_percentage' => 12.5,
            ],
            [
                'category_id' => 3,
                'month_year' => '2026-06',
                'total_items' => 32,
                // 'total_percentage' => 10.26,
            ],
            [
                'category_id' => 4,
                'month_year' => '2026-06',
                'total_items' => 70,
                // 'total_percentage' => 22.44,
            ],
            [
                'category_id' => 5,
                'month_year' => '2026-06',
                'total_items' => 94,
                // 'total_percentage' => 30.13,
            ],
            [
                'category_id' => 6,
                'month_year' => '2026-06',
                'total_items' => 21,
                // 'total_percentage' => 6.73,
            ],
            
        ]);
    }
}
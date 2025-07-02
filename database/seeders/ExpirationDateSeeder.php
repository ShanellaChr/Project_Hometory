<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ExpirationDateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('expiration_dates')->insert(
            [
                [ // 1
                    'item_id' => 1,
                    'expiration_date' => '06-05-2025',
                    'qty' => 3,
                ],
                [ // 2
                    'item_id' => 1,
                    'expiration_date' => '06-23-2025',
                    'qty' => 1,
                ],
                [ // 3
                    'item_id' => 1,
                    'expiration_date' => '07-07-2025',
                    'qty' => 1,
                ],
                [ // 4
                    'item_id' => 2,
                    'expiration_date' => '08-17-2025',
                    'qty' => 1,
                ],
                [ // 5
                    'item_id' => 3,
                    'expiration_date' => '02-02-2025',
                    'qty' => 1,
                ],
                [ // 6
                    'item_id' => 4,
                    'expiration_date' => '09-02-2025',
                    'qty' => 3,
                ],
                [ // 7
                    'item_id' => 5,
                    'expiration_date' => '01-01-2026',
                    'qty' => 4,
                ],
                [ // 8
                    'item_id' => 6,
                    'expiration_date' => '10-08-2025',
                    'qty' => 2,
                ],
                [ // 9
                    'item_id' => 7,
                    'expiration_date' => '11-15-2025',
                    'qty' => 2,
                ],
                ['item_id' => 8, 'expiration_date' => '11-15-2025', 'qty' => 2],
                ['item_id' => 9, 'expiration_date' => '11-15-2025', 'qty' => 2],
                ['item_id' => 10, 'expiration_date' => '11-15-2025', 'qty' => 2],
                ['item_id' => 11, 'expiration_date' => '11-15-2025', 'qty' => 2],
                ['item_id' => 12, 'expiration_date' => '11-15-2025', 'qty' => 2],
                ['item_id' => 13, 'expiration_date' => '11-15-2025', 'qty' => 2],
                ['item_id' => 14, 'expiration_date' => '11-15-2025', 'qty' => 2],
                ['item_id' => 15, 'expiration_date' => '11-15-2025', 'qty' => 2],
                ['item_id' => 16, 'expiration_date' => '11-15-2025', 'qty' => 2],
                ['item_id' => 17, 'expiration_date' => '11-15-2025', 'qty' => 2],
                ['item_id' => 18, 'expiration_date' => '11-15-2025', 'qty' => 2],
                ['item_id' => 19, 'expiration_date' => '11-15-2025', 'qty' => 2],
                ['item_id' => 20, 'expiration_date' => '11-15-2025', 'qty' => 2],
                ['item_id' => 21, 'expiration_date' => '11-15-2025', 'qty' => 2],
                ['item_id' => 22, 'expiration_date' => '11-15-2025', 'qty' => 2],
                ['item_id' => 23, 'expiration_date' => '11-15-2025', 'qty' => 2],
                ['item_id' => 24, 'expiration_date' => '11-15-2025', 'qty' => 2],
                ['item_id' => 25, 'expiration_date' => '11-15-2025', 'qty' => 2],
                ['item_id' => 26, 'expiration_date' => '11-15-2025', 'qty' => 2],
                ['item_id' => 27, 'expiration_date' => '11-15-2025', 'qty' => 2],
                ['item_id' => 28, 'expiration_date' => '11-15-2025', 'qty' => 2],
                ['item_id' => 29, 'expiration_date' => '11-15-2025', 'qty' => 2],
                ['item_id' => 30, 'expiration_date' => '11-15-2025', 'qty' => 2],
                ['item_id' => 31, 'expiration_date' => '11-15-2025', 'qty' => 2],
                ['item_id' => 32, 'expiration_date' => '11-15-2025', 'qty' => 2],
                ['item_id' => 33, 'expiration_date' => '11-15-2025', 'qty' => 2],
                ['item_id' => 34, 'expiration_date' => '11-15-2025', 'qty' => 2],
                ['item_id' => 35, 'expiration_date' => '11-15-2025', 'qty' => 2],
                ['item_id' => 36, 'expiration_date' => '11-15-2025', 'qty' => 2],
                ['item_id' => 37, 'expiration_date' => '11-15-2025', 'qty' => 2],
                ['item_id' => 38, 'expiration_date' => '11-15-2025', 'qty' => 2],
                ['item_id' => 39, 'expiration_date' => '11-15-2025', 'qty' => 2],
                ['item_id' => 40, 'expiration_date' => '11-15-2025', 'qty' => 2],
                ['item_id' => 41, 'expiration_date' => '11-15-2025', 'qty' => 2],
                ['item_id' => 42, 'expiration_date' => '11-15-2025', 'qty' => 2],
                ['item_id' => 43, 'expiration_date' => '11-15-2025', 'qty' => 2],
                ['item_id' => 44, 'expiration_date' => '11-15-2025', 'qty' => 2],
                ['item_id' => 45, 'expiration_date' => '11-15-2025', 'qty' => 2],
                ['item_id' => 46, 'expiration_date' => '11-15-2025', 'qty' => 2],
                ['item_id' => 47, 'expiration_date' => '11-15-2025', 'qty' => 2],
                ['item_id' => 48, 'expiration_date' => '11-15-2025', 'qty' => 2],
                ['item_id' => 49, 'expiration_date' => '11-15-2025', 'qty' => 2],
                ['item_id' => 50, 'expiration_date' => '11-15-2025', 'qty' => 2],
                ['item_id' => 51, 'expiration_date' => '11-15-2025', 'qty' => 2],
                ['item_id' => 52, 'expiration_date' => '11-15-2025', 'qty' => 2],
                ['item_id' => 53, 'expiration_date' => '11-15-2025', 'qty' => 2],
                ['item_id' => 54, 'expiration_date' => '11-15-2025', 'qty' => 2],
                ['item_id' => 55, 'expiration_date' => '11-15-2025', 'qty' => 2],
                ['item_id' => 56, 'expiration_date' => '11-15-2025', 'qty' => 2],
                ['item_id' => 57, 'expiration_date' => '11-15-2025', 'qty' => 2],
                ['item_id' => 58, 'expiration_date' => '11-15-2025', 'qty' => 2],
                // [ // 10
                //     'expiration_date' => '12-17-2025',
                //     'qty' => 3,
                // ],
                // [ // 11
                //     'expiration_date' => '09-18-2025',
                //     'qty' => 1,
                // ],
                // [ // 12
                //     'expiration_date' => '08-16-2025',
                //     'qty' => 2,
                // ],
                // [ // 13
                //     'expiration_date' => '08-16-2025',
                //     'qty' => 1,
                // ],
                // [ // 14
                //     'expiration_date' => '09-27-2025',
                //     'qty' => 1,
                // ],
                // [ // 15
                //     'expiration_date' => '11-03-2025',
                //     'qty' => 1,
                // ],
            ]
        );
    }
}
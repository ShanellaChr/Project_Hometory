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
                    'expiration_date' => '06-05-2025',
                    'qty' => 3,
                ],
                [ // 2
                    'expiration_date' => '06-23-2025',
                    'qty' => 1,
                ],
                [ // 3
                    'expiration_date' => '07-07-2025',
                    'qty' => 1,
                ],
                [ // 4
                    'expiration_date' => '08-17-2025',
                    'qty' => 1,
                ],
                [ // 5
                    'expiration_date' => '02-02-2025',
                    'qty' => 1,
                ],
                [ // 6
                    'expiration_date' => '09-02-2025',
                    'qty' => 3,
                ],
                [ // 7
                    'expiration_date' => '01-01-2026',
                    'qty' => 4,
                ],
                [ // 8
                    'expiration_date' => '10-08-2025',
                    'qty' => 2,
                ],
                [ // 9
                    'expiration_date' => '11-15-2025',
                    'qty' => 2,
                ],
                [ // 10
                    'expiration_date' => '12-17-2025',
                    'qty' => 3,
                ],
                [ // 11
                    'expiration_date' => '09-18-2025',
                    'qty' => 1,
                ],
                [ // 12
                    'expiration_date' => '08-16-2025',
                    'qty' => 2,
                ],
                [ // 13
                    'expiration_date' => '08-16-2025',
                    'qty' => 1,
                ],
                [ // 14
                    'expiration_date' => '09-27-2025',
                    'qty' => 1,
                ],
                [ // 15
                    'expiration_date' => '11-03-2025',
                    'qty' => 1,
                ],
            ]
        );
    }
}
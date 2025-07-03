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
        DB::table('expiration_dates')->insert([
            ['item_id' => 1, 'expiration_date' => '2025-05-06', 'qty' => 3],
            ['item_id' => 1, 'expiration_date' => '2025-06-23', 'qty' => 1],
            ['item_id' => 1, 'expiration_date' => '2025-07-07', 'qty' => 1],
            ['item_id' => 2, 'expiration_date' => '2025-08-17', 'qty' => 1],
            ['item_id' => 5, 'expiration_date' => '2026-01-01', 'qty' => 4],
            ['item_id' => 6, 'expiration_date' => '2025-08-10', 'qty' => 2],
            ['item_id' => 7, 'expiration_date' => '2025-11-15', 'qty' => 2],
            ['item_id' => 8, 'expiration_date' => '2025-11-15', 'qty' => 2],
            ['item_id' => 9, 'expiration_date' => '2025-11-15', 'qty' => 2],
            ['item_id' => 10, 'expiration_date' => '2025-11-15', 'qty' => 2],
            ['item_id' => 11, 'expiration_date' => '2025-11-15', 'qty' => 2],
            ['item_id' => 12, 'expiration_date' => '2025-11-15', 'qty' => 2],
            ['item_id' => 13, 'expiration_date' => '2025-11-15', 'qty' => 2],
            ['item_id' => 14, 'expiration_date' => '2025-11-15', 'qty' => 2],
            ['item_id' => 15, 'expiration_date' => '2025-11-15', 'qty' => 2],
            ['item_id' => 16, 'expiration_date' => '2025-11-15', 'qty' => 2],
            ['item_id' => 17, 'expiration_date' => '2025-11-15', 'qty' => 2],
            ['item_id' => 18, 'expiration_date' => '2025-11-15', 'qty' => 2],
            ['item_id' => 19, 'expiration_date' => '2025-11-15', 'qty' => 2],
            ['item_id' => 20, 'expiration_date' => '2025-11-15', 'qty' => 2],
            ['item_id' => 21, 'expiration_date' => '2025-11-15', 'qty' => 2],
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transactions')->insert([
            [
                'created_order' => '2020-12-01 11:30:00',
                'status' => 'lunas',
                'payment_date' => '2020-12-01 12:00:00',
            ],
            [
                'created_order' => '2020-12-02 10:30:00',
                'status' => 'pending',
                'payment_date' => null,
            ]
        ]);
    }
}

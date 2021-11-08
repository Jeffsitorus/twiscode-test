<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transaction_details')->insert([
            [
                'transaction_id' => 1,
                'price' => 10000,
                'qty' => 2,
                'subtotal' => 20000,
            ],
            [
                'transaction_id' => 2,
                'price' => 6250,
                'qty' => 4,
                'subtotal' => 25000,
            ],
        ]);
    }
}

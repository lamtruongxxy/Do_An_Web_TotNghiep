<?php

use Illuminate\Database\Seeder;

class DonHangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\DonHang::class, 500)->create();
    }
}

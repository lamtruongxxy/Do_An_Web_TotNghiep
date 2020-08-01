<?php

use Illuminate\Database\Seeder;

class ChiTietDonHangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\ChiTietDonHang::class, 500)->create();
    }
}

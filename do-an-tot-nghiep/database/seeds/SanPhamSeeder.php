<?php

use Illuminate\Database\Seeder;

class SanPhamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\SanPham::class, 1000)->create();
        factory(App\SanPham::class, 1000)->create();
    }
}

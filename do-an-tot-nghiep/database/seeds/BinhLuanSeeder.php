<?php

use Illuminate\Database\Seeder;

class BinhLuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\BinhLuan::class, 20)->create();
    }
}

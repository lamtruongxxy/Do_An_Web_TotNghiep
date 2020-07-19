<?php

use Illuminate\Database\Seeder;

class NhaSanXuatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\NhaSanXuat::class, 1000)->create();
    }
}

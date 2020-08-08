<?php

use Illuminate\Database\Seeder;
use App\NhaSanXuat;
class NhaSanXuatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // public function run()
    // {
    //     factory(App\NhaSanXuat::class, 50)->create();
    // }
    public function run()
    {
        $dsNhaSanXuat = [
            [
                'ten_nha_sx' => "Apple",
                'ghi_chu' => 'Không',
                'trang_thai' => 1
            ],
            [
                'ten_nha_sx' => "Samsung",
                'ghi_chu'=> 'Không',
                'trang_thai'=> 1
            ],
            [
                'ten_nha_sx' => "Oppo",
                'ghi_chu'=> 'Không',
                'trang_thai'=> 1
            ],
            [
                'ten_nha_sx' => "Xiaomi",
                'ghi_chu'=> 'Không',
                'trang_thai'=> 1
            ],
            [
                'ten_nha_sx' => "Nokia",
                'ghi_chu'=> 'Không',
                'trang_thai'=> 1
            ],
            [
                'ten_nha_sx' => "Huawei",
                'ghi_chu'=> 'Không',
                'trang_thai'=> 1
            ],
            ];
            foreach($dsNhaSanXuat as $nhasanxuat) {
                NhaSanXuat::create($nhasanxuat);
            }
        }
}

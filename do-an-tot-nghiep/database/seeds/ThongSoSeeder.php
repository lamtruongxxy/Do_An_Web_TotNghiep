<?php

use Illuminate\Database\Seeder;
use App\ThongSo;

class ThongSoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dsThongSo = [
            [
                'ten_thong_so' => "RAM",
                'don_vi' => 'GB',
                'trang_thai' => 1
            ],
            [
                'ten_thong_so' => "Màn hình",
                'don_vi'=> 'cái',
                'trang_thai'=> 1
            ],
            [
                'ten_thong_so'=> "ROM",
                'don_vi'=> 'GB',
                'trang_thai'=> 1
            ],
            [
                'ten_thong_so'=> "Camera",
                'don_vi'=> 'px',
                'trang_thai'=> 1
            ],
            [
                'ten_thong_so'=> "PIN",
                'don_vi'=> 'mAh',
                'trang_thai'=> 1
            ]
            ];
            foreach($dsThongSo as $thongSo) {
                ThongSo::create($thongSo);
            }
    }
}

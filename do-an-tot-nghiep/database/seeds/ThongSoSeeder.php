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
                'don_vi'=> 'Inch',
                'trang_thai'=> 1
            ],
            [
                'ten_thong_so'=> "ROM",
                'don_vi'=> 'GB',
                'trang_thai'=> 1
            ],
            [
                'ten_thong_so'=> "Camera trước",
                'don_vi'=> 'MB',
                'trang_thai'=> 1
            ],
            [
                'ten_thong_so'=> "Camera sau",
                'don_vi'=> 'MB',
                'trang_thai'=> 1
            ],
            [
                'ten_thong_so'=> "CPU-Hệ điều hành",
                'don_vi'=> 'Ghz',
                'trang_thai'=> 1
            ],
            [
                'ten_thong_so'=> "Trọng lượng",
                'don_vi'=> 'gam',
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

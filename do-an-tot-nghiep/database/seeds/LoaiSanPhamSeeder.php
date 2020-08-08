<?php

use Illuminate\Database\Seeder;
use App\LoaiSanPham;
class LoaiSanPhamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // public function run()
    // {
    //     factory(App\LoaiSanPham::class, 50)->create();
    // }
    public function run()
    {
        $dsLoaiSanPham = [
            [
                'ten_loai_sp' => "Điện Thoại Cảm Ứng",
                'ghi_chu' => 'Không',
                'trang_thai' => 1
            ],
            [
                'ten_loai_sp' => "Điện Thoại Nắp Gập",
                'ghi_chu'=> 'Không',
                'trang_thai'=> 1
            ],
            [
                'ten_loai_sp' => "Điện Thoại Phổ Thông",
                'ghi_chu'=> 'Không',
                'trang_thai'=> 1
            ],
            ];
            foreach($dsLoaiSanPham as $loaisanpham) {
                LoaiSanPham::create($loaisanpham);
            }
        }
}

<?php

use Illuminate\Database\Seeder;
use App\LinhVuc;

class ThemLinhVucSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
        	['ten_linh_vuc'=>'Lập trình'],
        	['ten_linh_vuc'=>'Toán'],
        	['ten_linh_vuc'=>'Lịch sử'],
        ];

        foreach ($data as $dt) {
        	LinhVuc::create($dt);
        }    }
}

<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin')->insert([
           ['ho_ten'=>'Linh','ten_dang_nhap'=>'admin','mat_khau'=>'12345'] 
        ]);
    }
}

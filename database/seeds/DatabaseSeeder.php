<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ChuDeSeeder::class);
    }
}

class ChuDeSeeder extends Seeder
{
    public function run()
    {
        DB::table('chu_de')->insert([
            ['ten_chu_de' => 'Khởi động'],
            ['ten_chu_de' => 'Biến và kiểu dữ liệu'],
            ['ten_chu_de' => 'Cấu trúc rẽ nhánh'],
            ['ten_chu_de' => 'Cấu trúc lặp'],
            ['ten_chu_de' => 'Kiểu dữ liệu có cấu trúc'],
            ['ten_chu_de' => 'Con trỏ']
        ]);
    }
}

class BaiTapSeeder extends Seeder
{
    public function run()
    {
        DB::table('bai_tap')->insert([
            
        ]);
    }
}

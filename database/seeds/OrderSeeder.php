<?php

use Illuminate\Database\Seeder;
use App\Models\Order; //記得要放你要產出的model file

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $data = factory(App\Models\Order::class, 50)->create(); //真的在DB建立50筆資料
        Order::insert([
            'details' => Str::random(12),
            'client' => Str::random(12).'@gmail.com',
            'is_fulfilled' => false,
        ]);
    }
}

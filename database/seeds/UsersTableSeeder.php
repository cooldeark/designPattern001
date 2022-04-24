<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(App\User::class, 3)->make(); //先建立假資料，但還沒有存進DB
        $users = factory(App\User::class, 3)->create(); //真的在DB建立資料
    }
}

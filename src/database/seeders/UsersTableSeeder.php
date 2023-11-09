<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => '山田太郎',
            'email' => 'coachtech1234@gmail.com',
            'password' => 'coachtech0000'
        ];
        DB::table('users')->insert($param);

        $param = [
            'name' => '佐藤花子',
            'email' => 'coachtech5678@gmail.com',
            'password' => 'coachtech1111'
        ];
        DB::table('users')->insert($param);

        $param = [
            'name' => '鈴木次郎',
            'email' => 'coachtech0000@gmail.com',
            'password' => 'coachtech2222'
        ];
        DB::table('users')->insert($param);
    }
}

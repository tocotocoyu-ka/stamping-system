<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StampsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'started_at' => '08:00:00',
            'ended_at' => '17:00:00'
        ];
        DB::table('stamps')->insert($param);

        $param = [
            'started_at' => '09:00:00',
            'ended_at' => '18:00:00'
        ];
        DB::table('stamps')->insert($param);

        $param = [
            'started_at' => '10:00:00',
            'ended_at' => '19:00:00'
        ];
        DB::table('stamps')->insert($param);
    }
}

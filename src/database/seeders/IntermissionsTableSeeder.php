<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IntermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'started_at' => '00:00:00',
            'ended_at' => '00:00:00'
        ];
        DB::table('intermissions')->insert($param);

        $param = [
            'started_at' => '00:00:00',
            'ended_at' => '00:00:00'
        ];
        DB::table('intermissions')->insert($param);

        $param = [
            'started_at' => '00:00:00',
            'ended_at' => '00:00:00'
        ];
        DB::table('intermissions')->insert($param);
    }
}

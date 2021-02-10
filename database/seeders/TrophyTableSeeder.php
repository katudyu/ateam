<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Trophy;

class TrophyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => '走行距離 10km達成',
        ];
        DB::table('trophy')->insert($param);

        $param = [
            'name' => '連続ログイン 5日達成',
        ];
        DB::table('trophy')->insert($param);

        $param = [
            'name' => '連続走行日数 3日達成',
        ];
        DB::table('trophy')->insert($param);
    }
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Event;

class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'event' =>'総走行距離 100Km',
            'start_date' => '2020-11-01',
            'end_date' => '2020-11-31',
            'create_day' => '2020-10-25',
        ];
        DB::table('event')->insert($param);

        $param = [
            'event' =>'総走行距離 150Km',
            'start_date' => '2020-10-01',
            'end_date' => '2020-10-30',
            'create_day' => '2020-9-25',
        ];
        DB::table('event')->insert($param);

        $param = [
            'event' =>'総走行距離 200Km',
            'start_date' => '2020-09-01',
            'end_date' => '2020-09-31',
            'create_day' => '2020-8-25',
        ];
        DB::table('event')->insert($param);
    }
}

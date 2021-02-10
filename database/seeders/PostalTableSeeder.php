<?php

use Illuminate\Database\Seeder;
use Illuminate\support\facades\DB;
use App\Postal;

class PostalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Postal::class, 50)->create();      
    }
}

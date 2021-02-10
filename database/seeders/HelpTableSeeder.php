<?php

use Illuminate\Database\Seeder;
use Illuminate\support\facades\DB;
use App\Help;

class HelpTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $param = [
            'question' => 'イベントの詳細はどこで確認できますか？',
            'answer' => 'ホーム画面から確認ができます。',
        ];
        DB::table('help')->insert($param);

        $param = [
            'question' => '個人情報の変更はどこでできますか？',
            'answer' => 'マイページの設定から変更が可能です。',
        ];
        DB::table('help')->insert($param);

        $param = [
            'question' => 'コミュニティーに参加するにはどうすればよいですか？',
            'answer' => 'ホームからコミュニティーの参加や作成ができます。',
        ];
        DB::table('help')->insert($param);

    }
}

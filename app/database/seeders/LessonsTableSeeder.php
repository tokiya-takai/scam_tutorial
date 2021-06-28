<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Lesson;
use App\Models\Status;

class LessonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // テーブルを自動採番も含めてリセット
        \Schema::disableForeignKeyConstraints(); // 外部キー制約を無効化
        DB::table('lessons')->truncate();
        \Schema::enableForeignKeyConstraints(); // 外部キー制約を有効化

        // Lesson 1-1
        $param = [
            'number' => 1,
            'sub_number' => 1,
            'name' => 'フィッシング詐欺',
            'percentage' => 100
        ];
        Lesson::insert($param);
        // Lesson 2-1
        $param = [
            'number' => 2,
            'sub_number' => 1,
            'name' => 'パスワードリスト攻撃',
            'percentage' => 100
        ];
        Lesson::insert($param);

        // Lesson 3-1
        $param = [
            'number' => 3,
            'sub_number' => 1,
            'name' => '標的型メール',
            'percentage' => 50
        ];
        Lesson::insert($param);

        // Lesson 3-2
        $param = [
            'number' => 3,
            'sub_number' => 2,
            'name' => '水飲み場攻撃',
            'percentage' => 50
        ];
        Lesson::insert($param);
    }
}

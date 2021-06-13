<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Lesson;

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

        $param = [
            'number' => 1,
            'sub_number' => 1,
            'name' => 'フィッシング詐欺',
            'percentage' => 34
        ];
        Lesson::insert($param);
        $param = [
            'number' => 1,
            'sub_number' => 2,
            'name' => 'ファーミング',
            'percentage' => 33
        ];
        Lesson::insert($param);
        $param = [
            'number' => 1,
            'sub_number' => 3,
            'name' => 'スピアフィッシング',
            'percentage' => 33
        ];
        Lesson::insert($param);
    }
}

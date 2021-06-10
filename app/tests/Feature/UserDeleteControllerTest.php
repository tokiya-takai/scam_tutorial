<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserDeleteControllerTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testUserDelete()
    {
        // ユーザーを作成
        $user = User::factory()->create();
        // ログイン
        $response = Auth::login($user, false);
        // 認証されていることを確認
        $this->assertTrue(Auth::check());
        // 作成したユーザーの削除ページへ
        $response = $this->get(route('userdelete.index', ['id'=>$user->id]));
        // ステータスコードが200
        $response->assertOk();
        // ユーザーが存在するか
        $this->assertDatabaseHas('users', ['email'=>$user->email]);
        // ユーザーを削除
        $response = $this
            ->post(route('userdelete.delete', ['id'=>$user->id]));
        // リダイレクトされたか
        $response->assertStatus(302);
        // ログアウトしているか
        $this->assertFalse(!Auth::check());
        // データベースにデータがないか
        $this->assertDatabaseMissing('users', ['email'=>$user->email]);
    }
}

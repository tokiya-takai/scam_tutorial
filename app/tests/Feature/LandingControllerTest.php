<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LandingControllerTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testIndex()
    {
        // ランディングページへGETリクエスト
        $response = $this->get(route('landing.index'));
        // ステータスコードが200
        $response->assertOk();
    }

    public function testRelay()
    {
        // ログインせずにLesson1もしくは2を終了
        // ログインしていない場合は、会員登録を促すポップアップが表示されることを確認する
        
        // relayメソッド
        $response = $this->get('/relay');
        // リダイレクトされたか
        $response->assertStatus(302);
        // セッションが'flash_message'というセッションを持っている
        $response->assertSessionHas('flash_message');
        // リダイレクト先のランディングページへ移動
        $response = $this->get('/');
        // ステータスコードが200
        $response->assertOk();
        // _flash内の値が存在する(画面に表示されている)
        $response->assertSee('もしよかったら会員登録をお願いします！');
        
        // ログイン状態でLesson1もしくは2を終了
        // ログイン済みのユーザーには、会員登録を促すポップアップを表示していないことを確認する
        
        // ユーザーを作成
        $user = User::factory()->create();
        // ログイン
        $response = Auth::login($user, false);
        // 認証されていることを確認
        $this->assertTrue(Auth::check());
        // relayメソッド
        $response = $this->get('/relay');
        // リダイレクトされたか
        $response->assertStatus(302);
        // セッションが'flash_message'というセッションを持っている
        $response->assertSessionHas('flash_message');
        // リダイレクト先のランディングページへ移動
        $response = $this->get('/');
        // ステータスコードが200
        $response->assertOk();
        // _flash内の値が存在しない(画面に表示されていない)
        $response->assertDontSee('もしよかったら会員登録をお願いします！');
    }
}

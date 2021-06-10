<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginTest extends TestCase
{
    use DatabaseTransactions;
    
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testLogin()
    {
        // ユーザーを作成
        $user = User::factory()->create([
            'password'  => bcrypt('testpassword123')
        ]);

        // 認証されないことを確認
        $this->assertFalse(Auth::check());

        // ログインを実行
        $response = $this->post('login', [
            'email'    => $user->email,
            'password' => 'testpassword123'
            //先ほど設定したパスワードを入力
        ]);

        // 認証されていることを確認
        $this->assertTrue(Auth::check());

        // ログイン後にホームページにリダイレクトされるのを確認
        $response->assertRedirect('home');

    }
}

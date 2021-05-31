  <header class="landing-header">
    <a href="/" class="header-logo">
      <img class="landing-header-full-logo" src="/images/full-logo.png" alt="logo">
      <img class="landing-header-small-logo" src="/images/small-logo.png" alt="logo">
    </a>
    <nav class="header-nav">
      @guest
          @if(Route::has('login'))
            <a class="nav-item nav-login" href="{{ route('login') }}">ログイン</a>
          @endif
          @if (Route::has('register'))
            <a class="nav-item nav-register" href="{{ route('register') }}">新規登録</a>
          @endif
      @else
          <a class="nav-item nav-user" href="#">{{ Auth::user()->name }}</a>
          <a class="nav-item nav-logout" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">ログアウト
          </a>
      @endguest
    </nav>
  </header>
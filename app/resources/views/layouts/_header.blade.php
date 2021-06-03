  <header class="landing-header">
    <a href="/" class="header-logo">
      <img class="landing-header-full-logo" src="/images/full-logo.png" alt="logo">
      <img class="landing-header-small-logo" src="/images/small-logo.png" alt="logo">
    </a>
    <nav class="header-nav">
      <div class="form-group row mt-2">
        <div class="col-md-8 offset-md-4">
            <a href="/login/google" class="btn btn-secondary" role="button">
                Google Login
            </a>
        </div>
      </div>
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
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
          </form>
      @endguest
    </nav>
  </header>
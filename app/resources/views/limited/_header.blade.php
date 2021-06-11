<div class="limited-header">
  <a href="/">
    <div class="limited-header-logo">
      <div class="limited-header-logo-container-under"></div>
      <div class="limited-header-logo-container-over"></div>
    </div>
  </a>
  <nav class="limited-header-nav">
    <ul class="limited-header-nav-list">
      <li id="header-to-dashboard-btn"><a href="/dashboard">ダッシュボード</a></li>
      <li id="header-to-list-of-lessons-btn"><a href="/listoflessons">レッスン一覧</a></li>
    </ul>
  </nav>
  <nav class="limited-header-nav-auth">
    <a class="nav-item nav-user" href="#">{{ Auth::user()->name }}</a>
    <a class="nav-item nav-logout" href="{{ route('logout') }}"
          onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">ログアウト
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
      @csrf
    </form>
  </nav>
</div>
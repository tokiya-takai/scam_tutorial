window.addEventListener('load', function () {
  let path = location.pathname;
  // ナビゲーションのボーダーボトムを付ける
  // ダッシュボード
  if (path === '/dashboard') {
    document.getElementById('header-to-dashboard-btn').classList.add('current-page');
  }
  if (path === '/listoflessons') {
    document.getElementById('header-to-list-of-lessons-btn').classList.add('current-page');
  }



  // メニューボタンをクリックした時に、スライドしてメニューバーを表示させる
  const main = document.getElementById('main');
  const headerNavicon = document.getElementById('header-navicon');
  const limitedMenu = document.getElementById('limited-menu');
  let width;
  let activeRight;

  // スクロール禁止関数
  function disableScroll(event) {
    event.preventDefault();
  };

  function no_scroll() {
    document.addEventListener('touchmove', disableScroll, { passive: false });
    document.addEventListener('mousewheel', disableScroll, { passive: false });
  }

  function return_scroll() {
    document.removeEventListener('touchmove', disableScroll, { passive: false });
    document.removeEventListener('mousewheel', disableScroll, { passive: false });
  }

  // 開く
  function openMenu() {
    no_scroll();
    limitedMenu.style.display = "inline-block";
    limitedMenu.style.width = String(activeRight) + 'px';
    main.style.transform = 'translateX(-' + activeRight + 'px)';
    headerNavicon.classList.add('active-right');
    main.classList.add('active-rightX');
  }
  
  // 閉じる
  function closeMenu() {
    return_scroll();
    main.style.transform = 'translateX(0px)';
    // transitionの0.6秒を待つ
    setTimeout(function () {
      limitedMenu.style.display = "none";
      headerNavicon.classList.remove('active-right');
      main.classList.remove('active-rightX');
      limitedMenu.style.width = '0px';
    }, 600);
  }

  function reflect() {
    // メニューが表示されている時だけ実行
    if (headerNavicon.classList.contains('active-right')) {
      limitedMenu.style.width = String(activeRight) + 'px';
      main.style.transform = 'translateX(-' + activeRight + 'px)';
    }
  }

  // 再計算
  function recalculation() {
    // widthはpx付きなので、数値に変換
    width = parseInt(width)
    // モバイル
    if (width <= 554) {
      activeRight = width * 0.7;
    // タブレット
    } else if (555 <= width && width <= 991) {
      activeRight = width * 0.6;
    // PC ただし、PCはメニューを表示しない
    } else {
      activeRight = width * 0.5;
    }
  }
  
  // 横幅を計算
  function realtime() {
    let style = window.getComputedStyle(main);
    width = style.width;
  }

  //画面幅が変わった時に実行
  window.onresize = function () {
    // 横幅を再計算
    realtime();
    // 割り当てるtranslateを再計算
    recalculation();
    // 反映
    reflect();
  };
  
  headerNavicon.addEventListener('click', () => {
    realtime();
    recalculation();
    if (headerNavicon.classList.contains('active-right')) {
      closeMenu();
    } else {
      openMenu();
    }
  });
  // ウインドウをクリックしたらメニューを閉じる
  window.addEventListener('click', function (e) {
    // メニューボタン、開いたメニュー内以外をクリックしたら閉じる
    if (!e.target.closest('.active-right') && !e.target.closest('.limited-menu') && headerNavicon.classList.contains('active-right')) {
      closeMenu();
    }
  });
});
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

window.addEventListener("load", function () {
  const alert = document.querySelector('.lesson-alert-background');
  const okButton = document.querySelector('.lesson-alert-btn');

  if (navigator.userAgent.match(/iPhone|Android.+Mobile/)) {
  
    if (document.URL.match(lesson1)) {
      alert.style.display = "flex";
      no_scroll();
    }
  
    okButton.addEventListener('click', () => {
      alert.style.display = "none";
      return_scroll();
      window.location.href = '/';
    });
  }

  const lessonHeaderLogo = document.querySelector('.lesson-header-logo-animated');

  //クリック時にclassを追加してアニメーション開始
  lessonHeaderLogo.addEventListener('mouseover', () => {
    lessonHeaderLogo.classList.add('animate__flipInY');
    setTimeout(removeAnimateFlipInY, 500);
  }, false);

  function removeAnimateFlipInY() {
    lessonHeaderLogo.classList.remove('animate__flipInY');
    return;
  };

});

window.addEventListener("load", function () {
  
  // Lesson1終了時flashのスクロール禁止
  const flashSelectBtns = document.querySelectorAll('.flash-select-btn');
  const landingFlash = document.getElementById('landing-flash');
  
  if ( landingFlash != null) {
    no_scroll();
  }

  flashSelectBtns.forEach(function (button) {
    button.addEventListener('click', () => {
      return_scroll();
    });
  });
});
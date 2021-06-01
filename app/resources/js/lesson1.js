window.addEventListener("load", function () {
  const alert = document.querySelector('.lesson1-alert-background');
  const okButton = document.querySelector('.lesson1-alert-btn');

  // スクロール禁止関数
  function disableScroll(event) {
    event.preventDefault();
  }
  
  if (navigator.userAgent.match(/iPhone|Android.+Mobile/)) {
  
    if (document.URL.match(lesson1)) {
      alert.style.display = "flex";
      document.addEventListener('touchmove', disableScroll, { passive: false });
      document.addEventListener('mousewheel', disableScroll, { passive: false });
    }
  
    okButton.addEventListener('click', () => {
      alert.style.display = "none";
      document.removeEventListener('touchmove', disableScroll, { passive: false });
      document.removeEventListener('mousewheel', disableScroll, { passive: false });
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
  }
});
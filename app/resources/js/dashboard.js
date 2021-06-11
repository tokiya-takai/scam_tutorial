window.addEventListener('load', function () {
  let path = location.pathname;
  if (path === '/dashboard') {
    document.getElementById('header-to-dashboard-btn').classList.add('current-page');
    // document.getElementById('main').style.transform = 'translate(300px)';
  }
  if (path === '/listoflessons') {
    document.getElementById('header-to-list-of-lessons-btn').classList.add('current-page');
  }
});
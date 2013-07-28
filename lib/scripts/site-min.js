// This file is for common scripts that apply to all/most pages.

function init() {
  // Function that is called on page load.
  dispVersion();
  getCurrentLoc();
}

function dispVersion() {
  if (document.getElementById('current-version-name')) {
    document.getElementById('current-version-name').textContent = 'Dev 0.0.3';
  }
  if (document.getElementById('current-version-date')) {
    document.getElementById('current-version-date').textContent = '7/28/13 8:51 AM';
  }
  if (document.getElementById('current-version-changes')) {
    document.getElementById('current-version-changes').setAttribute('href', '');
  }
}

function menuToggle(number) {
  document.getElementById('menu_'+number).classList.toggle('shown');
}

function getCurrentLoc() {
  var page = document.location.pathname.replace(/\//g, '');
  page = page.toLowerCase();
  if (document.getElementById('nav_'+page)) {
    document.getElementById('nav_'+page).classList.add('active');        
  }
}


// This file is for common scripts that apply to all/most pages.

function init() {
  // Function that is called on page load.
  dispVersion();
}

function dispVersion() {
  if (document.getElementById('current-version-name')) {
    document.getElementById('current-version-name').textContent = 'Dev 0.0.1';
  }
  if (document.getElementById('current-version-date')) {
    document.getElementById('current-version-date').textContent = '4/23/13 7:30 AM';
  }
}

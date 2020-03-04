var nightCheck = localStorage.getItem('nightCheck');
var body = document.body;

function setNightMode() {
  if (nightCheck == 1) {
    body.classList.add('nightMode');
  }
}

setNightMode();

var sound = document.getElementById('soundsInGame');
var night = document.getElementById('nightMode');
var body = document.body;
var soundCheck = 0;
var nightCheck = 0;

function soundF () {
  soundCheck = localStorage.getItem('soundCheck');
  if (soundCheck == 1) {
    sound.classList.add('soundOn');
    sound.classList.remove('soundOff');
  }
}

function nightF () {
  nightCheck = localStorage.getItem('nightCheck');
  if (nightCheck == 1) {
    night.classList.add('nightOn');
    night.classList.remove('nightOff');
  }
}

soundF();
nightF();

sound.onclick = function () {
  if (soundCheck == 1) {
    sound.classList.remove('soundOn');
    sound.classList.add('soundOff');
    soundCheck = 0;
  }
  else {
    sound.classList.add('soundOn');
    sound.classList.remove('soundOff');
    soundCheck = 1;
  }
  localStorage.setItem('soundCheck', soundCheck);
}

night.onclick = function () {
  if (nightCheck == 1) {
    night.classList.remove('nightOn');
    night.classList.add('nightOff');
    body.classList.remove('nightMode');
    nightCheck = 0;
  }
  else {
    night.classList.add('nightOn');
    night.classList.remove('nightOff');
    body.classList.add('nightMode');
    nightCheck = 1;
  }
  localStorage.setItem('nightCheck', nightCheck);
}

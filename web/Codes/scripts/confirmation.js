var button = document.getElementById('buy');
var confirmation = document.getElementById('confirmation');
var bg = document.getElementById('bg');

button.onclick = function () {
  confirmation.style.display = "block";
}

bg.onclick = function () {
  confirmation.style.display = "none";
}

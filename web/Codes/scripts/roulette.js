(function() {
  var annulus = function(centerX, centerY,
    innerRadius, outerRadius,
    startAngle, endAngle,
    anticlockwise) {
    var th1 = startAngle * Math.PI / 180;
    var th2 = endAngle * Math.PI / 180;
    var startOfOuterArcX = outerRadius * Math.cos(th2) + centerX;
    var startOfOuterArcY = outerRadius * Math.sin(th2) + centerY;

    this.beginPath();
    this.arc(centerX, centerY, innerRadius, th1, th2, anticlockwise);
    this.lineTo(startOfOuterArcX, startOfOuterArcY);
    this.arc(centerX, centerY, outerRadius, th2, th1, !anticlockwise);
    this.closePath();
  }
  CanvasRenderingContext2D.prototype.annulus = annulus;
})();

var canvas = document.getElementById("canvas1");
var ctx = canvas.getContext("2d");

ctx.annulus(90, 90, 0, 90, 0, 75);
ctx.fillStyle = '#F13D2F';
ctx.fill();

ctx.annulus(90, 90, 0, 90, 75, 180);
ctx.fillStyle = '#F9BA3D';
ctx.fill();

ctx.annulus(90, 90, 0, 90, -180, 0);
ctx.fillStyle = '#50D2DF';
ctx.fill();

var a = rand(Math.random());
var makeBet = document.getElementById('makeBet');

makeBet.onclick = function () {
  canvas.style.transform = 'rotate('+a+'deg)';
}

function rand (r) {
  r=r*500;
  r=Math.floor(r);
  while (r<2160){
    r=r*2;
  }
  if (r>5040) {
    r=r-(r-5040)*2;
  }
  return r;
}

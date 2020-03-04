var list = document.getElementById('selectedItem');
var method = document.getElementById('method');
var methods = document.getElementsByClassName('partOfMethodsList');
var rub = document.getElementById('rub');
var coins = document.getElementById('coins');
var sellRate = 11000;
var check = 0;

rub.oninput = function () {
	coins.value = this.value * sellRate;
	coins.value = coins.value - (coins.value % 1);
}

coins.oninput = function () {
	rub.value = this.value / sellRate;
	rub.value = rub.value - (rub.value % 1);
}

list.onclick = function () {
	if (check == 0) {
		method.style.height = '176px';
		document.getElementById('arrow').style.transform = 'rotate(180deg)';
		check = 1;
	}

	else {
		method.style.height = '40px';
		document.getElementById('arrow').style.transform = 'rotate(0deg)';
		check = 0;
	}
}

document.getElementById('1').onclick = function () {
	method.style.height = '40px';
	document.getElementById('arrow').style.transform = 'rotate(0deg)';
	document.getElementById('nameOfMethod').innerHTML = methods[1].innerHTML;
	check = 0;
}

document.getElementById('2').onclick = function () {
	method.style.height = '40px';
	document.getElementById('arrow').style.transform = 'rotate(0deg)';
	document.getElementById('nameOfMethod').innerHTML = methods[2].innerHTML;
	check = 0;
}

document.getElementById('3').onclick = function () {
	method.style.height = '40px';
	document.getElementById('arrow').style.transform = 'rotate(0deg)';
	document.getElementById('nameOfMethod').innerHTML = methods[3].innerHTML;
	check = 0;
}

document.getElementById('4').onclick = function () {
	method.style.height = '40px';
	document.getElementById('arrow').style.transform = 'rotate(0deg)';
	document.getElementById('nameOfMethod').innerHTML = methods[4].innerHTML;
	check = 0;
}

var list = document.getElementById('selectedItem');
var method = document.getElementById('method');
var check = 0;
var methods = document.getElementsByClassName('partOfMethodsList');
var i = 0;

list.onclick = function () {
	if (check == 0) {
		document.getElementById('method').style.height = '176px';
		document.getElementById('arrow').style.transform = 'rotate(180deg)';
		check = 1;
	}

	else {
		document.getElementById('method').style.height = '40px';
		document.getElementById('arrow').style.transform = 'rotate(0deg)';
		check = 0;
	}	
}

document.getElementById('1').onclick = function () {
	document.getElementById('method').style.height = '40px';
	document.getElementById('arrow').style.transform = 'rotate(0deg)';
	check = 0;
}


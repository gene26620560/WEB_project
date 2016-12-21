(function(){
	var ad = document.getElementById('ad');
	var ul = ad.getElementsByTagName('ul')[0];
	var list = ul.getElementsByTagName('li');
	var len = list.length;
	var show = 0;
	var next = 0;
	setInterval(function(){
		list[show].style.opacity = "0";
		next = (show + 1) % len;
		list[next].style.opacity = "1";
		show = next;
	},3000);
})();
	"use strict"

var footerFixed = function(){
	var footer = document.getElementsByTagName('footer')[0];
	if(footer.offsetTop + footer.offsetHeight < document.documentElement.clientHeight){
		footer.className = 'footerFixed';
	} else{
		footer.className = '';
	};
	if(document.documentElement.clientWidth < 960){
		footer.style.width = '960px'
	} else{
		footer.style.width = '100%'
	}
}	

window.onload = footerFixed;
window.onresize = footerFixed;
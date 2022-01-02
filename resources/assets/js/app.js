const btnToggleMenu = document.getElementById('btn-toggle-menu');
const logo = document.getElementById('logo');
$('#logo').on('click', function(){
	window.location.href = $(this).data('url');
});

btnToggleMenu.onclick = function(){
	btnToggleMenu.classList.toggle("menu-close");
	if(btnToggleMenu.classList.contains('menu-close')){
		showMenuMobile();
	} else {
		hideMenuMobile();
	}
}


function showMenuMobile(){
	document.getElementById("menu-mobile").classList.remove("slideOutLeft");
	document.getElementById("menu-mobile").classList.add("slideInLeft");
	document.getElementById("menu-mobile").style.display="block";
}

function hideMenuMobile(){
	document.getElementById("menu-mobile").classList.remove("slideInLeft");
	document.getElementById("menu-mobile").classList.add("slideOutLeft");
}



// Submenu Products
var prouctMenu = document.getElementById('menu-products');
prouctMenu.onmouseover = function(){
	showSubmenuProductsDesktop();
}
prouctMenu.onmouseleave = function(){
	hideSubmenuProductsDesktop();
}
var submenuProductsDesktop = document.getElementById('submenu-products-desktop');
submenuProductsDesktop.onmouseleave = function(){
	hideSubmenuProductsDesktop();
}
var submenuProductsDesktop = document.getElementById('submenu-products-desktop');
submenuProductsDesktop.onmouseover = function(){
	showSubmenuProductsDesktop();
}

function showSubmenuProductsDesktop(){
	document.getElementById("submenu-products-desktop").style.display="block";
}
function hideSubmenuProductsDesktop(){
	document.getElementById("submenu-products-desktop").style.display="none";
}

$(window).scroll(function() { 
	var height = $(window).scrollTop();
	if(height  > 100) {
		if(!$("header").hasClass('header-scroll')){
			$("header").addClass('header-scroll');
		}
	} else{
		$("header").removeClass('header-scroll');
	}
});
/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 27);
/******/ })
/************************************************************************/
/******/ ({

/***/ 27:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(28);


/***/ }),

/***/ 28:
/***/ (function(module, exports) {

var btnToggleMenu = document.getElementById('btn-toggle-menu');
var logo = document.getElementById('logo');
$('#logo').on('click', function () {
	window.location.href = $(this).data('url');
});

btnToggleMenu.onclick = function () {
	btnToggleMenu.classList.toggle("menu-close");
	if (btnToggleMenu.classList.contains('menu-close')) {
		showMenuMobile();
	} else {
		hideMenuMobile();
	}
};

function showMenuMobile() {
	document.getElementById("menu-mobile").classList.remove("slideOutLeft");
	document.getElementById("menu-mobile").classList.add("slideInLeft");
	document.getElementById("menu-mobile").style.display = "block";
}

function hideMenuMobile() {
	document.getElementById("menu-mobile").classList.remove("slideInLeft");
	document.getElementById("menu-mobile").classList.add("slideOutLeft");
}

// Submenu Products
var prouctMenu = document.getElementById('menu-products');
prouctMenu.onmouseover = function () {
	showSubmenuProductsDesktop();
};
prouctMenu.onmouseleave = function () {
	hideSubmenuProductsDesktop();
};
var submenuProductsDesktop = document.getElementById('submenu-products-desktop');
submenuProductsDesktop.onmouseleave = function () {
	hideSubmenuProductsDesktop();
};
var submenuProductsDesktop = document.getElementById('submenu-products-desktop');
submenuProductsDesktop.onmouseover = function () {
	showSubmenuProductsDesktop();
};

function showSubmenuProductsDesktop() {
	document.getElementById("submenu-products-desktop").style.display = "block";
}
function hideSubmenuProductsDesktop() {
	document.getElementById("submenu-products-desktop").style.display = "none";
}

$(window).scroll(function () {
	var height = $(window).scrollTop();
	if (height > 100) {
		if (!$("header").hasClass('header-scroll')) {
			$("header").addClass('header-scroll');
		}
	} else {
		$("header").removeClass('header-scroll');
	}
});

/***/ })

/******/ });
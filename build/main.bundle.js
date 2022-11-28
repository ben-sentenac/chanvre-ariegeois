/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./js/App.js":
/*!*******************!*\
  !*** ./js/App.js ***!
  \*******************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"default\": () => (__WEBPACK_DEFAULT_EXPORT__)\n/* harmony export */ });\nclass App {\n  constructor(ui) {\n    this.ui = ui;\n    this.toggleNavbar = this.toggleNavbar.bind(this);\n    this.stringToDate = this.stringToDate.bind(this);\n    this.getRemainigTime = this.getRemainigTime.bind(this);\n  }\n\n  isMobile() {}\n\n  toggleNavbar(e) {\n    console.log(e); //e.preventDefault();\n    //this.ui.menuUl.style.display = 'block';\n\n    this.ui.navbarMenu.dataset.expanded === 'false' ? this.ui.navbarMenu.dataset.expanded = 'true' : this.ui.navbarMenu.dataset.expanded = 'false';\n\n    if (this.ui.navbarMenu.dataset.expanded === 'true') {\n      this.ui.menuUl.style.left = '0';\n    } else {\n      this.ui.menuUl.style.left = \"-300px\";\n    }\n  }\n\n  run() {\n    this.loadListeners();\n    this.setShopCountdown();\n  }\n\n  loadListeners() {\n    this.ui.menuToggler.addEventListener('click', this.toggleNavbar);\n  }\n\n  setShopCountdown() {\n    requestAnimationFrame(this.getRemainigTime);\n  }\n\n  stringToDate(dateString) {\n    const [day, month, year] = dateString.split('/');\n    return new Date([month, day, year].join('-'));\n  }\n\n  formatCountdownDisplay(value) {\n    if (value < 100) {\n      return ('0' + Math.floor(value)).slice(-2);\n    } else {\n      return Math.floor(value);\n    }\n  }\n\n  getRemainigTime() {\n    let endtime = this.stringToDate(this.ui.shopCountdownEndTime.value);\n    const total = Date.parse(endtime) - Date.parse(new Date());\n    const seconds = this.formatCountdownDisplay(total / 1000 % 60);\n    const minutes = this.formatCountdownDisplay(total / 1000 / 60 % 60);\n    const hours = this.formatCountdownDisplay(total / (1000 * 60 * 60) % 24);\n    const days = this.formatCountdownDisplay(total / (1000 * 60 * 60 * 24));\n    this.ui.Countdown.innerHTML = `${days} J ${hours} H ${minutes} M ${seconds} S`;\n\n    if (total >= 1000) {\n      requestAnimationFrame(this.getRemainigTime);\n    }\n  }\n\n}\n\n/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (App);\n\n//# sourceURL=webpack://resources/./js/App.js?");

/***/ }),

/***/ "./js/UI.js":
/*!******************!*\
  !*** ./js/UI.js ***!
  \******************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"UI\": () => (/* binding */ UI)\n/* harmony export */ });\nconst UI = {\n  navbarMenu: document.querySelector('#MainNav') ?? null,\n  menuToggler: document.querySelector('#MenuToggler') ?? null,\n  menuUl: document.querySelector('#menu-menu-principal') ?? null,\n  shopCountdownEndTime: document.querySelector('#ShopCountdownEndTime') ?? null,\n  Countdown: document.querySelector('#Countdown') ?? null\n};\n\n\n//# sourceURL=webpack://resources/./js/UI.js?");

/***/ }),

/***/ "./js/index.js":
/*!*********************!*\
  !*** ./js/index.js ***!
  \*********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _App__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./App */ \"./js/App.js\");\n/* harmony import */ var _UI__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./UI */ \"./js/UI.js\");\n/* harmony import */ var _scss_app_scss__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../scss/app.scss */ \"./scss/app.scss\");\n\n\n\nconst app = new _App__WEBPACK_IMPORTED_MODULE_0__[\"default\"](_UI__WEBPACK_IMPORTED_MODULE_1__.UI);\napp.run();\n\n//# sourceURL=webpack://resources/./js/index.js?");

/***/ }),

/***/ "./scss/app.scss":
/*!***********************!*\
  !*** ./scss/app.scss ***!
  \***********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n// extracted by mini-css-extract-plugin\n\n\n//# sourceURL=webpack://resources/./scss/app.scss?");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	var __webpack_exports__ = __webpack_require__("./js/index.js");
/******/ 	
/******/ })()
;
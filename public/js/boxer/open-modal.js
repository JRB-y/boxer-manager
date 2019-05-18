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
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
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
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/boxer/open-modal.js":
/*!******************************************!*\
  !*** ./resources/js/boxer/open-modal.js ***!
  \******************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

var selectType = __webpack_require__(/*! ../init-multiple-select */ "./resources/js/init-multiple-select.js");

var select = selectType.select;
$('#boxer_id').css('display', 'none');
$('#boxers-index').on('click', '.open-boxer-details', function () {
  // get elements
  boxer_id = $(this).attr('id');
  modal = $('#boxer-details');
  title = $('.modal-title'); // get the boxer

  axios.get('boxers/' + boxer_id).then(function (response) {
    $('#boxer_id').css('display', 'block');
    populateModal(response.data);
    modal.modal('show');
  }); // populate the modal with the data from the API

  function populateModal(response) {
    var year;
    var month;
    var day;
    var types = [];
    title.text(response.nom + ' ' + response.prenom);
    $('#nom').val(response.nom);
    $('#prenom').val(response.prenom);
    arrayDate = response.birth_date.split('-');
    year = arrayDate[0];
    month = arrayDate[1];
    day = arrayDate[2].substring(0, 2);
    $('#birth_date').datepicker('setDate', day + '/' + month + '/' + year);
    response.types.forEach(function (type) {
      types.push(type.id);
    });
    select.multipleSelect('setSelects', types);
    $('#weight').val(response.weight);
    $('#adress').val(response.adress);
    $('#phone').val(response.phone);
    $('#boxer_id').val(response.id);
    $('#parent_name').val(response.parent_name);
    $('#parent_phone').val(response.parent_phone);
  }
});

/***/ }),

/***/ "./resources/js/init-multiple-select.js":
/*!**********************************************!*\
  !*** ./resources/js/init-multiple-select.js ***!
  \**********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

var typesSelect = $('.types').multipleSelect();
exports.select = typesSelect;

/***/ }),

/***/ 1:
/*!************************************************!*\
  !*** multi ./resources/js/boxer/open-modal.js ***!
  \************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /Users/jrb/Sites/Boxer-Manager/resources/js/boxer/open-modal.js */"./resources/js/boxer/open-modal.js");


/***/ })

/******/ });
/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!********************************!*\
  !*** ./resources/js/advice.js ***!
  \********************************/
window.addEventListener('load', function () {
  request('count');
  xhr.addEventListener('load', function () {
    //console.log(xhr.response)
    resp = xhr.response;
    document.querySelector('#number').innerHTML = resp.count;
  });
  xhr.send();
});
document.querySelector('#btnGenerationSlip').addEventListener("click", function () {
  request('random'); //xhr.setRequestHeader("Authorization", "Bearer 1|ZDZyu53m8TIRAc8nJTYuP7u49rbkE0GrqLrWm9Ui")

  xhr.addEventListener('load', function () {
    //console.log(xhr.response)
    resp = xhr.response;
    document.querySelector('.content-advice').innerHTML = resp.advice.content;
  });
  xhr.send();
});

function request(endPoint) {
  xhr = new XMLHttpRequest();
  xhr.open('GET', 'http://localhost:8000/api/' + endPoint);
  xhr.responseType = 'json';
  return this;
}
/******/ })()
;
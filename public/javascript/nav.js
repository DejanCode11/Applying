/** @format */

'use strict';
const burger = document.querySelector('#burger-js');
const nav = document.querySelector('#nav');
const entireNav = document.querySelector('.navigation');
burger.addEventListener('click', () => {
  //   alert('dese');
  nav.classList.toggle('hidden');
  entireNav.classList.toggle('bg-color');
});

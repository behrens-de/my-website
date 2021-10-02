'use strict'


window.addEventListener('DOMContentLoaded', navSize)
window.addEventListener('resize', navSize)

function navSize(){
    const ww =  window.innerWidth;
    const size = document.querySelector('.size');
    const brand = document.querySelector('.company-name').offsetWidth;
    const nav = document.querySelector('.top-menu').offsetWidth;

    if(size){
        size.innerHTML = `Window Width ${ww}<br>
        Nav width ${nav}<br>
        Brand width ${brand}`;
    } 
}
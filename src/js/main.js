import 'lazysizes';
import $ from 'cash-dom';
// import smoothscroll from 'smoothscroll-polyfill';

import widok from 'widok';
import createScrollItem from 'widok-scroll-item';

// smoothscroll.polyfill();

// document.addEventListener('lazybeforeunveil', event => {
//   const bg = event.target.getAttribute('data-bg');
//   if (bg) event.target.style.backgroundImage = 'url(' + bg + ')';
// });

$('#intro-message');

createScrollItem('#intro-message', {
  onScroll: item => {
    if (item.offset > widok.s + window.innerHeight * 0.9) {
      if (item.isShown) {
        item.el.removeClass('shown');
        item.isShown = false;
      }
    } else {
      if (!item.isShown) {
        item.el.addClass('shown');
        item.isShown = true;
      }
    }
  },
});
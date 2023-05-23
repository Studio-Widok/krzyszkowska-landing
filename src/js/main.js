import 'lazysizes';
import $ from 'cash-dom';
import smoothscroll from 'smoothscroll-polyfill';

import widok from 'widok';
import createScrollItem from 'widok-scroll-item';

smoothscroll.polyfill();

$('.message').each((_index, DOMElement) => {
  createScrollItem(DOMElement, {
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
});

function openNav() {
  if (isNavOpen) return;
  $('#burger, nav').addClass('opened');
  isNavOpen = true;
}

function closeNav() {
  if (!isNavOpen) return;
  $('#burger, nav').removeClass('opened');
  isNavOpen = false;
}

let isNavOpen = false;
$('#burger').on('click', () => {
  if (isNavOpen) closeNav();
  else openNav();
});

$('.nav-link--scroll').on('click', event => {
  const targetId = event.currentTarget.dataset.scrollTarget;
  const target = $(`#part-${targetId}`).offset().top - 47;
  closeNav();
  window.scrollTo({ top: target, behavior: 'smooth' });
});
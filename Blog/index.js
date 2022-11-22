const navMenu = document.querySelector('.nav');
const navToggle = document.querySelector('.nav__toggle');
const layer = document.querySelector('.layer');
const header = document.querySelector('.header');

navToggle.addEventListener('click', (e) => {
  e.preventDefault();
  navToggle.classList.toggle('nav__toggle--active');

  if (navToggle.classList.contains('nav__toggle--active')) {
    navMenu.classList.add('nav--active');
    layer.classList.add('layer--active');
    document.body.style.overflowY = 'hidden';
  } else {
    navMenu.classList.remove('nav--active');
    layer.classList.remove('layer--active');
    document.body.style.overflowY = 'auto';
  }

  e.stopPropagation();
});

window.addEventListener('scroll', () => {
  const position = window.pageYOffset;
  if (position > 85) {
    header.classList.add('header--active');
  } else {
    header.classList.remove('header--active');
  }
});

$(document).ready(function(){
  $('.filter-item').click(function(){
      const value = $(this).attr('data-filter');
      if (value == 'all'){
          $('.post-box').show('1000');
      }
      else {
          $('.post-box').not('.' + value).hide('1000');
          $('.post-box').filter('.' + value).show('1000');
      }
  });
  // Add active Btn
  $('.filter-item').click(function(){
      $(this).addClass("active-filter").siblings().removeClass("active-filter");
  })
});
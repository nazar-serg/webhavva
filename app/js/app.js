/**
 * Menu
 */
/* Nav icon */
const navBtn = document.querySelector('.nav-icon-btn');
const navIcon = document.querySelector('.nav-icon');
const nav = document.querySelector('.header__row');

navBtn.addEventListener('click', () => {
    navIcon.classList.toggle('nav-icon--active');
    nav.classList.toggle('header__row--mobile');
    document.body.classList.toggle('no-scroll');
});

function hideMobMenu() {
    var $menu = $('.header__row');
    var $burger = $('.nav-icon');
    var $lock = $('body');

    if ($menu.hasClass('header__row--mobile')) {
        $menu.removeClass('header__row--mobile');
    }

    if ($burger.hasClass('nav-icon--active')) {
        $burger.removeClass('nav-icon--active');
    }

    if ($lock.hasClass('no-scroll')) {
        $lock.removeClass('no-scroll');
    }
}

$('.nav__list li a').on('click', function(event) {

    hideMobMenu();
});

$('.header__logo').on('click', function(event) {

    hideMobMenu();
});

$('.header__btn').on('click', function(event) {

    hideMobMenu();
});

// Toggle active class
document.querySelectorAll('.nav__link').forEach(link => {
    link.addEventListener('click', function() {
     
      document.querySelectorAll('.nav__link').forEach(item => {
        item.classList.remove('active');
      });

      this.classList.add('active');
    });
  });

/**
 * sticky header
 */
function menuFixed() {
    $(window).on('scroll', function() {
        if ($(window).scrollTop() >= 200) {
            $('.header').addClass('fixed-header');
        } else {
            $('.header').removeClass('fixed-header');
        }
    });
}
menuFixed();
/**
 * Tabs
 */
const tabButtons = document.querySelectorAll('.tab-button');
const tabContents = document.querySelectorAll('.tab-content');

function activateTab(tabToActivate) {
  tabButtons.forEach(btn => btn.classList.remove('active'));
  tabContents.forEach(content => content.classList.remove('active'));

  tabToActivate.classList.add('active');

  const tabToShow = tabToActivate.getAttribute('data-tab');
  document.getElementById(`tab-${tabToShow}`).classList.add('active');
}

tabButtons.forEach(button => {
  button.addEventListener('click', () => {
    activateTab(button);
  });
});


  



/*******************************************/
/***** ↓↓ Prevent resubmission form ↓↓ *****/

if (window.history.replaceState) {
  window.history.replaceState(null, null, window.location.href);
}

/***************************************/
/***** ↓↓ Open/close login menu ↓↓ *****/

function openLoginMenu() {
  document.getElementById("loginMenu").style.width = "320px";
};

function closeLoginMenu() {
  document.getElementById("loginMenu").style.width = "0";
};

$(document).ready(function () {
  $('#loginLink').click(function () {
    $('#menuOverlay').fadeIn();
    openLoginMenu();
  });
  $('#menuOverlay').click(function () {
    $(this).fadeOut();
    closeLoginMenu();
  });
});

/*************************************/
/***** ↓↓ Open/close usermenu ↓↓ *****/

function openUserMenu() {
  document.getElementById("userMenu").style.width = "350px";
};

function closeUserMenu() {
  document.getElementById("userMenu").style.width = "0";
};

$(document).ready(function () {
  $('#userMenuLink').click(function () {
    $('#menuOverlay').fadeIn();
    openUserMenu();
  });
  $('#menuOverlay').click(function () {
    $(this).fadeOut();
    closeUserMenu();
  });
});

/*************************************/
/***** ↓↓ Open/close dropdown ↓↓ *****/

$(function () {
  $('.dropdown').on('click', function () {
    var slide = $(this).next().find('.dropdown_list');
    slide.slideToggle();
  });
});

/*************************************************************/
/***** ↓↓ Display on left the selected video in games ↓↓ *****/

function show(param_div_id) {
  document.getElementById('displayVideo').innerHTML = document.getElementById(param_div_id).innerHTML;
}
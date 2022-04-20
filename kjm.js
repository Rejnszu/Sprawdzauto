// NAWGACJA MOBILNA
function openNav() {
  $("#mySidebar").addClass("sidebarOpen");
  document.getElementById("mySidebar").style.height = "16.5rem";
}

function closeNav() {
  $("#mySidebar").removeClass("sidebarOpen");

  document.getElementById("mySidebar").style.height = "0";
}

// SCROLLING NAV
$(window).on("scroll", function () {
  if ($(window).scrollTop()) {
    $(".row-nav").addClass("row-nav-scrolled");
    $(".nav a").addClass("nav-link-scrolled");
  } else {
    $(".row-nav").removeClass("row-nav-scrolled");
    $(".nav a").removeClass("nav-link-scrolled");
  }
});

// IKONA COLLAPSÓW NA FRONCIE
$(".collapse_button").click(function () {
  if (!$(this).children(".icon_after").hasClass("icon_after_active")) {
    $(".collapse_button")
      .children(".icon_after")
      .not(this)
      .removeClass("icon_after_active");
    $(".collapse_button")
      .children(".icon_after")
      .addClass("icon_after_inactive");
    $(this).children(".icon_after").addClass("icon_after_active");
  } else {
    $(this).children(".icon_after").removeClass("icon_after_active");
    $(this).children(".icon_after").addClass("icon_after_inactive");
  }
});

AOS.init({
  once: true,
  duration: 500,
  offset: 150,
});

$(function ($) {
  let url = window.location.href;

  $(".nav-link").each(function () {
    if (this.href + "/" === url) {
      $(".nav-link").removeClass("nav-link-active");
      $(this).addClass("nav-link-active");
    }
  });
});

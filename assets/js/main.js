$(document).ready(function(){
$('.banner').css('height',window.innerHeight)
  $('.grid').masonry({
    // options
    itemSelector: '.grid-item',
    columnWidth: 310
  });
  $(".why").owlCarousel({
    items:1,
    dots:true
  });

  $(".mission-vision").owlCarousel({
    items:1,
    dots:true
  });

  $(".home-carousel").owlCarousel({
    items:1,
    dots: false,
    nav: true,
    navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"]

  });
  $(".about-carousel").owlCarousel({
    items:1,
    dots: false,
    nav: true,
    navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"]
  });
  $("#news-carousel").owlCarousel({
    items:3,
    dots: false,
    nav: true,
    navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
    responsive:{
      0 : {
        items : 1
      },

      480 : {
        items: 1
      },
      768 : {
        items: 3
      }
    }
  });

  $("#portfolio-page").owlCarousel({
    items:1,
    dots: false,
    nav: true,
    navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"]
  });

  $("#media").hide();
  $('.info-text').hide();
  $('[data-id = 1]').show();
  $("#history").show();
  $("#mission").hide();
  $("#why").hide();

});

$(function(){
  var acc = document.getElementsByClassName("accordion");
  var i;

  for (i = 0; i < acc.length; i++) {
    acc[i].onclick = function(){
      this.classList.toggle("active");
      var panel = this.nextElementSibling;

      if (panel.style.display === "block") {
        panel.style.display = "none";

      } else {
        panel.style.display = "block";
      }
    }
  }
});

$('.submenu-list').on('click',function(){
  // $(this).css('background-color','#3B1610');
  // $(this).css('color','White');
  $(this).addClass('about-clicked');

  if ($(this).attr('id') === 'why-demian') {
    $("#why").show();
    $("#mission").hide();
    $("#history").hide();
  }

  if ($(this).attr('id') === 'mission-vision') {
    $("#why").hide();
    $("#history").hide();
    $("#mission").show();
  }

  if ($(this).attr('id') === 'history-btn') {
    $("#history").show();
    $("#mission").hide();
    $("#why").hide();
  }


  var notClicked = $('.submenu-list').not(this);
  notClicked.removeClass('about-clicked');
  // notClicked.css('background-color','#D1D0D0');
  // notClicked.css('color','initial');
});

$('.filter-btn').on('click',function(){
  $(this).addClass('filter-clicked');
  $('.filter-btn').not(this).removeClass('filter-clicked');

  var filter = $(this).attr('data-id');

  if(filter === "news"){
    $("#media").hide();
    $("#news").show();
  }else{
    $("#media").show();
    $("#news").hide();
  }
});

$('.service-container').on('click',function(){

  $(this).addClass('service-selected');
  $('.service-container').not(this).removeClass('service-selected');

  var val = $(this).attr('data-id');
  $('.info-text').hide();
  $('[data-id = '+ val +']').show();

});


$('.about-selector li').click(function(){

  var clicked = $(this).attr('data-id');
  $(this).addClass('about-selected');
  $('.about-selector li').not(this).removeClass('about-selected');

  console.log(clicked);
  if (clicked === 'history'){
    $("#why").show();
    $("#mission").hide();
    $("#history").hide();
  }

  if ( clicked === 'mission') {
    $("#why").hide();
    $("#history").hide();
    $("#mission").show();
  }

  if (clicked === 'why') {
    $("#history").show();
    $("#mission").hide();
    $("#why").hide();
  }
});

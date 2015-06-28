$(document).ready(function(){

  // One Page Navigation Setup
  $('#navigation').singlePageNav({
    offset: $('#navbar').outerHeight(),
    filter: ':not(.external)',
    speed: 750,
    currentClass: 'active',

    beforeStart: function() {
    },
    onComplete: function() {
    }
  });

  // Sticky Navbar Affix
  $('#navbar').affix({
    offset: {
      top: $('#topbar').outerHeight()
    }
  });
  
  // Smooth Hash Link Scroll
  $('.smooth-scroll').click(function() {
    if (location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') && location.hostname === this.hostname) {

      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });

  $('.nav a').on('click', function(){
    if($('.navbar-toggle').css('display') !=='none'){
      $(".navbar-toggle").click();
    }
  });

  var $container = $('.portfolio-isotope');

  $container.imagesLoaded(function(){
    $container.isotope({
      layoutMode: 'sloppyMasonry',
      itemSelector: '.portfolio-item'
    });
  });

  // filter items when filter link is clicked
  $('#filters a').click(function(){
    var selector = $(this).attr('data-filter');
    $container.isotope({ filter: selector });
    return false;
  });


  //boton de subscripciones
  $("#subscribe").click(function(){
    $.ajax({
      url: "/subscribe/new",
      type: "POST",
      data: {
        email: $("#form-subscribe").val()
      },
      success: function( data ) {
        alert(data);
      }
    });
  })

});
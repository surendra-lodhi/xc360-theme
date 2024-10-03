// JavaScript Document
jQuery(document).ready(function($) { 
	
	$('.mainmenu li:has(ul)').addClass('parent'); 
 
    $('a.menulinks').click(function() {
        $(this).next('ul').slideToggle(250);
        $('body').toggleClass('mobile-open'); 
		$('.mainmenu li.parent ul').slideUp(250);
		$('a.child-triggerm').removeClass('child-open');
        return false;
     });	 
	 
	$('.mainmenu li.parent > a').after('<a class="child-triggerm"><span></span></a>');
	
    $('.mainmenu a.child-triggerm').click(function() {
        $(this).parent().siblings('li').find('a.child-triggerm').removeClass('child-open');
        $(this).parent().siblings('li').find('ul').slideUp(250);
        $(this).next('ul').slideToggle(250);
        $(this).toggleClass('child-open');
        return false;
    });

  //Services jquery
    jQuery('.services-slider').slick({
      dots: true,
      infinite: false,
      speed: 300,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows:false
    }); 
    
    //Client Slider jquery
    jQuery('.client-slider').slick({
      dots: true,
      infinite: false,
      speed: 300,
      slidesToShow: 5,
      slidesToScroll: 1,
      arrows:true,
      responsive: [
        {
          breakpoint: 1199,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 1,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            arrows:false
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows:false
          }
        }
      ]
    });
    
    //Services carousel
    jQuery('.services-carousel-slider').slick({
      dots: false,
      infinite: false,
      speed: 300,
      slidesToShow: 3,
      slidesToScroll: 1,
      arrows:true,
      responsive: [
        {
          breakpoint: 1199,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            arrows:false,
            dots: true
          }
        },
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows:false,
            dots: true
          }
        }
      ]
    });

    //Tabs JQuery
    // Show the first tab and hide the rest
    $('#tabs-nav li:first-child').addClass('active');
    $('.tab-content').hide();
    $('.tab-content:first').show();

    // Click function
    $('#tabs-nav li').click(function () {
        $('#tabs-nav li').removeClass('active');
        $(this).addClass('active');
        $('.tab-content').hide();

        $('.services-slider').slick('refresh');

        var activeTab = $(this).find('a').attr('href');
        $(activeTab).fadeIn();
        return false;

    });

    /* Acc jQuery
    =========== */
    $(function() {
      $('.acc__title').click(function(j) {
        
        var dropDown = $(this).closest('.acc__card').find('.acc__panel');
        $(this).closest('.acc').find('.acc__panel').not(dropDown).slideUp();
        
        if ($(this).hasClass('active')) {
          $(this).removeClass('active');
        } else {
          $(this).closest('.acc').find('.acc__title.active').removeClass('active');
          $(this).addClass('active');
        }
        
        dropDown.stop(false, true).slideToggle();
        j.preventDefault();
      });
    });
    
    //testimonials jquery
    $('.testimonials').slick({
      dots: false,
      arrows: true,
      infinite: true,
      speed: 500,
      fade: true,
      autoplay: true,
      cssEase: 'linear',
      responsive: [
        {
          breakpoint: 768,
          settings: {
            arrows: false,
            dots: true
          }
        }
      ]
    });

    
    //Client Slider jquery
    jQuery('.awards-slider').slick({
      dots: true,
      infinite: false,
      speed: 300,
      slidesToShow: 6,
      slidesToScroll: 1,
      arrows:true,
      responsive: [
        {
          breakpoint: 1199,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 1,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            arrows:false
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows:false
          }
        }
      ]
    });

    //case studies slider js
    $('.case-slider-for').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows:true,
      fade: true,
      asNavFor: '.case-slider-nav',
      responsive: [
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows:false,
            dots: true
          }
        }
      ]
    });
    $('.case-slider-nav').slick({
      slidesToShow: 2,
      slidesToScroll: 1,
      asNavFor: '.case-slider-for',
      dots: false,
      arrows: false,
      centerMode: true,
      centerPadding: '0px',
      focusOnSelect: true
    });

/*Team box js*/
    jQuery(document).on('click', ".single-team-box", function () {
        jQuery(".single-team-box").removeClass("arrow");
        jQuery(this).addClass("arrow");
        jQuery(".single-team-detail").removeClass("active");
        jQuery(this).next(".single-team-detail").addClass("active");
        jQuery('.single-team').css({"margin-bottom": "0"});
        var $top_product = jQuery(this).offset().top;
        var top_wrap = jQuery(this).parents('.team-wrap').offset().top;
        var total_top = $top_product - top_wrap;
        jQuery(this).parent(".single-team").css("margin-bottom", jQuery(this).parent('.single-team').find(".single-team-detail").height());
        jQuery(this).next(".single-team-detail").css("top", jQuery(this).parent('.single-team').find(".single-team-box").height() + total_top);
    });
    jQuery(document).on('click', ".close-team", function () {
        jQuery(".single-team-box").removeClass("arrow");
        jQuery(document).find(".single-team-box").removeClass("arrow");
        jQuery(".single-team-detail").removeClass("active");
        jQuery('.single-team').css({"margin-bottom": "0"});
    });
    var hash = window.location.hash;
    jQuery(document).find(hash).find('.single-team-box').trigger('click');


    /*Team Tab*/
    jQuery('.tab-a').click(function () {
        jQuery(".tab").removeClass('tab-active');
        jQuery(".tab[data-id='" + jQuery(this).attr('data-id') + "']").addClass("tab-active");
        jQuery(".tab-a").removeClass('active-a');
        jQuery(this).parent().find(".tab-a").addClass('active-a');
    });    

    leftrightspace(); 


/* Start custome ul li dropdown */
  var toggleClick = function(){
    console.log('clicked');
  var divObj = jQuery(this).next();
  var nstyle = divObj.css("display");
  
    if(nstyle == "none"){
      divObj.slideDown(false,function(){
        $(".categories li").on("click",function(){
          var txt = $(this).text();
          $(this).parents().prev('span').text(txt);
          divObj.slideUp();
          $("html").unbind("click");
        });
        $("html").bind("click",function(){
          console.log('in');
          divObj.slideUp();
          $("html").unbind("click");
        });
      });
    }
  };
  $('#news-categories span').click(toggleClick);
  /* End custome ul li dropdown */

});//document.ready end here

jQuery(window).load(function () {
    // Preloader
    jQuery('.loader').fadeOut();
    jQuery('.loader-mask').delay(350).fadeOut('slow');
});

jQuery(window).resize(function() {
    leftrightspace();   
});



function leftrightspace() {    
  var windwidth = jQuery(window).width();
  var containerwidth = jQuery('.container').width();
  var finalspace = (windwidth - containerwidth) / 2
  jQuery('.location').css('margin-left', finalspace);
}
jQuery(document).ready(function() {

    // for hover dropdown menu
    $('ul.nav li.dropdown').hover(function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(200);
    }, function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(200);
    });
    // slick slider call 
    $('.slick_slider').slick({
        dots: true,
        infinite: true,
        speed: 1000,
        slidesToShow: 1,
        slide: 'div',
        autoplay: true,
        autoplaySpeed: 3000,
        cssEase: 'linear'
    });

    // slick slider2 call 
    $('.slick_slider2').slick({
        dots: true,
        infinite: true,
        speed: 2000,
        autoplay: true,
        autoplaySpeed: 3000,
        fade: true,
        slide: 'div',
        cssEase: 'linear'
    });
        // latest post slider call 
    $('.latest_postnav').newsTicker({
        row_height: 64,
        speed: 800,
        prevButton: $('#prev-button'),
        nextButton: $('#next-button')
    });

    //Check to see if the window is top if not then display button
    jQuery(window).scroll(function() {
        if ($(this).scrollTop() > 300) {
            $('.scrollToTop').fadeIn();
        } else {
            $('.scrollToTop').fadeOut();
        }
    });
	
    //Click event to scroll to top
    $('.scrollToTop').click(function() {
        $('html, body').animate({
            scrollTop: 0
        }, 800);
        return false;
    });
    //Click to toggle the login window
   
   
    $('.login_click').click(function(){
        jQuery('#login_section').slideDown('slow');
        
    });
    $('.login_close').click(function(){
       jQuery('#login_section').slideUp();
    });
    $('.login_bckground').click(function(){
       jQuery('#login_section').slideUp();
    });
      //
		$('.insert').click(function(){
			$('#insert').show();
		});
		$('#insert').hide();
	 //
	 
	 
	 
});

$('#login_section').hide();

wow = new WOW({
    animateClass: 'animated',
    offset: 100
});
wow.init();


jQuery(window).load(function() { // makes sure the whole site is loaded
    $('#status').fadeOut(); // will first fade out the loading animation
    $('#preloader').delay(100).fadeOut('slow'); // will fade out the white DIV that covers the website.
    $('body').delay(100).css({
        'overflow': 'visible'
    });
});
		
  //handling the search area
  		
		
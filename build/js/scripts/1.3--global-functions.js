// JAVASCRIPT LAYER [APP.JS]  =========================================================================================

// ====== INDEX  ======================================================================================================
// ==
// == A. BURGER MENU
// == B. HOMEPAGE CAROUSEL
// ==
// ====== INDEX  ======================================================================================================

// A. SHOW/HIDE +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    
// A.1. BURGER MENU --------------------------------------------------------------------------------------------------- 
    
$('.reveal').click(function(e) {
    
    var target = $(this).attr('href');
    
    if ($(target).hasClass('hidden') ) {
        
        $(target).removeClass('hidden');
        $('.reveal').addClass('close');

    } else {
        
        $(target).addClass('hidden');
        $('.reveal').removeClass('close');

    }
    
    e.preventDefault();
    
  });
    
    
$('.o-hamburger').click(function(e) {
    
    var target = $(this).attr('href');
    
    if ($(target).hasClass('hidden') ) {
        
        $(target).removeClass('hidden');
        $('.c-hamburger').addClass('is-active');
        $('body').addClass('fixed');
        
    } else {
        
        $(target).addClass('hidden');
        $('.c-hamburger').removeClass('is-active');
        $('body').removeClass('fixed');
        
    }
    
    e.preventDefault();
    
  });


    
// A.1. END -----------------------------------------------------------------------------------------------------------
    
 
// A.2. END -----------------------------------------------------------------------------------------------------------

	// A.2.2. MODAL POPUPS ----------------------------------

	var modalContent = '';	
	$('.modal-open').on('click', function(){
			modalContent = $(this).attr('name');
			if($('#'+modalContent).hasClass('on')){
					$('#'+modalContent).removeClass('on');
					$('body').removeClass('modal-open');
			}else{
					hideAllContent();
					showmodalContent(modalContent);
			}
	});

	function hideAllContent(){
        $('.o-modal-full').removeClass('on');
        $('body').removeClass('modal-open');
	};
	
	function showmodalContent(modalContentDiv){
        $('#'+modalContentDiv).addClass('on');
        $('body').addClass('modal-open');
	};

	// A.2.2. END -------------------------------------------

// A.2. END -----------------------------------------------------------------------------------------------------------
    
// A.5. SCREEN SIZE CHECK ---------------------------------------------------------------------------------------------
    
	var screen = $( window ).width();
	console.log('I am a device, and my width is: ' + screen);
    
// A.5. END -----------------------------------------------------------------------------------------------------------
    
// A.3. SCROLL TO LINK ------------------------------------------------------------------------------------------------

// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

// Get the header
var header = document.getElementById("o-header");

// Get the offset position of the navbar
var sticky = header.offsetTop;

// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}

// A.3. END -----------------------------------------------------------------------------------------------------------
    
// A. END +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
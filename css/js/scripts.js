jQuery(document).ready(function($){

    $('.login-btn').click(function(){
        $('.login-wrapper').toggleClass('show');
    });
   
    $('p:empty').remove();

    $('.input-visually-hidden label').click(function(){
        $(this).toggleClass('selected');
    });

    $('.team__description').removeClass('show');
    $(function () {
		$('.team__button').on('click', function () {	
			$(this).next().toggleClass('show');
            $(this).find('i').toggleClass('fa-plus fa-minus');
		});
	});

    $('.agenda .nav-item.nav-link:first-of-type').addClass('active');

    $('.workshop-relationship-container').hide();
    
    $(function () {
        $('.workshop-anchor').click(function(){
            $(this).next().slideToggle();
            $(this).find('i').toggleClass('fa-plus fa-minus');
        //  $('.workshop-relationship-container').slideToggle();
        });
    });

    // $('.speaker-container').each(function( index, element ) {
    //     if ( $(element).text().length > 0 ) {
    //       $(element).parent('.agenda-rows').addClass("lightgrey");
    //     }
    //   });
});
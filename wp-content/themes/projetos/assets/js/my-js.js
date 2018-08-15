jQuery(document).ready(function($) {
	//animação da estrela
	$('.presidente-da-semana__estrela').addClass('presidente-da-semana__estrela--animate');
	setTimeout(function(){ $('.presidente-da-semana__estrela').removeClass('presidente-da-semana__estrela--animate'); }, 1000);

	$('.presidente-da-semana__estrela').hover(function(){
		$('.presidente-da-semana__estrela').addClass('presidente-da-semana__estrela--animate');
		setTimeout(function(){ $('.presidente-da-semana__estrela').removeClass('presidente-da-semana__estrela--animate'); }, 500);
	});


	//animação no scroll
	/*
		$window.on('scroll', check_if_in_view)
	$('.progress-bar').on('click', function(){
		$('.progress-bar__progress').addClass('progress-bar__progress--animate');
		console.log('click');
	});

	*/

	var $window = $(window);
	var $animation_elements = $('.progress-bar__progress');

	function check_if_in_view() {
	  var window_height = $window.height();
	  var window_top_position = $window.scrollTop();
	  var window_bottom_position = (window_top_position + window_height);

  $.each($animation_elements, function() {
    var $element = $(this);
    var element_height = $element.outerHeight();
    var element_top_position = $element.offset().top;
    var element_bottom_position = (element_top_position + element_height);

    //check to see if this current container is within viewport
    if ((element_bottom_position >= window_top_position) &&
        (element_top_position <= window_bottom_position)) {
      $element.addClass('progress-bar__progress--animate');
    }
  });
}

	$window.on('scroll resize', check_if_in_view);
	$window.trigger('scroll');
});

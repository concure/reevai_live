jQuery(document).ready(function($) {

	var container = document.querySelector('.reference_gallery');
	var msnry = new Masonry( container, {
	   columnWidth: '.gallery-item',
	   itemSelector: '.gallery-item',
	});

	$('#open-menu').click(function(){
		$('.collapse').slideToggle();
		$(this).toggleClass('open');
		return false;
	});

});
$(document).ready(function(){

  	var h = $(window).height();

	$('body').css('min-height',h);

	var doc = document.documentElement;
	doc.setAttribute('data-useragent', navigator.userAgent);

	$('input').iCheck({
		checkboxClass: 'icheckbox_flat-grey',
		radioClass: 'iradio_flat-grey'
	});


  	$("#shipping_form").validetta({
	    realTime : true
	});




	//body - 1246
	//section - 979
	//footer - 196
	// 1175 +
});
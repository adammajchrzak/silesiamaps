$(function(){
	
	Cufon.replace('.cufon', {
		hover: true
	});
	
	$("a[rel='colorbox']").colorbox();
	$("input:checkbox, input:radio, select, #contact-form button, textarea").uniform();
	/*
	var flashvars = false;
	var params = {
	  menu: "false",
	  wmode: "transparent"
	};
	var attributes = {};

	swfobject.embedSWF("/images/top_990x352.swf", "page-banner", "990", "352", "9.0.0","expressInstall.swf", flashvars, params, attributes);
	*/
	$('#fue-01').show();
	
	$('.fue-01').click(function(){
		$('#fue-01').toggle();	
	});
	
	
	
	$('.footer-logos li a').mouseover(function(){
		var ids = $(this).attr('class').slice(-2);		
		$('.footer-er-logo-'+ids).removeClass('footer-er-logo-'+ids).addClass('footer-er-logo-'+ids+'-hover');
	});
	
	$('.footer-logos li a').mouseout(function(){
		var ids = $(this).attr('class').slice(-2);		
		$('.footer-er-logo-'+ids+'-hover').removeClass('footer-er-logo-'+ids+'-hover').addClass('footer-er-logo-'+ids);
	});
	
	/* home headers	*/
	$('.sidebar-left-menu-header').addClass('cufon');
	$('#home-news-field h3').addClass('cufon');
	$('#home-events-field h3').addClass('cufon');
	$('#home-content-field h3').addClass('cufon');
	$('.sidebar-left-box h4').addClass('cufon');
	$('.page-text h1').addClass('cufon');
	
	if ($('body').outerWidth() > 1160){
		$('#menu-language').css({'right': '-80px'});
	}
	
    $('.slideshow').cycle({
		fx: 'fade' // choose your transition type, ex: fade, scrollUp, shuffle, etc...
	});
	
	
	$('#contact-form').submit(function(){
		
		if($('#contact-form #flname').val() == '')	{
			alert('Pole imię i nazwisko jest wymagane!');
			return false;
		}
		
		if($('#contact-form #email').val() == '')	{
			alert('Pole adres e-mail jest wymagane!');
			return false;
		}
		
		if($('#contact-form #subject').val() == '')	{
			alert('Pole temat jest wymagane!');
			return false;
		}
		
		if($('#contact-form #sendto').val() == '0')	{
			alert('Pole adresat jest wymagane!');
			return false;
		}
		
		if($('#contact-form #message').val() == '')	{
			alert('Pole wiadomość jest wymagane!');
			return false;
		}
		
		$.ajax({
			url 	: '/pl/index/send',
			global 	: false,
			type	: 'POST',
			data	: ({
				'flname' 	: $('#flname').val(),
				'email' 	: $('#email').val(),
				'subject'	: $('#subject').val(),
				'message'	: $('#message').val()
			}),
			async	: false,
			success	: function(){			
				alert('Dziękujemy za przesłanie formularza.');
				return false;
			}
		});
		
		
		$('#contact-form #flname').val('');
		$('#contact-form #email').val('');
		$('#contact-form #subject').val('');
		$('#contact-form #message').val('');
		
		
		return false;
	});
});
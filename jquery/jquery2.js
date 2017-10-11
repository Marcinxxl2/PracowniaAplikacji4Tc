$(document).ready(function(){
	$('div').css('background', 'yellow');
	$('.tekst').css('background', 'teal');
	$('#id1').css('background', 'red');
	$('#id2').css('color', 'white');
	$('#id1').css({
		'background': 'white',
		'color': 'green'
	});
	$('*').css('color', 'black');
	$('*').css('font-family', 'arial', 'verdana');
	$('*').css({
		'color': 'red',
		'font-size': '90%'
	});

	$('#btn1').click(function(){
		$('#przyciskTekst').css('color', 'lime');
	});

	$('#ukryjAkapit').click(function(){
		//$('#akapit').hide('fast');
		$('#akapit').hide(5000);
	})
	$('#pokazAkapit').click(function(){
		//$('#akapit').show('slow');
		$('#akapit').show(4000);
	})

	$('#zmienHtml').click(function() {
		$('#html').html('<h1>Zmień tekst</h1>');
	});

	$('#kolorInny').click(function() {
		$('input[type="text"]').css('background', 'brown');
		$('input[type="password"]').css('background', 'green');
	});

	$('#link a').css('color', 'black');
});

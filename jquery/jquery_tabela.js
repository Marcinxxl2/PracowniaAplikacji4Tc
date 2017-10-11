$(document).ready(function(){
	$('#tabela1 tr:even').css('background', '#b2aaaa');
	$('#tabela1 tr:odd').css('background', '#3ed2ff');
	$('#tabela1 tr:first').css('background', '#df2dff');
	$('#tabela1 tr:last').css('background', '#76ff2d');
	$('#tabela1 tr:eq(3)').css('background', '#ff9d00');
	$('#tabela1 td:contains("Chleb")').css('background', '#ff3b00');

	$('p:hidden').show(3000);

	$('#niewidoczny').click(function() {
		$('#obraz').hide(1500);
	})

	$('#widoczny').click(function() {
		$('#obraz').show(1500);
	})


});

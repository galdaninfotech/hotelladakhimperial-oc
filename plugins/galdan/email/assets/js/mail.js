

$(document).ready(function(){

$('th#select-all-mail').on('click', function(){

	var count = 0; 
	$('th#select-all-mail>input:checked').each(function(){
		count++;
	});

	if(!count > 0) {
		console.log(count);
		$('td.select-mail>input:checkbox').removeAttr('checked');
	} else {
		$('td.select-mail>input:checkbox').attr('checked', 'checked');
		console.log(count);
	}
});

$('td.select-mail').on('click', function(){
	$('#rcmbtn108').removeClass('disabled');
	$('#rcmbtn109').removeClass('disabled');
	$('#rcmbtn110').removeClass('disabled');
	$('#rcmbtn111').removeClass('disabled');

	var count = 0;
	$('td.select-mail>input:checked').each(function(){
		count++;
	});
	if(!count > 0){
		$('#rcmbtn108').addClass('disabled');
		$('#rcmbtn109').addClass('disabled');
		$('#rcmbtn110').addClass('disabled');
		$('#rcmbtn111').addClass('disabled');
	}

	//console.log($('td.select-mail>input:checked'));
});

















}); //end document.ready
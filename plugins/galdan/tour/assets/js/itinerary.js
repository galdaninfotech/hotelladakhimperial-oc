

$(document).ready(function(){


$('#Lists > div.control-list.list-scrollable > table > tbody > tr > td > button').on('click', function(){
    $(this).parent().parent().addClass('selected');
});



});
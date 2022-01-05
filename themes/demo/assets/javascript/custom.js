/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function () {




/* Booking Form */    
$('.open-booking-form').on('click', function () {
    var click = +$(this).data('clicks') || 0;
    if (click % 2 == 1) {
        $('#booking-form-wrapper').animate({ bottom:'-160px' }, 600);
        $('.open-booking-form').animate({ bottom:'0px' }, 600);
        $('.open-booking-form input').val('Book Now');
    }else{
        $('#booking-form-wrapper').animate({ bottom:'0px' }, 600);
        $('.open-booking-form').animate({ bottom:'160px' }, 600);
        $('.open-booking-form input').val('Cancel');
    };
    $(this).data('clicks',click+1);
});    


/* Gallery */    
$('#wrapper').css('min-height', '200px');




// Start TypoGrid
$('#gi-grid-btn-wrap').css({'position': 'fixed', 'right': '0'});
$('#gi-grid-btn-wrap a').css({'font-size': "12px", 'padding': '2px 8px', 'background-color': 'rgba(0, 0, 0, .6)','color': '#fff','text-decoration': 'none', 'margin-left': '1px', 'cursor': 'pointer', 'display': 'inline-block'});

function toggleGridH() {
    if($('.gi-grid small').html() === '.'){
        hideGridH();
    } else {
        displayGridH();
    }
}

function displayGridH() {
    var color = 'green';
    $('body').append('<div class="gi-grid"><small>.</small></div>');
    //$('.gi-grid div').css('border-top', '1px solid green');
    for (i = 0; i < 1000; i++) {
        $('.gi-grid').append('<div><i class="fa fa-phonez"></i></div>');
    }  
    $('.gi-grid').css({'position': 'fixed', 'top': '-6px', 'width': '100%', 'z-index': '-1'});    
}

function hideGridH() {
    $('.gi-grid').remove();
}

$('#typograph-wrapper input').on("change", function () {
    var x = $(this).val();
    if (x === 9) {
        $('.gi-grid div').css({'opacity': '9'});
    } else {
        
        $('.gi-grid div').css({'opacity': '0.' + x});
    }
    
});


$("i.fa-chevron-circle-left").click(function () {
    $('#slide-panel').animate({ width:'126px' }, 600);
});






$('#triggerToggle1').click(function(){
 $('#div1').show();
 $('#div1').animate({ width:'400px' }, 600);
});
$('#triggerToggle2').click(function(){
 $('#div1').hide();
});








});//end document.read
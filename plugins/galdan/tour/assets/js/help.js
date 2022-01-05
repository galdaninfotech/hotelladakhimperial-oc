/*-----------------------------------------------------------------------------------
/* Help Javascript
-----------------------------------------------------------------------------------*/

jQuery(document).ready(function($) {

//General
$('td.list-cell-name-bookings').mouseover(function(){
  alert($(this).text());
});








  
 
 
// Help
// $.post('help/helplist', {},
//   function (count) {
//       $('body').prepend(count);
//   });

$('.mainmenu-account').parent().append('<li><a>Help</a></li>');
$('.mainmenu-account').siblings('li:last').click(function(e){
  e.preventDefault();
  $.post('help/index', {},
    function (count) {
      console.log(count);
        $('body').prepend(count);
        e.preventDefault();
        var div = $('#help');
        //console.log(div.css('left'));
        if (div.css('top') === '-500px') {
          $('#help').animate({
            top: '0px'
          }); 
        } else {
          $('#help').animate({
            top: '-500px'
          });
        }
    });
});



// // $('.mainmenu-account').parent().append('<li><a>Help</a></li>');
// $('.mainmenu-account').siblings('li:last').click(function(e){
//   e.preventDefault();
//   var div = $('#help');
//   //console.log(div.css('left'));
//   if (div.css('top') === '-500px') {
//     $('#help').animate({
//       top: '0px'
//     }); 
//   } else {
//     $('#help').animate({
//       top: '-500px'
//     });
//   }
// });







// $('#help h2 a').click(function(e){
//   e.preventDefault();
//   var div = $('#help');
//   //console.log(div.css('left'));
//   if (div.css('top') === '-500px') {
//     $('#help').animate({
//       top: '0px'
//     }); 
//   } else {
//     $('#help').animate({
//       top: '-500px'
//     });
//   }
// });


$('body').on('click', '#close-help', function(e){
e.preventDefault();
var div = $('#help');
$('#help').animate({
  top: '-500px'
});
});







  
});



/*

$(function(){

//$('.test_jquery').css('background-color', 'red');

$('div.main-menu').hover(function() {
  $('.main-link').css("color", "red");
}, function(){
  $('.main-link').css("color", "white");
});

$('div.comm-menu').hover(function() {
  $('.comm-link').css("color", "red");
}, function(){
  $('.comm-link').css("color", "white");
});

$('div.down-menu').hover(function() {
  $('.down-link').css("color", "red");
}, function(){
  $('.down-link').css("color", "white");
});

});

*/

/* https://schwarzer.tistory.com/15?category=798377 */
$(function() {
    $("#TopButton").click(function() {
        $('html').animate({scrollTop : 0}, 600);
    });
 
    $("#BottomButton").click(function() {
        $('html').animate({scrollTop : ($('#footer').offset().top)}, 600);
    });
});





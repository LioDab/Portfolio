$('#stud').click(function(){
   $('.sub_menu').slideToggle();
});

$('#exp').click(function(){
    $('.sub_menu').slideUp();
   $('.sub_menu2').slideToggle();
});

$('#ling').click(function(){
    $('.sub_menu2').slideUp();
    $('.sub_menu3').slideToggle();
});

$('#comp').click(function(){
    $('.sub_menu3').slideUp();
    $('.sub_menu4').slideToggle();
})

$('#hob').click(function(){
    $('.sub_menu4').slideUp();
    $('.sub_menu5').slideToggle();
});

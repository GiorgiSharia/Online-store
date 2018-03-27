$(document).ready(function(){
    var pool = $(".slideshow");
    var index = 0;
    slideshow();
    //responsible for picture slideshow
   function slideshow(){
        if(index > pool.length -1){
            index = 0;
        }
        $(pool[index]).css("display","block");
        if(index == 0){
            $(pool[pool.length - 1]).css("display","none");
        }else{
            $(pool[index - 1]).css("display","none");
        }
        index++;
        $(setTimeout(slideshow,2000));
    }
    $(".navButton").hover(function(){
        $(this).css("background-color", "#acb3bf");
        $(this).css("color", "black");
        $(this).css("cursor", "pointer")},
        function(){
            $(this).css("background-color", "#1f1f44");
            $(this).css("color", "white");
    });
//login box pops and background blurs
    $("#logButton").click(function(){
        $("#login").fadeIn();
        $("#login").siblings().css("opacity", "0.5");
    });
//register box pops and background blurs
    $("#regButton").click(function(){
        $("#register").fadeIn();
        $("#register").siblings().css("opacity", "0.5");
    });

    $("#closeLog").click(function(){
        $('#login').css('display','none');
        $("#login").siblings().css("opacity", "1");
    });
    $("#closeReg").click(function(){
        $('#register').css('display','none');
        $("#register").siblings().css("opacity", "1");
    });
    //When you choose sth in dropdown, name changes to chosen name
    $('#drop li').on('click', function() {
        $('#title').html($(this).find('a').html());
    });
    //double click closes the sub-list
    $("#electronics").click(function(){
        $("#electronics_sub").toggle();
    });
    $("#clothing").click(function(){
        $("#clothing_sub").toggle();
    });
    $("#house").click(function(){
        $("#house_sub").toggle();
    });
    $("#shoes").click(function(){
        $("#shoes_sub").toggle();
    });
    

});
//when clicked outside login and register boxes they fade out
$('body').mouseup(function(e){
    var subject = $("#register");
    if(e.target.id == subject.attr('id') || $(e.target).attr('class') != "navBar"){
        subject.fadeOut();
        subject.siblings().css("opacity", "1");

    }     
    subject = $("#login");
    if(e.target.id == subject.attr('id') || $(e.target).attr('class') != "navBar"){
        subject.fadeOut();
        subject.siblings().css("opacity", "1");
    }     
});
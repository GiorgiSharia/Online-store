$(document).ready(function(){
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
    $('#drop li').on('click', function() {
        $('#title').html($(this).find('a').html());
    });
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
    if(e.target.id == subject.attr('id')){
        subject.fadeOut();
        subject.siblings().css("opacity", "1");
    }     
    subject = $("#login");
    if(e.target.id == subject.attr('id')){
        subject.fadeOut();
        subject.siblings().css("opacity", "1");
    }     
});
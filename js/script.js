$(document).ready(function(){
    $(".navButton").hover(function(){
        $(this).css("background-color", "#acb3bf");
        $(this).css("color", "black");
        $(this).css("cursor", "pointer")},
        function(){
            $(this).css("background-color", "#1f1f44");
            $(this).css("color", "white");
    });

    $("#logButton").click(function(){
        $("#login").fadeIn();
        $("#toHide").css('opacity','0.5');
    });

    $("#regButton").click(function(){
        $("#register").fadeIn();
        $("#toHide").css('opacity','0.5');
    });

    $("#closeLog").click(function(){
        $('#login').css('display','none');
        $("#toHide").css('opacity','1');
    });
    $("#closeReg").click(function(){
        $('#register').css('display','none');
        $("#toHide").css('opacity','1');
    });
    $('#drop li').on('click', function() {
        $('#title').html($(this).find('a').html());
    });
    $("#electronics").click(function(){
        $("#electronics_sub").css("display", "block");
        $("#house_sub").css("display", "none");
        $("#clothing_sub").css("display", "none");
        $("#shoes_sub").css("display", "none");
    });
    $("#clothing").click(function(){
        $("#clothing_sub").css("display", "block");
        $("#electronics_sub").css("display", "none");
        $("#house_sub").css("display", "none");
        $("#shoes_sub").css("display", "none");
    });
    $("#house").click(function(){
        $("#house_sub").css("display", "block");
        $("#clothing_sub").css("display", "none");
        $("#electronics_sub").css("display", "none");
        $("#shoes_sub").css("display", "none");
    });
    $("#shoes").click(function(){
        $("#shoes_sub").css("display", "block");
        $("#clothing_sub").css("display", "none");
        $("#electronics_sub").css("display", "none");
        $("#house_sub").css("display", "none");
    });
});


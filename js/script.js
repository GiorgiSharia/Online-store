$(document).ready(function(){
    $(".navButton").hover(function(){
        $(this).css("background-color", "#acb3bf");
        $(this).css("color", "black");
        $(this).css("cursor", "pointer")},
        function(){
            $(this).css("background-color", "#1f1f44");
            $(this).css("color", "white");
    });
    $("#login").mouseup(function(e)
    {
        var subject = $("#inner-login"); 

        if(e.target.id != subject.attr('id') && !subject.has(e.target).length)
        {
            subject.fadeOut();
            document.getElementById("toHide").style.opacity="1";
        }
    });
});

$("#logButton").click(function(){
    $("#login").fadeIn();
    $("#toHide").css('opacity','0.5');
});
$("#regButton").click(function(){
    $("#login").fadeIn();
    $("#toHide").css('opacity','0.5');
});

$("#close").click(function(){
    $('#login').css('display','none');
    $("#toHide").css('opacity','1');
});


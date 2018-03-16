$(document).ready(function(){
    $(".navButton").hover(function(){
        $(this).css("background-color", "#acb3bf");
        $(this).css("color", "black");
        $(this).css("cursor", "pointer")},
        function(){
            $(this).css("background-color", "#1f1f44");
            $(this).css("color", "white");
    });
});
function register(){
    console.log("Register");
}
function logIn(){
    $("#login").fadeIn();

    //document.getElementById('login').style.display='block';
    $("#toHide").css('opacity','0.5');
}

document.getElementById("close").onclick=function(){
    document.getElementById('login').style.display='none';
    document.getElementById("toHide").style.opacity="1";
}

<?php
function trimSpecialChars($String){
    $String = trim($String);
    $String = stripslashes($String);
    $String = htmlspecialchars($String);
    return $String;
}
function checkCardNumber($String){
    if(is_numeric($String) && strlen($String) == 12){
        return true;
    }
    return false;
}
function checkCardCVV($String){
    if(is_numeric($String) && strlen($String) == 3){
        return true;
    }
    return false;
}
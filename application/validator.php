<?php
function trimSpecialChars($String){
    $String = trim($String);
    $String = stripslashes($String);
    $String = htmlspecialchars($String);
    return $String;
      
}
<?php
    session_start();
?>
<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- fa fa symobls -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/css1.css">
  <link rel="stylesheet" href="css/contact_style.css">
  <script src="js/script.js"></script>
  <title>eShop</title>
</head>

<div id="includeContent"></div>

<br>
<br>
<div class="container">
  <form name="contactform" method="post" action="send_form_email.php">

    <label for="fname">First Name</label>
    <input type="text" id="fname" name="fname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lname" placeholder="Your last name..">

    <label for="email">E-mail</label>
    <input type="text" id="email" name="email" placeholder="Your E-mail address..">

    <label for="country">Country</label>
    <select id="country" name="country">
    <option value="georgia">Georgia</option>
    <option value="estonia">Estonia</option>
    <option value="australia">Australia</option>
    <option value="canada">Canada</option>
    <option value="usa">USA</option>
    <option value="germany">Germany</option>
    <option value="finland">Finland</option>
    <option value="france">France</option>
    <option value="kualalumpur">Kuala Lumpur</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit" id="sendForm">
  </form>
</div>    
<br>
<br>
<div class="col-md-4" >

        <h3 class="fa fa-info-circle" style="font-size:48px">Contact Info: </h3>
    <div class="details">
        <h4> Contact Details:</h4>

        <ul>
           <li style="list-style:none">  <i class="material-icons">domain</i> Akadeemia tee 11,
                Tallinn, Estonia</li> 
            <li class="fa fa-envelope-o" style="font-size:20px"> info@team3.com</li>
            <li class="fa fa-mobile" style="font-size:20px">  + 372 599 22 22 22</li> 
            
        </ul>
    </div>    
</div>

</body>
</html>
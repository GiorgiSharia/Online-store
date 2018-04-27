<?php
    session_start();
?>    

<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="utf-8">
  <!--<link rel="stylesheet" href="css/styles.css?v=1.0">-->
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- fa fa symobls -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/css1.css">
<link rel="stylesheet" href="css/forms.css">
<script src="js/script.js"></script>
</head>

<body>
    <div id="toHide">
        <nav>
            <div>
                <ul id="navBar">
                    <li class="navButton"><a href="homepage.php">Home</a></li>
                    <li class="navButton"><a href="product.php">Products</a></li>
                    <li class="navButton"><a href="about.php">About</a></li>
                    <li>
                        <div class="col-lg-6"  id="search">
                            <div class="input-group well-align" >
                                <div class="input-group-btn">
                                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">
                                        <span id="title">Departments</span> 
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" id="drop">
                                        <li><a href="#">Electronics</a></li>
                                        <li><a href="#">Clothing</a></li>
                                        <li><a href="#">House</a></li>
                                        <li><a href="#">Footwear</a></li>
                                    </ul>                               
                                </div>
                                <input type="text" class="form-control" placeholder="Search for...">
                                <span class="input-group-btn">
                                    <button class="btn" type="button"><i class="glyphicon glyphicon-search"></i> Search</button>
                                </span>
                            </div>
                        </div>
                    </li>
                    <li class="navButton toRight"><a href="contact.php">Contact</a></li>
                    <li class="navButton toRight" id="user"><a href="/Online-store/logout.php"><i class="fa fa-user"></i> Sign Out</a></li>
                    <li class="navButton toRight"><a href="profile.php">My Profile</a></li>
                </ul>
            </div>
        </nav>
    </div>
<div class="row">
    <div class="col-lg-3">
        <a href=""><img src="images/offer_1.jpg"></a>
    </div>
    <div class="col-lg-6 header"> 
            <h2 id="headerForReg">Edit your profile</h2>
            <hr>
            <form class="row">
                <div class="col-lg-6">
                    <label for="firstname">Firstname:</label>
                    <input id="firstname" placeholder="Full Name" class="form-control"  type="text" name="data[firstname]"required>
                    <br/>
                    <label for="lastname">Lastname:</label>
                    <input id="lastname" placeholder="Full Name" class="form-control"  type="text" name="data[lastname]" required>
                    <br/>                   
                    <label for="regMail">Email Address:</label>
                    <input id="regMail" placeholder="E-mail" class="form-control"  type="email"  name="data[email]" required>
                    <br/>
                    <label for="address">Address:</label>
                    <input id="address" placeholder="Address" class="form-control"  type="text"  name="data[address]" required>
                    <br/>
                </div>
                <div class="col-lg-6">
                    <label for="city">City:</label>
                    <input id="city" placeholder="City" class="form-control"  type="text" name="data[city]" required>
                    <br/>
                    <label for="country">Country:</label>
                    <input id="country" placeholder="Country" class="form-control"  type="text" name="data[country]" required>
                    <br/>
                    <label for="postal">Postal Code:</label>
                    <input id="postal" placeholder="Postal Code" class="form-control"  type="text" name="data[postcode]" required>
                    <br/>
                    <label for="phone">Phone Number:</label>
                    <input id="phone" placeholder="Phone Number" class="form-control"  type="text" name="data[telephone]" required>
                    <br/>
                </div>
                <input id="reg" class="buttn" type="submit" value="REGISTER" name="data[submit]">
                <br/>
            </form>
    </div>
    <div class="col-lg-3">
        <a href=""><img src="images/offer_2.jpg"></a>
    </div>
</div>

//-----------------
    <?php
    require_once ('protected_access_check.php');
    require_once ('application/models/User.php');
    ?>
    <!DOCTYPE HTML>
    <html>
    <head>
        <title>::Profile::</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <link rel="stylesheet" href="/mywebapp/css/main.css" type="text/css">
        <link rel="shortcut icon" href="/mywebapp/images/favicon.ico?v=2" type="image/x-icon"/>
    </head>
    <body>
    <div id="wrapper">
        <div id="maincontent">

            <div id="header">
                <div id="logo" class="left">
                    <a href="/mywebapp">ICD0007</a>
                </div>
                <div class="right marT10">
                    <b>
                        <a href="/mywebapp/logout.php">Logout</a>
                    </b>
                </div>
                <br><br>
                <ul class="topmenu">
                    <li><a href="/mywebapp">Home</a></li>
                    <li><a href="/mywebapp">Student Lists</a></li>
                    <li><a href="/mywebapp">Contact Us</a></li>
                </ul>
                <br>
                <div class="banner"><p></p></div>
                <br class="clear"/>
            </div>

            <div class="content">
                <br/>
                <div class="content-area">
                    <h2>Update profile</h2>
                    <br/>
                    <?php
                    if (isset($_SESSION['error_message'])) {
                        echo '<p>' . $_SESSION['error_message'] . '</p>';
                    } elseif (isset($_SESSION['success_message'])) {
                        echo '<p>' . $_SESSION['success_message'] . '</p>';
                    }
                    ?>
                    <form id="updateForm" action="application/updateHandler.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="data[id]" value="<?= $userData['id']; ?>"/>
                        <p>
                            <label>Profile Picture: </label>
                            <input type="file" name="fileToUpload" id="fileToUpload">
                        <p>
                        <p>
                            <label>Email: </label>
                            <input type="text" name="data[email]" value="<?= $userData['email']; ?>"/>
                        <p>
                        <p>
                            <label>First Name: </label>
                            <input type="text" name="data[firstname]" value="<?= $userData['firstname']; ?>"/>
                        <p>
                        <p>
                            <label>Last Name: </label>
                            <input type="text" name="data[lastname]" value="<?= $userData['lastname']; ?>"/>
                        <p>
                        <p>
                            <label>Address: </label>
                            <textarea name="data[address]"><?= $userData['address']; ?></textarea>
                        <p>
                        <p>
                            <label>City: </label>
                            <input type="text" name="data[city]" value="<?= $userData['city']; ?>"/>
                        <p>
                        <p>
                            <label>Postcode: </label>
                            <input type="text" name="data[postcode]" value="<?= $userData['postal_code']; ?>"/>
                        <p>
                        <p>
                            <label>Telephone: </label>
                            <input type="text" name="data[telephone]" value="<?= $userData['telephone']; ?>"/>
                        <p>
                        <p>
                            <input type="submit" name="btnSubmit" value="Update profile" class="button marL10"/>
                        <p>
                    </form>
                </div>
                <div>
                    <img src="uploads/<?=$userData['profile_avatar']?>">
                </div>
            </div>

        </div><!-- maincontent -->
        <br>
        <div id="footer">
            <div class="footer">
                Copyright &copy; 2018 ICD0007. <br/>
                <a href="/mywebapp">Home</a> | <a href="about">About Us</a> | <a href="contact">Contact Us</a> <br/>
                <span class="contact">Tel: +372-1111111&nbsp;
                Email:icd007@icd0007.com</span>
            </div>
        </div><!-- footer -->

    </div><!-- wrapper -->

    </body>
    </html>
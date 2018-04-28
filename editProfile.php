<?php
    require_once ('protected_access_check.php');
    require_once ('application/models/User.php');
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
                    <li class="navButton dropdown"><a class="dropdown-toggle" href="product.php" data-toggle="dropdown">Products <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">All</a></li>
                            <li><a href="#">Phones</a></li>
                            <li><a href="#">Cameras</a></li>
                            <li><a href="#">Smart Watches</a></li>
                            <li><a href="#">Accessories</a></li>
                        </ul>
                    </li>
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
            <?php
            if (isset($_SESSION['error_message'])) {
                echo '<p>' . $_SESSION['error_message'] . '</p>';
            } elseif (isset($_SESSION['success_message'])) {
                echo '<p>' . $_SESSION['success_message'] . '</p>';
            }
            ?>
            <form class="row" id="updateForm" action="application/updateHandler.php" method="POST">
                <div class="col-lg-6">
                    <label for="firstname">Firstname:</label>
                    <input id="firstname" placeholder="Full Name" class="form-control"  type="text" name="data[firstname]" value="<?= $userData['firstname']; ?>" required>
                    <br/>
                    <label for="lastname">Lastname:</label>
                    <input id="lastname" placeholder="Full Name" class="form-control"  type="text" name="data[lastname]" value="<?= $userData['lastname']; ?>" required>
                    <br/>                   
                    <label for="regMail">Email Address:</label>
                    <input id="regMail" placeholder="E-mail" class="form-control"  type="email"  name="data[email]" value="<?= $userData['email']; ?>" required>
                    <br/>
                    <label for="address">Address:</label>
                    <input id="address" placeholder="Address" class="form-control"  type="text"  name="data[address]" value="<?= $userData['address']; ?>" required>
                    <br/>
                </div>
                <div class="col-lg-6">
                    <label for="city">City:</label>
                    <input id="city" placeholder="City" class="form-control"  type="text" name="data[city]" value="<?= $userData['city']; ?>" required>
                    <br/>
                    <label for="country">Country:</label>
                    <input id="country" placeholder="Country" class="form-control"  type="text" name="data[country]" value="<?= $userData['country']; ?>" required>
                    <br/>
                    <label for="postal">Postal Code:</label>
                    <input id="postal" placeholder="Postal Code" class="form-control"  type="text" name="data[postcode]" value="<?= $userData['postal_code']; ?>" required>
                    <br/>
                    <label for="phone">Phone Number:</label>
                    <input id="phone" placeholder="Phone Number" class="form-control"  type="text" name="data[telephone]" value="<?= $userData['telephone']; ?>" required>
                    <br/>
                </div>
                <input id="reg" class="buttn" type="submit" value="Submit Changes" name="data[submit]">
                <br/>
            </form>
    </div>
    <div class="col-lg-3">
        <a href=""><img src="images/offer_2.jpg"></a>
    </div>
</div>


<!DOCTYPE html>
<html>
<?php
include 'header.php';
?>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/signup.css">
    <link rel="stylesheet" href="css/navBar.css">
    <link rel="icon" href="images/logo.png">
    <script src="javascript/login.js" type="text/javascript"></script>
    <script src="javascript/navButtons.js" type="text/javascript"></script>
    <script src="javascript/jquery-3.2.1.min.js"></script>
    <meta charset="utf-8">
    
</head>
<!---<body onload="changeBackground()" style="background-image: url(images/background-img2.jpg)">--->
<body  style="background-image: url(images/background-img2.jpg)">
    <!-- Header-->
    
  
    <div id="page">
        <div id="container"></div>

        <div class="login">
            <form name="signupform" method="post" action="">
                <p>CREATE YOUR ACCOUNT</p>
                <hr>
                <input type="text" name="firstname" placeholder="First Name" required><br>
                <input type="text" name="lastname" placeholder="Last Name" required><br>
                <input type="text" name="email" placeholder="E-mail" required><br>
                <input type="text" name="username" placeholder="Username" required><br>
                <input type="password" name="password" placeholder="Password"
                <br><br>
                <input type="checkbox" name="terms" required><span style="font-size:15px;">By clicking Sign Up I agree to the <a href="_blank">Terms of Use.</a></span><br>
                <input id="signupButton" type="submit" value="Sign Up">
            </form>
        </div>
    </div>


    
<br>
<br>
<br>
<br>
<br>

    <!-- Footer-->
    <footer id="footer">

        <!--Back To Top-->
        <div>
            <a href="#header" alt="Back to top" title="Back to top!">
				<img id="back-to-top-img" src="images/footer/back-to-top2.png">
			</a>
        </div>
        <!--Contacts-->
        <div>
            <ul id="contacts">
                <li class="contacts">
                    <a href="mailto: arberim.sinani@studentet.uni-pr.edu">
						<img height="40px" src="images/footer/email-logo.png">
					</a>
                </li>
                <li class="contacts">
                    <a href="https://web.facebook.com/?_rdc=1&_rdr" target="_blank">
						<img height="40px" src="images/footer/facebook.png">
					</a>
                </li>
                <li class="contacts">
                    <a href="https://www.instagram.com/" target="_blank">
						<img height="40px" src="images/footer/instagram.png">
					</a>
                </li>
                <li class="contacts">
                    <a href="https://www.twitter.com/" target="_blank">
						<img height="40px" src="images/footer/twitter.png">
					</a>
                </li>
            </ul>
        </div>
        <p>&copy; <em>Prishtina Pet Shelter ALL RIGHTS RESERVED</em></p>
    </footer>

</body>

</html>

<?php
include 'header.php';
?>
<!DOCTYPE html>
<html manifest="petshelter.appcache">

<head>
	<title>PetShelterPrishtina</title>
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/navBar.css">
    <link rel="stylesheet" href="css/adoptions.css">
    <link rel="icon" href="images/logo.png">
	<script src="javascript/jquery-3.2.1.min.js"></script>
	<script src="javascript/navButtons.js" type="text/javascript"></script>
	<meta charset="utf-8">

</head>

<body style="background-image: url(images/background-img2.jpg)">
	<!-- Header-->
	
    <!-- IMAGE MAP -->
    <img width="100%" id="img-map" src="images/cat-dog.png" alt="A cat and a dog" usemap="#img-map">
    <map name="img-map">
		<area shape="circle" coords="1131,237,250" href="#dogs" alt="Dog" title="Click me!" onmouseover="woof.play()">
		<area shape="rect" coords="3,207,361,574" href="#cats" alt="Cat" title="Click me!" onmouseover="meow.play()">
	</map>
    <br>
    <div id="border-img">
        <div class="adoptions-title">Available Animals</div>
    </div>
    <br/>

    <!-- TABELA PER FOTOGRAFITE E QENVE -->
    <table align="center" class="pet-table">
        <a name="dogs">
            <caption class="pet-title">Dogs</caption>
        </a>
        <tr>

            <td>
                <div class="td-container">

                </div>
                <img class="image" alt="Dog" src="images/table-pet/dog1.jpg">
                <h3 class="pet-name">Loki</h3>
                <ul class="dog-data">
                    <li>Male</li>
                    <li>1 year 3 months</li>
                    <li>Nuk kafshon</li>
                    <li class="adopt-me-button"><a href="apply.html"><b>Adopt Me!</b></a></li>
                </ul>


            </td>

            <td>
                <div class="td-container">

                </div>
                <img class="image" alt="Dog" src="images/table-pet/dog2.jpg">
                <h3 class="pet-name">Lulu</h3>
                <ul class="dog-data">
                    <li>Female</li>
                    <li>8 months</li>
                    <li>Up-to-date with routine shots</li>
                    <li class="adopt-me-button"><a href="apply.html" onclick="clickCounter()"><b>Adopt Me!</b></a></li>
                </ul>
            </td>

            <td>
                <div class="td-container">

                </div>
                <img class="image" alt="Dog" src="images/table-pet/dog3.jpg">
                <h3 class="pet-name">Joe</h3>
                <ul class="dog-data">
                    <li>Male</li>
                    <li>2 years</li>
                    <li>Up-to-date with routine shots</li>
                    <li class="adopt-me-button"><a href="apply.html"><b>Adopt Me!</b></a></li>

                </ul>
            </td>
        </tr>
        <!-- RRESHTI I DYTE -->
        <tr>

            <td>
                <div class="td-container">
                    <!-- DIV I ZBRAZET,PERMBANE FOTOGRAFINE E KAFSHES DHE TE DHENAT -->
                </div>
                <img class="image" alt="Dog" src="images/table-pet/dog4.jpg">
                <h3 class="pet-name">Milo</h3>
                <ul class="dog-data">
                    <li>Male</li>
                    <li>4 months</li>
                    <li>Up-to-date with routine shots</li>
                    <li class="adopt-me-button"><a href="apply.html"><b>Adopt Me!</b></a></li>
                </ul>
            </td>

            <td>
                <div class="td-container">

                </div>
                <img class="image" alt="Dog" src="images/table-pet/dog5.jpg">
                <h3 class="pet-name">Thor</h3>
                <ul class="dog-data">
                    <li>Male</li>
                    <li>2 months</li>
                    <li>Up-to-date with routine shots</li>
                    <li class="adopt-me-button"><a href="apply.html"><b>Adopt Me!</b></a></li>
                </ul>
            </td>

            <td>
                <div class="td-container">

                </div>
                <img class="image" alt="Dog" src="images/table-pet/dog6.jpg">
                <h3 class="pet-name">Rosie</h3>
                <ul class="dog-data">
                    <li>Female</li>
                    <li>1 year 2 months</li>
                    <li>Up-to-date with routine shots</li>
                    <li class="adopt-me-button"><a href="apply.html"><b>Adopt Me!</b></a></li>
                </ul>
            </td>
        </tr>
    </table>

    <br>
    <br>



    <!-- TABLEA PER FOTOGRAFITE E MACEVE -->
    <table align="center" class="pet-table">
        <a name="cats">
            <caption class="pet-title">Cats</caption>
        </a>
        <tr>

            <td>
                <div class="td-container">

                </div>
                <img class="image" alt="Cat" src="images/table-pet/cat1.jpg">
                <h3 class="pet-name">Ginger</h3>
                <ul class="cat-data">
                    <li>Female</li>
                    <li>1 month 3 weeks</li>
                    <li>Up-to-date with routine shots</li>
                    <li class="adopt-me-button"><a href="apply.html"><b>Adopt Me!</b></a></li>
                </ul>
            </td>

            <td>
                <div class="td-container">

                </div>
                <img class="image" alt="Cat" src="images/table-pet/cat2.jpg">
                <h3 class="pet-name">Oscar</h3>
                <ul class="cat-data">
                    <li>Male</li>
                    <li>1 year</li>
                    <li>Up-to-date with routine shots</li>
                    <li class="adopt-me-button"><a href="apply.html"><b>Adopt Me!</b></a></li>
                </ul>
            </td>

            <td>
                <div class="td-container">

                </div>
                <img class="image" alt="Cat" src="images/table-pet/cat3.jpg">
                <h3 class="pet-name">Bella</h3>
                <ul class="cat-data">
                    <li>Female</li>
                    <li>8 months</li>
                    <li>Up-to-date with routine shots</li>
                    <li class="adopt-me-button"><a href="apply.html"><b>Adopt Me!</b></a></li>
                </ul>
            </td>
        </tr>
        <!-- RRESHTI I DYTE -->
        <tr>

            <td>
                <div class="td-container">

                </div>
                <img class="image" alt="Cat" src="images/table-pet/cat4.jpg">
                <h3 class="pet-name">Lola and Lily</h3>
                <ul class="cat-data">
                    <li>Females</li>
                    <li>1 month 3 weeks</li>
                    <li>Up-to-date with routine shots</li>
                    <li class="adopt-me-button"><a href="apply.html"><b>Adopt Me!</b></a></li>
                </ul>
            </td>

            <td>
                <div class="td-container">

                </div>
                <img class="image" alt="Cat" src="images/table-pet/cat5.jpg">
                <h3 class="pet-name">Oreo</h3>
                <ul class="cat-data">
                    <li>Female</li>
                    <li>2 years 2 months</li>
                    <li>Up-to-date with routine shots</li>
                    <li class="adopt-me-button"><a href="apply.html"><b>Adopt Me!</b></a></li>
                </ul>
            </td>

            <td>
                <div class="td-container">

                </div>
                <img class="image" alt="Cat" src="images/table-pet/cat6.jpg">
                <h3 class="pet-name">Zazu</h3>
                <ul class="cat-data">
                    <li>Male</li>
                    <li>3 years 4 months</li>
                    <li>Up-to-date with routine shots</li>
                    <li class="adopt-me-button"><a href="apply.html"><b>Adopt Me!</b></a></li>
                </ul>
            </td>
        </tr>
    </table>
    <br/>

    <!-- div per hide() dhe show() -->
    <div id="fundi">
        <!-- MULTIPLE BACKGROUNDS AND BOX-SHADOW -->
        <div id="multiple-background-images">
            <h2 style="text-shadow:5px 5px 10px #037879;">Get Involved with Prishtina Pet Shelter</h2>
            <p id="pdiv">Prishtina Pet Shelter provides assistance to hundreds of animals each year, we are able to do this only with the help of our supporters. There are many ways to get involved from becoming a foster family to volunteering at the shelter or by simply becoming an Prishtina Pet Shelter member you can help us make a difference “Until Every Pet Has A Home.” asdhaksdhkashhashkdsThankYouThisIsAVeryLongWordToTestTheWordWrapHeHe
            </p>

        </div>




        <br/>
        <br/>
        <!-- AUDIO -->

        <div id="audio" style="text-align: center">
            <label>Audio 1:</label><br>
            <audio controls>
				<source src="audio/audio1.mp3">
			</audio>
            <br><br>
            <label>Audio 2:</label><br>
            <audio controls>
				<source src="audio/audio2.mp3">
			</audio>
        </div>
    </div>
    <br><br>
    <div id="butonat">
        <button id="show">Show more</button>
        <button id="hide">Show less</button>
    </div>

    <br />
    <br />
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>



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

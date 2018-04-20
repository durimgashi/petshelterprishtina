<?php
include 'header.php';
?>
<!DOCTYPE html>
<html manifest="petshelter.appcache">

<head>
	<title>PetShelterPrishtina</title>
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/navBar.css">
    <link rel="stylesheet" href="css/aboutus.css">
    <link rel="icon" href="images/logo.png">
	<script src="javascript/jquery-3.2.1.min.js"></script>
	<script src="javascript/navButtons.js" type="text/javascript"></script>
	<meta charset="utf-8">

</head>

<body style="background-image: url(images/background-img2.jpg)">
	<!-- Header-->
	
     <script>
        $(document).ready(function() {
            $("#arberimi").click(function() {
                $("#info-arberimi").slideToggle("slow");
            });
            $("#era").click(function() {
                $("#info-era").slideToggle("slow");
            });
            $("#lina").click(function() {
                $("#info-lina").slideToggle("slow");
            });
            $("#durimi").click(function() {
                $("#info-durimi").slideToggle("slow");
            });

        });

    </script>
    <!-- Banner-->
    <div id="gradient"></div>
    <div id="banner"></div>

    <!-- Article-->
    <div id="article-container"></div>
    <div align="center">

        <div class="articles">
            <h1 class="titles" style="text-align: center"> How we Work</h1>
            <article>
                In Kosovo thousand of lost, stray, and abandoned animals enter shelters every year. With so many animals available, pet adoption is quickly becoming the most popular method of finding a new pet.
            </article>

            <article>
                Partnered with over
                <a id="1800"></a> animal welfare organizations across the Europe and U.S, PetShelterPrishtina.com is the first adoptable pet search site to exclusively offer real-time updates of adoptable pets in shelters. So whether you’re looking to adopt a pet in Prishtina or Prizren, you can be sure to find a new pet near you. There are many reasons for a pet to become available for adoption, usually through no fault of their own. Many owners will give up their pets after realizing they can’t afford to keep them, they no longer want them, or sometimes just leave them behind after moving out of town. Although people often think that pets available in shelters are all mixed breeds, 25-30% of dogs up for adoption are actually purebred – and so are the cats! When you adopt a cat or dog from any PetShelterPrishtina shelter partner, your pet may be eligible for the 24PetWatch®
                <mark>30-Day Trial of Insurance</mark> for
                <a id="30"></a> days of coverage for common accidents and named peril illnesses that occur post adoption.</article>
            <!--- Funksion per llogaritje te ndryshme per artikullin lart -->


        </div>

        <!-- Staff-->
        <div>
            <h1 class="titles" style="text-align: center;"> Our Staff</h1>
            <table>
                <tr>

                    <td>
                        <img class="img-circle1" id="arberimi" src="images/staff/abedini.png">
                        <h3>Arb&euml;rim Sinani</h3>
                        <h4>Drejtor</h4>
                    </td>
                    <td>
                        <img class="img-circle1" id="era" src="images/staff/era.jpg">
                        <h3>Era Mahmutxhiku</h3>
                        <h4>Drejtoresh&euml;</h4>
                    </td>
                    <td>
                        <img class="img-circle2" id="lina" src="images/staff/lina.png">
                        <h3>Lina Mahmuti</h3>
                        <h4>Drejtoresh&euml;</h4>
                    </td>
                    <td>
                        <img class="img-circle2" id="durimi" src="images/staff/durimii.jpg">
                        <h3>Durim Gashi</h3>
                        <h4>Drejtor</h4>
                    </td>
                </tr>
            </table>
        </div>
    </div>


    <!-- slide() -->
    <div id="info-arberimi" class="ceo-info">
        <article>
            <h2><span id="member1-first"></span><span id="member1-last"></span></h2>
            <h4>Front End Developer,Volunteer at Prishtina Pet Shelter</h4>
            <section>
                <p class="short-bio">Arb&euml;rim Sinani Trent has been the Board of Directors Treasurer since June of 2016. He is also the chairman of the Financial Committee. He has over 13 years of accounting and auditing experience. He adopted Baxter from A.D.O.P.T. in 2012.
                </p>
            </section>
            <section>
                <h3>Contact</h3>
                <p>Phone:(+377) 45 714 414 </p>
                <p>Email: <a href="mailto:arberim.sinani@gmail.com">arberim.sinani@gmail.com</a></p>
            </section>
        </article>
    </div>

    <div id="info-era" class="ceo-info">
        <article>
            <h2><span id="member2-first"></span><span id="member2-last"></span></h2>
            <h4>Fron End Developer,Volunteer at Prishtina Pet Shelter</h4>
            <section>
                <p class="short-bio">Arb&euml;rim Sinani Trent has been the Board of Directors Treasurer since June of 2016. He is also the chairman of the Financial Committee. He has over 13 years of accounting and auditing experience. He adopted Baxter from A.D.O.P.T. in 2012.
                </p>
            </section>
            <section>
                <h3>Contact</h3>
                <p>Phone:(+377) 44 314 159 </p>
                <p>Email: <a href="mailto:era-mahmutxhiku@gmail.com">era-mahmutxhiku@gmail.com</a></p>
            </section>
        </article>
    </div>

    <div id="info-lina" class="ceo-info">
        <article>
            <h2><span id="member3-first"></span><span id="member3-last"></span></h2>
            <h4>Fron End Developer,Volunteer at Prishtina Pet Shelter</h4>
            <section>
                <p class="short-bio">Lina Mahmuti has been the Prishtina Pet Shelter Executive Director since June 2013. Before joining the Foundation, she served as the Charlottesville-Albemarle SPCA Executive Director, where she transformed the open-admission SPCA into an award-winning, nationally recognized lifesaving model. Prior to that, Susanne held several positions at Capital One Financial Corporation and was an attorney with Gibson, Dunn & Crutcher and Brown & Wood. Lina shares her home her with five dogs and a variety of different foster pets.
                </p>
            </section>
            <section>
                <h3>Contact</h3>
                <p>Phone:(+377) 44 300 201 </p>
                <p>Email: <a href="mailto:linaa-mahmuti@gmail.com">linaa-mahmuti@gmail.com</a></p>
            </section>
        </article>
    </div>

    <div id="info-durimi" class="ceo-info">
        <article>
            <h2><span id="member4-first"></span><span id="member4-last"></span></h2>
            <h4>Fron End Developer,Volunteer at Prishtina Pet Shelter</h4>
            <section>
                <p class="short-bio">Arb&euml;rim Sinani Trent has been the Board of Directors Treasurer since June of 2016. He is also the chairman of the Financial Committee. He has over 13 years of accounting and auditing experience. He adopted Baxter from A.D.O.P.T. in 2012.
                </p>
            </section>
            <section>
                <h3>Contact</h3>
                <p>Phone:(+377) 44 314 159 </p>
                <p>Email: <a href="mailto:durim-gashi@gmail.com">durim-gashi@gmail.com</a></p>
            </section>
        </article>
    </div>



    <br>
    <br>
    <br>


    <div class="map-container">

        <h1 class="titles" style="text-align: center;color: white"> Our Location</h1>

        <p class="p">PetShelterPrishtina is located at st.Fazli Grajqevci Number-
            <a id="17"></a> Block-3, Prishtin&euml;/Kosova.
            <a style="color: wheat" href="https://www.google.com/maps/dir/Current+Location/Dit'+e+Nat'/@42.663978,21.1597912,17z/data=!3m1!4b1!4m5!3m4!1s0x13549ee1b24d2ba5:0xf5e27cd8eafa196c!8m2!3d42.663978!4d21.1619852" target="_blank">Get Directions</a> </p>
        <div align="center">
            <figure>
                <a href="images/location.PNG"> <img id="map" src="images/location.PNG" alt="location:st.Fazli Grajqevci Number-17 Block-3, Prishtin&euml;/Kosova"></a>
                <figcaption style="color: white;"><address>Address: Fazli Grajqevci Number-17 Block-3, Prishtin&euml;/Kosova</address></figcaption>
            </figure>
            <p id="date"></p>
            <button onclick="someFunctions()">Get your location</button>
            <p id="date"></p>
            <p id="location" style="color: aliceblue"></p>
            <p id="clickCounter" style="color: aliceblue"></p>


        </div>
        <hr style=" height:4px; border:none; background-color:#fff; width:60%; text-align:center; margin: 0 auto;">

        <h1 class="titles" style="text-align: center;color: white; "> Awards</h1>



        <div id="awards">



            <div id="dragContainer1" ondrop="drop(event)" ondragover="allowDrop(event)">
                <img src="images/Approved-Shelter_Blue-Badge.png" draggable="true" ondragstart="drag(event)" id="drag1" width="200" height="200">
            </div>

            <div id="dragContainer2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
        </div>
    </div>

    <!--Funksione per llogaritje ne artikull-->
    <script>
        function _1800(x, y) {
            return x * y;
        }
        document.getElementById("1800").innerHTML = _1800(3, 600);

        function _30() {
            var x = 10,
                y = 20;
            var z = x + y;
            return z;
        }
        document.getElementById("30").innerHTML = _30();

    </script>


    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>


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
    <!-- Perdorimi i prototypes -->
    <script>
        function Staff(first, last) {
            this.firstName = first;
            this.lastName = last;
        }
        var member1 = new Staff("Arb&euml;rim ", "Sinani");
        var member2 = new Staff("Era ", "Mahmutxhiku");
        var member3 = new Staff("Lina ", "Mahmuti");
        var member4 = new Staff("Durim ", "Gashi");
        document.getElementById('member1-first').innerHTML = member1.firstName;
        document.getElementById('member1-last').innerHTML = member1.lastName;
        document.getElementById('member2-first').innerHTML = member2.firstName;
        document.getElementById('member2-last').innerHTML = member2.lastName;
        document.getElementById('member3-first').innerHTML = member3.firstName;
        document.getElementById('member3-last').innerHTML = member3.lastName;
        document.getElementById('member4-first').innerHTML = member4.firstName;
        document.getElementById('member4-last').innerHTML = member4.lastName;

    </script>
</body>

</html>

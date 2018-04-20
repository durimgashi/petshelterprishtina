<?php
include 'header.php';
?>
<!DOCTYPE html>
<html>

<head>
    <title>Game</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/navBar.css">
    <link rel="stylesheet" href="css/game.css">
    <link rel="icon" href="images/logo.png">
    <script src="javascript/navButtons.js" type="text/javascript"></script>
    <script src="javascript/jquery-3.2.1.min.js"></script>
    <meta charset="utf-8">
  
    


</head>

<body style="background-image: url(images/background-img2.jpg)">
    <!-- Header-->
    
    
    <script>
        //*prevent page from scroling when mouse over iframe:
        $(document).ready(function() {
            $("#gameiFrame").mouseenter(function() {
                $("body").css("overflow-y", "hidden");
            });
            $("#gameiFrame").mouseleave(function() {
                $("body").css("overflow-y", "auto");
            });
        });

    </script>
    
    <div id="container">
        <!-- Game border -->
        <svg id="game-frame" width="660" height="400">
			<rect x="50" y="20" rx="20" ry="20" width="505" height="295" style="fill:transparent;stroke:black;stroke-width:27;opacity:0.5" /> Sorry, your browser does not support inline SVG.
		</svg>
        <!-- Game iFrame -->
        <div id="gameContainer">
            <h3 style="text-align: center">Take Pluto to his home</h3>
            <iframe frameborder="0" id="gameiFrame" src="game-page.html"></iframe>
            <p style="text-align: center">Use UP,DOWN,LEFT,RGHT keys to move Pluto.</p>
        </div>
    </div>




    <!-- Web Workes -->
    <div style="text-align: center;">
        <h3>Lets see how fast can you take Pluto to his home: </h3>
        <p>Seconds: <output id="result"></output></p>
        <button class="button" onclick="startWorker()">Start Timer</button>
        <button class="button" onclick="stopWorker()">Stop Timer</button>

        <script>
            var w;

            function startWorker() {
                if (typeof(Worker) !== "undefined") {
                    if (typeof(w) == "undefined") {
                        w = new Worker("javascript/web-workers.js");
                    }
                    w.onmessage = function(event) {
                        document.getElementById("result").innerHTML = event.data;
                    };
                } else {
                    document.getElementById("result").innerHTML = "Sorry, your browser does not support Web Workers...";
                }
            }

            function stopWorker() {
                w.terminate();
                w = undefined;
            }

        </script>

    </div>

    <!-- Finger game -->
    <div id="saGishta">
        <h3>Guess what number is on my mind? (from 1 to 5)</h3>
        <input id="myNumber" />
        <button class="button" id="rez">Check</button>
        <p id="rezNumb"></p>

        <script type="text/javascript">
            document.getElementById("rez").onclick = function() {
                x = Math.random();
                x = 6 * x;
                x = Math.floor(x);
                myNumber = document.getElementById('myNumber').value;
                if (isNaN(myNumber) || myNumber < 0 || myNumber > 5 || myNumber == "") {
                    document.getElementById('rezNumb').innerHTML = "Wrong value!!!"
                } else {
                    if (document.getElementById("myNumber").value == x) {
                        document.getElementById("rezNumb").innerHTML = "Correct!!!";
                    } else {
                        document.getElementById("rezNumb").innerHTML = "Try again. Loser!! " + x;
                    }
                }
            }

        </script>


    </div>
    <!----Output---->
    <div id="output-container">
        <ul>
            <tr>
                <td>
                    <div id="outputi">
                        <form id="myForm">


                            <label>Rate our game: </label> &nbsp; 1
                            <input type="range" min="1" max="10" step="1" value="3" onchange="myOutput.value=this.value" />10
                            <br/>
                            <label>You rated: </label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            <output name="myOutput">3</output>
                            <br>

                        </form>
                    </div>
                </td>
                <td>
                    <div id="rateButton">

                        <button class="button" onclick="clickCounter()">Rate game</button>
                    </div>
                </td>
            </tr>
            <tr>

                <td>
                    <p style="text-align: center" id="rating"></p>
                </td>
            </tr>
        </ul>
    </div>

    <!--Footer-->
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
    <script>
        // Local Storage
        function clickCounter() {
            if (typeof(Storage) !== "undefined") {
                if (localStorage.clickcount) {
                    localStorage.clickcount = Number(localStorage.clickcount) + 1;
                } else {
                    localStorage.clickcount = 1;
                }
                document.getElementById("rating").innerHTML = "You have rated our page " + localStorage.clickcount + " time(s).";
            } else {
                document.getElementById("rating").innerHTML = "Sorry, your browser does not support web storage...";
            }
        }

    </script>
</body>

</html>

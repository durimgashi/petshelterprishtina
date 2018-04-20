 /* Drag and drop*/
 function allowDrop(ev) {
     ev.preventDefault();
 }

 function drag(ev) {
     ev.dataTransfer.setData("text", ev.target.id);
 }

 function drop(ev) {
     ev.preventDefault();
     var data = ev.dataTransfer.getData("text");
     ev.target.appendChild(document.getElementById(data));
 }



 // Funksioni per geolocation 

 var x = document.getElementById("location");

 function getLocation() {
     if (navigator.geolocation) {
         navigator.geolocation.getCurrentPosition(showPosition);
     } else {
         x.innerHTML = "Geolocation is not supported by this browser.";
     }
 }

 function showPosition(position) {
     x.innerHTML = "Latitude: " + position.coords.latitude +
         "<br>Longitude: " + position.coords.longitude;
 }

 // Session Storage 

 function clickCounter() {
     if (typeof (Storage) !== "undefined") {
         if (sessionStorage.clickcount) {
             sessionStorage.clickcount = Number(sessionStorage.clickcount) + 1;
         } else {
             sessionStorage.clickcount = 1;
         }
         document.getElementById("clickCounter").innerHTML = "You have been located " + sessionStorage.clickcount + " time(s).";
     } else {
         document.getElementById("clickCounter").innerHTML = "Sorry, your browser does not support web storage...";
     }
 }


 // Dy funksione brenda nje funksioni

 function someFunctions() {
     clickCounter();
     getLocation();
 }

 function _17(x, y) {
     return x - y;
 }
 document.getElementById("17").innerHTML = _17(30, 13);

 document.getElementById("date").innerHTML = Date();

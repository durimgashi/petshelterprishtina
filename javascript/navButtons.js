//Function to show hidden navigation buttons
function showNavButtons() {
    var x = document.getElementById("myNavButtons");
    if (x.className === "navButtons") {
        x.className += " responsive";
    } else {
        x.className = "navButtons";
    }
}
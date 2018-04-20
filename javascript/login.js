
//Background depending on time of the day
var currentTime = new Date().getHours();
function changeBackground() {
	if (currentTime > 20 || currentTime < 06) {
		document.body.style.backgroundImage = "url('images/background-img1.jpg')";
		document.body.style.color = "white";
	}
}
// Trajtimi i erroreve me JavaScript
function inputError() {
	var x = document.getElementById("hoursOfWork").value;
	try {
		if (isNaN(x)) throw "a";
		x = Number(x);
		if (x < 0) throw 0;
		if (x > 24) throw 24;
	} catch (error) {
		if (isNaN(error)) {
			alert("The value you entered is not a number");
		} else
			document.getElementById("hoursOfWork").value = error;
	}
}	
// validimi i formave
function validateForm() {
	var x = document.forms[0];
	var i;
	for (i = 0; i < x.length; i++) {
		var y=x.elements[i].value;
		if (y == "") {
			alert(x.elements[i].name+" must be filled out");
			return false;
		}
	}
}
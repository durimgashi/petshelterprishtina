//Perdorimi i array ne h1 element

var Array = ["Do", "not", "allow", "your", "pet", "to", "run", "unsupervised"];
document.getElementById("petsupervision").innerHTML = Array.join(" ");

//Perdorimi i switch

var text;
switch (1) {
case 0:
	text = "Petting your understanding's needs";
	break;
case 1:
	text = "Understanding your pet's needs";
	break;
case 2:
	text = "Needing your understanding's pet";
	break;

}
document.getElementById("petneeds").innerHTML = text;

//Perdorimi i unazes for
var cleanPet = ["Keep", "your", "pets", "clean"];
var i;
for (i = 0, i < cleanPet.length; i++;) {
	cleanPet[i];
	document.getElementById("petssword").innerHTML = cleanPet[2];
}

document.getElementById("pethygiene").innerHTML = cleanPet.join(" ");

//Perdorimi i unazes while

var vetArray = ["Take", "your", "pet", "to", "the", "veterinarian", "regulary"];
var i = 0;
while (vetArray[i]) {
	vetArray[i];
	i++;
}
document.getElementById("pethealth").innerHTML = vetArray.join(" ");
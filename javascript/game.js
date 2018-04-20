var myPluto;

function startGame() {
	myPluto = new component(40, 40, "images/pluto.png", 10, 120, "image");
	myObstacle1 = new component(7, 70, "black", 300, 100);
	myObstacle2 = new component(70, 7, "black", 300, 100);
	myObstacle3 = new component(137, 7, "black", 170, 170);
	myObstacle4 = new component(70, 7, "black", 170, 100);
	myObstacle5 = new component(7, 70, "black", 237, 37);
	myObstacle6 = new component(200, 7, "black", 241, 37);
	myObstacle7 = new component(7, 140, "black", 435, 37);
	myObstacle8 = new component(7, 80, "black", 370, 100);
	myObstacle9 = new component(7, 100, "black", 170, 0);
	myObstacle10 = new component(7, 120, "black", 170, 170);

	myKolib = new component(60, 60, "images/koliba.png", 190, 200, "image");
	myGameArea.start();
}

var myGameArea = {
	canvas: document.createElement("canvas"),
	start: function () {
		this.canvas.width = 480;
		this.canvas.height = 270;
		this.context = this.canvas.getContext("2d");
		document.body.insertBefore(this.canvas, document.body.childNodes[0]);
		this.frameNo = 0;
		this.interval = setInterval(updateGameArea, 20);

		//keyboard controller

		window.addEventListener('keydown', function (e) {
			myGameArea.keys = (myGameArea.keys || []);
			myGameArea.keys[e.keyCode] = true;
		})
		window.addEventListener('keyup', function (e) {
				myGameArea.keys[e.keyCode] = false;
			})
			//-----------------------------


	},
	clear: function () {
		this.context.clearRect(0, 0, this.canvas.width, this.canvas.height);
	},
	stop: function () {
		clearInterval(this.interval);
	}
}

function component(width, height, color, x, y, type) {
	this.type = type;
	if (type == "image") {
		this.image = new Image();
		this.image.src = color;
	}
	this.width = width;
	this.height = height;
	this.speedX = 0;
	this.speedY = 0;
	this.x = x;
	this.y = y;
	this.update = function () {
		ctx = myGameArea.context;
		if (type == "image") {
			ctx.drawImage(this.image,
				this.x,
				this.y,
				this.width, this.height);
		} else {
			ctx.fillStyle = color;
			ctx.fillRect(this.x, this.y, this.width, this.height);
		}
	}
	this.newPos = function () {
		this.x += this.speedX;
		this.y += this.speedY;
	}
	this.crashWith = function (otherobj) {
		var myleft = this.x;
		var myright = this.x + (this.width);
		var mytop = this.y;
		var mybottom = this.y + (this.height);
		var otherleft = otherobj.x;
		var otherright = otherobj.x + (otherobj.width);
		var othertop = otherobj.y;
		var otherbottom = otherobj.y + (otherobj.height);
		var crash = true;
		if ((mybottom < othertop) ||
			(mytop > otherbottom) ||
			(myright < otherleft) ||
			(myleft > otherright)) {
			crash = false;
		}
		return crash;
	}
}

function updateGameArea() {
	myGameArea.clear();

	myPluto.speedX = 0;
	myPluto.speedY = 0;
	if (myGameArea.keys && myGameArea.keys[37]) {
		myPluto.speedX = -1;
	}
	if (myGameArea.keys && myGameArea.keys[39]) {
		myPluto.speedX = 1;
	}
	if (myGameArea.keys && myGameArea.keys[38]) {
		myPluto.speedY = -1;
	}
	if (myGameArea.keys && myGameArea.keys[40]) {
		myPluto.speedY = 1;
	}
	if (myPluto.crashWith(myKolib)) {
		myGameArea.stop();
		alert('Well done!!');
		startGame();
	} else {
		myPluto.newPos();
		myPluto.update();
		myObstacle1.update();
		myObstacle2.update();
		myObstacle3.update();
		myObstacle4.update();
		myObstacle5.update();
		myObstacle6.update();
		myObstacle7.update();
		myObstacle8.update();
		myObstacle9.update();
		myObstacle10.update();
		myKolib.update();
	}
}

function moveup() {
	myPluto.speedY = -1;

}

function movedown() {
	myPluto.speedY = 1;

}

function moveleft() {
	myPluto.speedX = -1;

}

function moveright() {
	myPluto.speedX = 1;

}

function clearmove() {
	myPluto.speedX = 0;
	myPluto.speedY = 0;
}
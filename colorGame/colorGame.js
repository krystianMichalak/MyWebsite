var numSquares = 6;
var colors = [];
var pickedColor;


var	colorDisplay = document.getElementById("colorDisplay");
var messageDisplay = document.querySelector("#message");
var	squares = document.querySelectorAll(".square");
var h1 = document.querySelector("h1");
var resetButton = document.getElementById("reset");
var modeButtons = document.querySelectorAll(".mode");

init();

function init() {
	setupModBtnLis();
	setupSqrsBtnLis();
	reset();
}

function setupModBtnLis() {
	for (var i = 0; i < modeButtons.length; i++) {
		modeButtons[i].addEventListener("click", function() {
			for (var j = 0; j < modeButtons.length; j++) {
				modeButtons[j].classList.remove("selected");
			}
			this.classList.add("selected");
			this.textContent === "Easy" ? numSquares = 3: numSquares = 6;
			reset();
		})
	}
}

function setupSqrsBtnLis() {
	for (var i = 0; i < squares.length; i++) {
		squares[i].addEventListener("click", function(){
			var clickedColor = this.style.backgroundColor;
			if (clickedColor === pickedColor) {
				messageDisplay.textContent = "Correct!";
				changeColors(clickedColor);
				h1.style.backgroundColor = clickedColor;
				resetButton.textContent = "Play Again?";
			}
			else {
				this.style.backgroundColor = "#232323";
				messageDisplay.textContent = "Try Again?";
			}
		})
	}
}

function reset() {
	colors = generateRandomColors(numSquares);
	pickedColor = pickColor(numSquares);
	messageDisplay.textContent = "";
	resetButton.textContent = "New Colors";
	colorDisplay.textContent = pickedColor;
	for (var i = 0; i < squares.length; i++) {
		squares[i].style.backgroundColor = colors[i];
	}
	h1.style.backgroundColor = "steelblue";
	for (var i = 0; i < squares.length; i++) {
		if (colors[i]) {
			squares[i].style.display = "block";
			squares[i].style.backgroundColor = colors[i];
		}
		else {
			squares[i].style.display = "none";
		}
	}
}

resetButton.addEventListener("click", function() {
	reset();
});

function changeColors(color) {
	for (var i = 0; i < squares.length; i++) {
		squares[i].style.backgroundColor = color;
	}
}

function pickColor(number) {
	var random = Math.floor(Math.random() * number);
	return colors[random];
}
function randomColor() {
	var r = Math.floor(Math.random() * 256);
	var g = Math.floor(Math.random() * 256);
	var b = Math.floor(Math.random() * 256);
	return "rgb(" + r + ", " + g + ", " + b + ")";
}

function generateRandomColors(number) {
	var arr = [];
	for (var i = 0; i < number; i++) {
		arr.push(randomColor());
	}
	return arr;
}
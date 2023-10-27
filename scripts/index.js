/*=======================================
This Is The Main JS File With Functions
That Are Used On Every Page. More JS
Files Can Be Made For Specific Use Cases
=======================================*/

/* THIS IS JUST TO FAKE A LOGIN SYSTEM DONT 
ENTER IMPORTANT STUFF IM NOT HASHING ANYTHING
AND THERE IS NO BACKEND */
let uernames = [], passwords = [];

document.addEventListener("DOMContentLoaded", (event) => {
	setInterval(() => {
		document.title = "「 " + glitch("ESOTERIC") + " 」";
		if (document.getElementsByClassName("brandname")[0] !== undefined) {
			document.getElementsByClassName("brandname")[0].innerText = glitch("ESOTERIC");
		}
		if (document.getElementsByClassName("pageTitle")[0] !== undefined) {
			document.getElementsByClassName("pageTitle")[0].innerText = "「 " + glitch("DROPS") + " 」";
		}
	}, 80);
});

function glitch(input) {
	const chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'
	let flipped = chars.charAt(Math.floor(Math.random() * chars.length));
	let idx = Math.floor(Math.random() * input.length);

	return Math.random() < (20 / 100) ? Array.from(input).toSpliced(idx, 1, flipped).join("") : input;
}

function register() { 
	var input = document.getElementById("autonumero");
	sessionStorage.setItem("autonumero", input.value);
	return true;
  } 

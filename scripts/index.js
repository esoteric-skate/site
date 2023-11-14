/*=======================================
This Is The Main JS File With Functions
That Are Used On Every Page. More JS
Files Can Be Made For Specific Use Cases
=======================================*/

document.addEventListener("DOMContentLoaded", (event) => {

	// gets date and sets it in the footer
	var cDate = new Date();
	var cYear = cDate.getFullYear();
	document.querySelector("#cYear").innerHTML = cYear;

	setInterval(() => {
		document.title = "「 " + glitch("ESOTERIC") + " 」";
		if (document.getElementsByClassName("brandname")[0] !== undefined) {
			document.getElementsByClassName("brandname")[0].innerText = glitch("ESOTERIC");
		}
		if (document.getElementsByClassName("pageTitle")[0] !== undefined) {
			document.getElementsByClassName("pageTitle")[0].innerText = "「 " + glitch("DROPS") + " 」";
		}
	}, 80);

	// toggles the cart open or closed if it gets click on or clicked off of
	let cartOpen = false;
	document.addEventListener("click", function (e) {
		if (!cartOpen && (e.target.offsetParent.id == "cart" || e.target.id == "cart")) {
			cartOpen = true;
			document.getElementById("cart").classList.add("cartOpen");
		}
		else if (cartOpen && (e.target.offsetParent.id != "cart" && e.target.id != "cart")) {
			cartOpen = false;
			document.getElementById("cart").classList.remove("cartOpen");
		}
	});
});

// retruns string with a chance of a letter being swapped
function glitch(input) {
	const chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
	let flipped = chars.charAt(Math.floor(Math.random() * chars.length));
	let idx = Math.floor(Math.random() * input.length);

	return Math.random() < (20 / 100) ? Array.from(input).toSpliced(idx, 1, flipped).join("") : input;
}

// toggles css classes to open and close mobile menu
function toggleMenu() {
	if (document.getElementById("header").className === "header") {
		document.getElementById("header").className += " open";
	}
	else {
		document.getElementById("header").className = "header";
	}
}

// toggles between showing login and showing register
function switchForm(shown) {
	console.log("shown: " + shown);
	if (shown == "login") {
		document.getElementsByClassName("register")[0].style.display = "none";
		document.getElementsByClassName("register")[1].style.display = "none";
		document.getElementsByClassName("login")[0].style.removeProperty("display");
	}
	else {
		document.getElementsByClassName("register")[0].style.removeProperty("display");
		document.getElementsByClassName("register")[1].style.removeProperty("display");
		document.getElementsByClassName("login")[0].style.display = "none";
	}
}

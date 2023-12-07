document.addEventListener("DOMContentLoaded", (event) => {
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

	isEmpty();
});

function glitch(input) {
	const chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
	let flipped = chars.charAt(Math.floor(Math.random() * chars.length));
	let idx = Math.floor(Math.random() * input.length);

	return Math.random() < (20 / 100) ? Array.from(input).toSpliced(idx, 1, flipped).join("") : input;
}

function toggleMenu() {
	if (document.getElementById("header").className === "header") {
		document.getElementById("header").className += " open";
	}
	else {
		document.getElementById("header").className = "header";
	}
}

function checkBlanks() {
	if (document.getElementsByTagName("form").length != 0) {
		for (var i = 0; i < document.getElementsByTagName("form")[0].length - 1; i++) {
			if (document.getElementsByTagName("form")[0][i].value == "") {
				alert("Please Fill In All Fields")
				return false;
			}
		}
	}
}

function isEmpty() {
	if (document.getElementsByTagName("form").length != 0) {
		setTimeout(() => {
			for (var i = 0; i < document.getElementsByTagName("form")[0].length - 1; i++) {
				if (document.getElementsByTagName("form")[0][i].value == "") {
					document.getElementsByTagName("form")[0][i].className = ("invalid");
				}
				else {
					document.getElementsByTagName("form")[0][i].className = ("");
				}
			}
		}, 1)
	}
}

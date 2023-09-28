document.addEventListener("DOMContentLoaded", (event) => {
	if (document.getElementById("brandname") !== null) {
		setInterval(() => { 
			document.getElementById("brandname").innerText = glitch("ESOTERIC");
			document.title = glitch("ESOTERIC")
		}, 100);
	}
});

function glitch(input) {
	const chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'
	let flipped = chars.charAt(Math.floor(Math.random() * chars.length));
	let idx = Math.floor(Math.random() * input.length);

	return Math.random() < (25 / 100) ? Array.from(input).toSpliced(idx, 1, flipped).join("") : input;
}
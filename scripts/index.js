document.addEventListener("DOMContentLoaded", (event) => {
	setInterval(() => {
		document.title = "「 " + glitch("ESOTERIC") + " 」";
		if (document.getElementsByClassName("brandname") !== null) {
			document.getElementsByClassName("brandname")[0].innerText = glitch("ESOTERIC");
		}
	}, 80);
});

function glitch(input) {
	const chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'
	let flipped = chars.charAt(Math.floor(Math.random() * chars.length));
	let idx = Math.floor(Math.random() * input.length);

	return Math.random() < (20 / 100) ? Array.from(input).toSpliced(idx, 1, flipped).join("") : input;
}

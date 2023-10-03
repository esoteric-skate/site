/*=======================================
This Is The Main JS File With Functions
That Are Used On Every Page. More JS
Files Can Be Made For Specific Use Cases
=======================================*/

// This Code Runs When The Page Loads
document.addEventListener("DOMContentLoaded", (event) => {
	// This Is A 80ms Loop Where The Inner Code Gets Ran Every 80ms
	setInterval(() => {
		// Set The Title (Name On Tab) To The Output Of The "glitch" Function"
		document.title = "「 " + glitch("ESOTERIC") + " 」";
		// Checks If An Elelement With The ID "brandname" exist
		if (document.getElementsByClassName("brandname")[0] !== undefined) {
			// Set The Text Of The 'brandname' element To The Output Of The "glitch" Function"
			document.getElementsByClassName("brandname")[0].innerText = glitch("ESOTERIC");
		}
	}, 80);
});

// Takes A String And Returns A String With The Word With A Flipped Letter
function glitch(input) {
	// Set Up Variables.
	const chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'
	let flipped = chars.charAt(Math.floor(Math.random() * chars.length));
	let idx = Math.floor(Math.random() * input.length);

	// Flips A Letter 20% Of The Time. The Other 80% Of The Time There is No Change
	return Math.random() < (20 / 100) ? Array.from(input).toSpliced(idx, 1, flipped).join("") : input;
}

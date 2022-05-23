const chapterTitle = document.getElementById('title');
const chapterText = document.getElementById('text');
const chapterThoughts = document.getElementById('thoughts');
const convertedText = document.getElementById('converted-text');

chapterTitle.addEventListener('input', (event) => {
	let regPattern = new RegExp('[^A-Za-z0-9\"\'-.\n ]', 'g');
	if (regPattern.test(event.target.value)) {
		chapterTitle.value = event.target.value.replace(/\+[^A-Za-z0-9\+\"\'-.\n ]\+/g, '');
	}
});

chapterText.addEventListener('input', (event) => {
	let regPattern = new RegExp('[^A-Za-z0-9\"\'-.\n ]', 'g');
	if (regPattern.test(event.target.value)) {
		chapterText.value = event.target.value.replace(/[^A-Za-z0-9\"\'-.\n ]/g, '');
	}

	convertedText.value = '';
	let finishedText = chapterText.value.split(/[\n]+/);
	finishedText.forEach((element) => {
		convertedText.value += '<p>' + element.replace(/\"/g, '\"') + '</p>';
	});
});

chapterThoughts.addEventListener('input', (event) => {
	let regPattern = new RegExp('[^A-Za-z0-9\"\'-.\n ]', 'g');
	if (regPattern.test(event.target.value)) {
		chapterThoughts.value = event.target.value.replace(/\+[^A-Za-z0-9\+\"\'-.\n ]\+/g, '');
	}
});
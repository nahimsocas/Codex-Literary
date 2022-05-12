const buttonSection = document.getElementById('slideshow_button--upper');
const backgroundImage = document.getElementById('slideshow--upper');
const backgroundImages = {
	1: "url('../imgs/1.png') center center, url('../imgs/2.png'), url('../imgs/3.png'), url('../imgs/4.png')",
	2: "url('../imgs/2.png') center top, url('../imgs/3.png'), url('../imgs/4.png'), url('../imgs/1.png')",
	3: "url('../imgs/3.png') center center, url('../imgs/4.png'), url('../imgs/1.png'), url('../imgs/2.png')",
	4: "url('../imgs/4.png') center bottom, url('../imgs/1.png'), url('../imgs/2.png'), url('../imgs/3.png')",
};
const popularWeek = document.getElementById('weekly--section');
const popularMonth = document.getElementById('monthly--section');

[...popularWeek.children].forEach((element, index) => {
	if (index + 1 == 4) {
		element.style.background = `url(../imgs/weekly/weekly_${index + 1}.png) center bottom / cover`;
	} else {
		element.style.background = `url(../imgs/weekly/weekly_${index + 1}.png) center top / cover`;
	}
});

[...popularMonth.children].forEach((element, index) => {
	if ((index + 1 == 2) || (index + 1 == 3) || (index + 1 == 5)) {
		element.style.background = `url(../imgs/monthly/monthly_${index + 1}.png) center center / cover`;
	} else {
		element.style.background = `url(../imgs/monthly/monthly_${index + 1}.png) center top / cover`;
	}
});

buttonSection.addEventListener('click', (event) => {
	if (event.target.tagName != 'BUTTON') return;
	if (event.target.dataset.selected == 'true') return;
	let eventIndex = [...buttonSection.children].indexOf(event.target);

	[...buttonSection.children].forEach((element, index) => {
		if (index == eventIndex) {
			element.dataset.selected = 'true';
			element.classList.add('current_slideshow');
		} else {
			element.dataset.selected = 'false';
			element.classList.remove('current_slideshow');
		}
	})
	backgroundImage.style.background = backgroundImages[eventIndex + 1];
	backgroundImage.style.backgroundSize = "cover";
});

// setInterval(() => {

// }, 8000);

setInterval(() => {
	let eventIndex;
	[...buttonSection.children].forEach((element, index) => {
		if (element.dataset.selected == 'true') {
			if (index == 3) {
				eventIndex = 0;
			} else {
				eventIndex = index + 1;
			}
			element.dataset.selected = 'false';
			element.classList.remove('current_slideshow');
		}
	});
	buttonSection.children[eventIndex].dataset.selected = 'true';
	buttonSection.children[eventIndex].classList.add('current_slideshow');
	backgroundImage.style.background = backgroundImages[eventIndex + 1];
	backgroundImage.style.backgroundSize = "cover";
}, 8000);
const searchButton = document.getElementById('search_button');
const bottomHeader = document.getElementById('bottom_header');
const searchBar = document.getElementById('search_bar');
const clContent = document.getElementById('cl_content');
const searchResults = document.forms.search;
let clickedSearch = false;

for (let position in searchList) {
	let theValue;
	for (let details in searchList[position]) {
		if (details == 'value') {
			theValue = searchList[position][details];
		}
		if (details == 'text') {
			clContent.innerHTML += `<option value="${theValue}">${searchList[position][details]}</option>`;
		}
	}
}

searchButton.addEventListener('click', () => {
	clickedSearch = !clickedSearch;
	if (clickedSearch) {
		bottomHeader.style.height = '50px';
		setTimeout(() => { searchBar.style.display = 'block'; }, 300);
	} else {
		bottomHeader.style.height = '12px';
		searchBar.style.display = 'none';
		searchBar.value = '';
	}
});

searchResults.addEventListener('submit', (event) => {
	event.preventDefault();
	let inputTitle = searchResults.elements.search_bar.value;
	[...clContent.children].forEach((element) => {
		if (element.value.toLowerCase() == inputTitle.toLowerCase()) {
			window.location.href = `http://127.0.0.1:8000/library/${inputTitle.toLowerCase().split(' ').join('-')}`;
		}
	})
});
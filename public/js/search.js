const searchButton = document.getElementById('search_button');
const bottomHeader = document.getElementById('bottom_header');
const searchBar = document.getElementById('search_bar');
const searchResults = document.forms.search;
let clickedSearch = false;

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
	window.location.href = `http://127.0.0.1:8000/library/${inputTitle.toLowerCase().trim().split(' ').join('-')}`;
});
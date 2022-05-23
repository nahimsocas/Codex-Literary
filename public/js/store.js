const articlesStore = document.getElementById('store');
const allowCopy = document.getElementById('cart');

fetch('https://gutendex.com/books/?copyright=false')
	.then(response => response.json())
	.then(content => {
		let theResults = [...content.results];
		theResults.forEach((element) => {
			let arr;
			let category;
			if ( element.subjects[0].split('--').length > 1 ) {
				arr = element.subjects[0].split('--');
				category = arr[arr.length - 1].trim();
			} else {
				category = element.subjects[0];
			}

			if ( allowCopy.value == 'true' ) {
				articlesStore.innerHTML += `
					<form action="/store/cart" target="storeFrame" method="POST">
						<input type="hidden" name="_token" value="${document.querySelector('meta[name="csrf-token"]').content}">
						<article class="books--gutendex" data-category="prueba">
							<section class="books--img">
								<img src="${element.formats['image/jpeg']}" alt="${element.title}">
							</section>
							<section class="books--information">
								<h1>${element.title}</h1>
								<h2>${element.authors[0].name}</h2>
								<p>${category}</p>
								<section class="books--buttons">
									<p>Cart</p>
									<button type="submit">HARDCOPY</button>
									<input type="hidden" name="data" value="${element.id}|${element.formats['image/jpeg']}|${element.title}|${element.authors[0].name}|${category}">
									<p>Download</p>
									<a href="${element.formats['application/epub+zip']}">EPUB</a>
									<a href="${element.formats['application/x-mobipocket-ebook']}">MOBI</a>
								</section>
							</section>
						</article>
					</form>`;
			} else if ( allowCopy.value == 'false' ) {
				articlesStore.innerHTML += `
					<article class="books--gutendex" data-category="prueba">
						<section class="books--img">
							<img src="${element.formats['image/jpeg']}" alt="${element.title}">
						</section>
						<section class="books--information">
							<h1>${element.title}</h1>
							<h2>${element.authors[0].name}</h2>
							<p>${category}</p>
							<section class="books--buttons">
								<p>Cart</p>
								<button type="submit">HARDCOPY</button>
								<input type="hidden" name="data" value="${element.formats['image/jpeg']}|${element.title}|${element.authors[0].name}|${category}">
								<p>Download</p>
								<a href="${element.formats['application/epub+zip']}">EPUB</a>
								<a href="${element.formats['application/x-mobipocket-ebook']}">MOBI</a>
							</section>
						</section>
					</article>`;
			}
		});
	});

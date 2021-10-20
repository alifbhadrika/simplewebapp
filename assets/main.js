/* main page */
const cards = document.querySelectorAll(".card");
cards.forEach((card) => {
  card.addEventListener("click", () => {
    window.location.href = `./assets/book${card.classList[1]}.php`;
  });
});

const formatMoney = (str) => {
  let out = "Rp";
  const thousand = str.toString().slice(-3);
  const nominal = str.toString().slice(0, -3);
  return out + nominal + "." + thousand;
};

// const books = [
//   {
//     judul: "Untuk Apa Seni",
//     primer: {
//       "url-foto":
//         "https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1392706216l/20837627.jpg",
//       harga: 60000,
//     },
//     deskripsi: {
//       penulis: "Bambang Sugiharto, dkk",
//       penerbit: "Pustaka Matahari",
//       penyunting: "Bambang Sugiharto",
//     },
//   },
//   {
//     judul: "Warisan Sejarah Arianisme",
//     primer: {
//       "url-foto":
//         "https://pustaka.iainbukittinggi.ac.id/wp-content/uploads/2018/12/arian-198x300.jpg",
//       harga: 97000,
//     },
//     deskripsi: {
//       "judul-asli": "Archetypal Heresy: Arianism Through the Centuries",
//       penulis: "Maurice Wiles",
//       penerjemah: "Zaenal Muttaqin",
//       penerbit: "Pustaka Matahari",
//       "penerbit-asli": "Oxford University Press, Inc.",
//     },
//   },
//   {
//     judul: "Sejarah Filsafat Kontemporer: Jerman dan Inggris",
//     primer: {
//       "url-foto":
//         "https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1551165807l/4309628._SX318_.jpg",
//       harga: 70000,
//     },
//     deskripsi: {
//       penulis: "K. Bertens",
//       penerbit: "PT Gramedia Pustaka Utama",
//     },
//   },
//   {
//     judul: "Sejarah Filsafat Kontemporer: Prancis",
//     primer: {
//       "url-foto":
//         "https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1243418656l/6498943.jpg",
//       harga: 63000,
//     },
//     deskripsi: {
//       penulis: "K. Bertens",
//       penerbit: "PT Gramedia Pustaka Utama",
//     },
//   },
//   {
//     judul: "Semiotika dan Hipersemiotika",
//     primer: {
//       "url-foto":
//         "https://s2.bukalapak.com/img/7734600261/large/IMG_20170912_134621_scaled.jpg",
//       harga: 120000,
//     },
//     deskripsi: {
//       penulis: "Yasraf Amir Piliang",
//       penerbit: "Pustaka Matahari",
//     },
//   },
//   {
//     judul: "Epistemologi Dasar",
//     primer: {
//       "url-foto":
//         "https://togamas.com/css/images/items/potrait/JPEGG_5905_Epistemologi_Dasar.jpg",
//       harga: 60000,
//     },
//     deskripsi: {
//       penulis: "J. Sudarminta",
//       penerbit: "Penerbit Kanisius",
//     },
//   },
//   {
//     judul: "Teori-Teori Etika",
//     primer: {
//       "url-foto":
//         "https://s2.bukalapak.com/img/2027491742/large/Buku_Teori_Teori_Etika_karya_Gordon_Graham.jpg",
//       harga: 96000,
//     },
//     deskripsi: {
//       penulis: "Nusamedia",
//       penerbit: "Gordon Graham",
//     },
//   },
// ];

// // helper functions
// const formatMoney = (str) => {
//   let out = "Rp";
//   const thousand = str.toString().slice(-3);
//   const nominal = str.toString().slice(0, -3);
//   return out + nominal + "." + thousand;
// };

// // main functions

// let bookIndex = 0;
// const onClickHandler = (index) => {
//   window.location.href = "./bookdetail.html";
//   bookIndex = index;
//   console.log(index);
// };
// const list = document.querySelector(".books-list");
// const createBooksList = (books) => {
//   books.map((book, i) => {
//     const card = document.createElement("div");
//     card.classList = "card";

//     const thumbnail = document.createElement("img");
//     const title = document.createElement("h2");
//     const price = document.createElement("p");
//     thumbnail.src = book.primer["url-foto"];
//     title.textContent = book.judul;
//     price.textContent = formatMoney(book.primer.harga);
//     card.addEventListener("click", () => {
//       onClickHandler(i);
//     });
//     card.appendChild(thumbnail);
//     card.appendChild(title);
//     card.appendChild(price);
//     list.appendChild(card);
//   });
// };
// if (list) {
//   createBooksList(books);
// }

// console.log(bookIndex);
// const details = document.querySelector(".book-details");
// const createBookDetails = () => {
//   let selectedBook = books[bookIndex];
//   const container = document.createElement("div");
//   const thumbnail = document.createElement("img");
//   const title = document.createElement("h2");
//   const price = document.createElement("p");
//   thumbnail.src = selectedBook.primer["url-foto"];
//   title.textContent = selectedBook.judul;
//   price.textContent = formatMoney(selectedBook.primer.harga);
//   container.appendChild(thumbnail);
//   container.appendChild(title);
//   container.appendChild(price);
//   details.appendChild(container);
// };
// if (details) {
//   createBookDetails();
// }

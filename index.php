<?php
  session_start();
  if (!$_SESSION['isLogin'] ?? null){
    header('location:login.php');
    exit();
  }

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/styles.css?v=<?php echo time(); ?>">
  <script src="https://kit.fontawesome.com/67db705c14.js" crossorigin="anonymous"></script>
  <title>Alif's Bookstore</title>
</head>

<body>
  <header>
    <h1>Welcome to Alif's Bookstore</h1>
  </header>
  <span class="logout-btn"><a href='logout.php'><u>Logout</u></a></span>
  <main class="books-list">
    <div class="card 1">
      <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1392706216l/20837627.jpg">
      <h2>Untuk Apa Seni</h2>
      <p>Rp60.000</p>
    </div>
    <div class="card 2">
      <img src="https://pustaka.iainbukittinggi.ac.id/wp-content/uploads/2018/12/arian-198x300.jpg">
      <h2>Warisan Sejarah Arianisme</h2>
      <p>Rp97.000</p>
    </div>
    <div class="card 3">
      <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1551165807l/4309628._SX318_.jpg">
      <h2>Sejarah Filsafat Kontemporer: Jerman dan Inggris</h2>
      <p>Rp70.000</p>
    </div>
    <div class="card 4">
      <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1243418656l/6498943.jpg">
      <h2>Sejarah Filsafat Kontemporer: Prancis</h2>
      <p>Rp63.000</p>
    </div>
    <div class="card 5">
      <img src="https://s2.bukalapak.com/img/7734600261/large/IMG_20170912_134621_scaled.jpg">
      <h2>Semiotika dan Hipersemiotika</h2>
      <p>Rp120.000</p>
    </div>
    <div class="card 6">
      <img src="https://togamas.com/css/images/items/potrait/JPEGG_5905_Epistemologi_Dasar.jpg">
      <h2>Epistemologi Dasar</h2>
      <p>Rp60.000</p>
    </div>
    <div class="card 7">
      <img src="https://s2.bukalapak.com/img/2027491742/large/Buku_Teori_Teori_Etika_karya_Gordon_Graham.jpg">
      <h2>Teori-Teori Etika</h2>
      <p>Rp96.000</p>
    </div>
    <button class="cart-btn">
      <i class="fas fa-solid fa-cart-plus"></i>
      <span>Lihat keranjang</span>
    </button>
  </main>
  <footer>
    <div>
      <span>by Alif Bhadrika Parikesit 13519186</span>
    </div>
  </footer>
</body>
<script type="text/javascript">
  const cards = document.querySelectorAll(".card");
  cards.forEach((card) => {
  card.addEventListener("click", () => {
    window.location.href = `./assets/book${card.classList[1]}.php`;
  });

  const cart = document.querySelector(".cart-btn");
  cart.addEventListener("click", () => {
    window.location.href = `./cart.php`
  })
});
</script>

</html>
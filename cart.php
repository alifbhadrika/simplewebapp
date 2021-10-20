<?php 
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/styles.css?v=<?php echo time(); ?>">
  <script src="https://kit.fontawesome.com/67db705c14.js" crossorigin="anonymous"></script>
  <title>Cart</title>
</head>
<body>
  <div class="back-button">
    <i class="fas fa-chevron-left"></i>
    <span>Back to Catalogue</span>
  </div>
  <div class="cart-page">
    <div class="cart-card">
      <div class="row">
        <span><strong>Judul Buku</strong></span>
        <div>
          <span><strong>Quantity</strong></span>
          <span><strong>Total</strong></span>
        </div>
      </div>
      <script type="text/javascript" src="./assets/data/books.js"></script>
      <script type="text/javascript">
        <?php
          $userCart = json_encode($_SESSION['cart']);
          echo "var userCart = ". $userCart . ";\n";
        ?>
        console.log(books);
        console.log(userCart)

        const formatMoney = (str) => {
          var	reverse = str.toString().split('').reverse().join('');
          var ribuan 	= reverse.match(/\d{1,3}/g);
          return 'Rp'+ribuan.join('.').split('').reverse().join('')
        }

        let totalPrice = 0;
        const cart = document.querySelector(".cart-card");
        const createCart = (qty, bookIndex) => {
          const selectedBook = books[bookIndex];
          const row = document.createElement("div");
          row.classList.add("row");
          const title = document.createElement("p");
          const priceandqty = document.createElement("div");
          const price = document.createElement("span");
          const quantity = document.createElement("span");
          title.textContent = selectedBook.judul;
          quantity.textContent = `x${qty}`
          totalPrice += selectedBook.primer.harga*qty;
          price.textContent = formatMoney(selectedBook.primer.harga*qty)
          row.appendChild(title);
          priceandqty.appendChild(quantity);
          priceandqty.appendChild(price);
          row.appendChild(priceandqty);
          cart.appendChild(row);
        };
        userCart.forEach((quantity, index) => {
          if(quantity !== 0){
            empty = false;
            createCart(quantity, index);
          }
        })
        const totalPriceDiv = document.createElement("div");
        totalPriceDiv.classList.add("cart-total");
        totalPriceDiv.textContent = formatMoney(totalPrice);
        cart.appendChild(totalPriceDiv);
      </script>
    </div>
  </div>
</body>
<script type="text/javascript">
  const backButton = document.querySelector(".back-button");
  const onClickBack = () => {
    window.location.href = "./";
  };
  backButton.addEventListener("click", () => {
    onClickBack();
  });
</script>
</html>
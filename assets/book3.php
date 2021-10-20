<?php 
  require_once "action.php";
  $message = addToCart(2);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">
  <script src="https://kit.fontawesome.com/67db705c14.js" crossorigin="anonymous"></script>
  <title>Alif's Bookstore</title>
</head>

<body>
  <div class="back-button">
    <i class="fas fa-chevron-left"></i>
    <span>Back to Catalogue</span>
  </div>
  <div class="margin-auto">
    <?php 
      if(isset($message)){
        echo "<div class='toast'>$message</div>";
      }
    ?>
    <div class="details-container">
      <img class="details-img"
        src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1551165807l/4309628._SX318_.jpg" />
      <div class="details-description">
        <h1 class="details-title">Sejarah Filsafat Kontemporer: Jerman dan Inggris</h1>
        <p class="details-author">oleh K. Bertens</p>
        <p class="details-publisher">Penerbit: PT Gramedia Pustaka Utama</p>
        <form method="post">
          <button name="add" value="add" class="details-price">
            <i class="fas fa-solid fa-cart-plus"></i>
            <span>Rp70.000</span>
          </button>
        </form>
      </div>
    </div>
  </div>
  <footer>
    <div>
      <span>by Alif Bhadrika Parikesit 13519186</span>
    </div>
  </footer>
</body>
<script type="text/javascript">
  const backButton = document.querySelector(".back-button");
  const onClickBack = () => {
    window.location.href = "../.";
  };
  backButton.addEventListener("click", () => {
    onClickBack();
  });
</script>

</html>
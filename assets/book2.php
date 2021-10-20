<?php 
  require_once "action.php";
  $message = addToCart(1);
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
        src="https://pustaka.iainbukittinggi.ac.id/wp-content/uploads/2018/12/arian-198x300.jpg" />
      <div class="details-description">
        <h1 class="details-title">Warisan Sejarah Arianisme</h1>
        <p class="details-author">oleh Maurice Wiles</p>
        <p class="details-publisher">Penerbit: Pustaka Matahari, Oxford University Press, Inc.</p>
        <p class="details-editor">Penyunting: Bambang Sugiharto</p>
        <p>Judul asli: Archetypal Heresy: Arianism Through the Centuries</p>
        <p>Penerjemah: Zaenal Muttaqin</p>
        <form method="post">
          <button name="add" value="add" class="details-price">
            <i class="fas fa-solid fa-cart-plus"></i>
            <span>Rp97.000</span>
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
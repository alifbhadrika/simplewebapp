<?php 
  require_once "action.php";
  $message = addToCart(6);
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
        src="https://s2.bukalapak.com/img/2027491742/large/Buku_Teori_Teori_Etika_karya_Gordon_Graham.jpg" />
      <div class="details-description">
        <h1 class="details-title">Teori-Teori Etika</h1>
        <p class="details-author">oleh Nusamedia</p>
        <p class="details-publisher">Penerbit: Gordon Graham</p>
        <form method="post">
          <button name="add" value="add" class="details-price">
            <i class="fas fa-solid fa-cart-plus"></i>
            <span>Rp96.000</span>
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
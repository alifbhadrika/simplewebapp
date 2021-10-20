<?php
  session_start();
  if ($_SESSION['isLogin'] ?? null){
    header("location:.");
    exit;
  }
  if (isset($_POST['submit'])){
    $newUsername = $_POST['username'];
    $newPassword = $_POST['password'];

    $usernameFile = fopen('./assets/data/username.txt', 'a');
    $passwordFile = fopen('./assets/data/password.txt', 'a');

    // check udah ada belum
    fwrite($usernameFile, $newUsername . PHP_EOL);
    fwrite($passwordFile, $newPassword . PHP_EOL);

    fclose($usernameFile);
    fclose($passwordFile);

    // alert akun berhasil dibuat
    $message = "Akun Anda berhasil dibuat silahkan masuk.";
  }

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
  <link rel="stylesheet" href="assets/styles.css?v=<?php echo time(); ?>">
  <script src="https://kit.fontawesome.com/67db705c14.js" crossorigin="anonymous"></script>
</head>

<body>
<div class="userauth-page">
    <?php 
      if(isset($message)){
        echo "<div class='toast'>$message</div>";
      }
    ?>
    <div class="userauth-card">
      <div class="userauth-card-content">
        <div class="userauth-header">
          <h2>Alif's Bookstore</h2>
          <h3>Buku murah tapi gak murahan!</h3>
        </div>
        <form action="" method="POST" name="signup_form">
          <div class="form-field username">
            <div class="icon">
              <i class="far fa-user"></i>
            </div>
            <input type="text" placeholder="Username" name="username" required>
          </div>
          <div class="form-field password">
            <div class="icon">
              <i class="fas fa-lock"></i>
            </div>
            <input type="password" placeholder="Password" name="password" required>
          </div>

          <button class="userauth-btn" type="submit" name="submit" value="signup">
            Daftar
          </button>
          <div>
            Sudah punya akun? <a href="login.php">Masuk</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>
<?php 
  session_start();
  if ($_SESSION['isLogin'] ?? null){
    header("location:.");
    exit;
  }
  $username_db = explode(PHP_EOL, file_get_contents('./assets/data/username.txt'));
  $password_db = explode(PHP_EOL, file_get_contents('./assets/data/password.txt'));
  
  $users = array();
  for ($i = 0; $i < sizeof($username_db); $i+=1){
    $users[$username_db[$i]] = $password_db[$i]; 
  }

  if (isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (array_key_exists($username, $users)){
      if ($password == $users[$username]){
        // berhasil login
        $_SESSION['isLogin'] = 1;
        $_SESSION['user'] = $username;
        $_SESSION['cart'] = array(0, 0, 0, 0, 0, 0, 0);
        // navigate to index
        header("location:./");

      } else {
        $message = "Username atau Password salah!";
      }
    } else {
      // akun belum terdaftar
      $message = "Akun Anda belum terdaftar, silahkan Sign Up terlebih dahulu!";
    }
  }
?> 
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="assets/styles.css?v=<?php echo time(); ?>">
  <script src="https://kit.fontawesome.com/67db705c14.js" crossorigin="anonymous">
  </script>
</head>

<body>
  <?php 
    if(isset($message)){
      echo "<div class='toast-error'>$message</div>";
    }
  ?>
  <div class="userauth-page">
    <div class="userauth-card">
      <div class="userauth-card-content">
        <div class="userauth-header">
          <h2>Alif's Bookstore</h2>
          <h3>Buku murah tapi gak murahan!</h3>
        </div>
        <form action="" method="POST" name="login_form">
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

          <button class="userauth-btn" type="submit" name="submit" value="login">
            Masuk
          </button>
          <div>
            Belum punya akun? <a href="signup.php">Daftar</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>
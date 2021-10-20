<?php 
  session_start();
  function addToCart($book_idx){
    if ($_POST['add'] ?? null){
      if (!$_SESSION['cart'][$book_idx] ?? null){
        $_SESSION['cart'][$book_idx] = 1;
      } else {
        $_SESSION['cart'][$book_idx] += 1;
      }
      return "Buku berhasil di tambahkan ke keranjang.";
    }
  }
?>
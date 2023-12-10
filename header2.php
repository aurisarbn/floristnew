<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<header class="header">

    <div class="flex">

        <a href="home.php" class="logo">florist.co</a>

        <nav class="navbar">
            <ul>
                <li><a href="home.php">Beranda</a></li>
                <li><a href="#">Halaman +</a>
                    <ul>
                        <li><a href="about.php">Blog</a></li>
                        <li><a href="contact.php">Kontak</a></li>
                    </ul>
                </li>
                <li><a href="shop.php">Belanja</a></li>
                <li><a href="orders.php">Pesanan</a></li>
                <li><a href="#">Akun +</a>
                    <ul>
                        <li><a href="login.php">Masuk</a></li>
                        <li><a href="register.php">Buat Akun baru</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <a href="search_page.php" class="fas fa-search"></a>
            <?php
                $select_wishlist_count = mysqli_query($conn, "SELECT * FROM `wishlist` WHERE user_id = '$user_id'") or die('query failed');
                $wishlist_num_rows = mysqli_num_rows($select_wishlist_count);
            ?>
            <a href="wishlist.php"><i class="fas fa-heart"></i><span>(<?php echo $wishlist_num_rows; ?>)</span></a>
            <?php
                $select_cart_count = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
                $cart_num_rows = mysqli_num_rows($select_cart_count);
            ?>
            <a href="cart.php"><i class="fa-solid fa-cart-plus"></i><span>(<?php echo $cart_num_rows; ?>)</span></a>

        </div>
        <div class="icons">
        <div id="user-btn" class="fas fa-user"></div>
</div>
        <div class="account-box">
            <a href="login.php" class="delete-btn">login</a>
            <a href="register.php" class="delete-btn">register</a>
        </div>

    </div>

</header>
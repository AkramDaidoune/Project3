<?php

include 'components/connect.php'; // * link naar connect* \

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/wishlist_cart.php'; // link naar het winkelwagen \\

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font links  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- link naar css  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>  <!-- link naar de header -->

<div class="home-bg">

<section class="home">

   <div class="swiper home-slider">
   
   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <div class="image">
            <img src="images/home-productfoto.png" alt="">
         </div>
         <div class="content">
            <span>Beste deals</span>
            <h3>Nieuwste Collectie!</h3>
            <a href="shop.php" class="btn">Shop nu</a>
         </div>
      </div>

      <div class="swiper-slide slide">
         <div class="image">
            <img src="images/home-img-2.png" alt="">
         </div>
         <div class="content">
            <span>Beste deals</span>
            <h3>Nieuwste Collectie!</h3>
            <a href="shop.php" class="btn">Shop nu</a>
         </div>
      </div>

      <div class="swiper-slide slide">
         <div class="image">
            <img src="images/home-imgblauw.png" alt="">
         </div>
         <div class="content">
            <span>Beste deals</span>
            <h3>Nieuwste Collectie!</h3>
            <a href="shop.php" class="btn">Shop nu</a>
         </div>
      </div>

   </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

</div>

<section class="category">

   <h1 class="heading">Shop per catogorie</h1>

   <div class="swiper category-slider">

   <div class="swiper-wrapper">

   <a href="category.php?category=schoenen" class="swiper-slide slide">
      <img src="images/foto-1.png" alt="">
      <h3>Schoenen</h3>
   </a>

   <a href="category.php?category=t-shirt" class="swiper-slide slide">
      <img src="images/foto-2.png" alt="">
      <h3>T-shirt</h3>
   </a>

   <a href="category.php?category=horloge" class="swiper-slide slide">
      <img src="images/foto-3.png" alt="">
      <h3>Horloge</h3>
   </a>

   <a href="category.php?category=hoodie" class="swiper-slide slide">
      <img src="images/foto-4.png" alt="">
      <h3>hoodies</h3>
   </a>

   <a href="category.php?category=sokken" class="swiper-slide slide">
      <img src="images/foto-5.png" alt="">
      <h3>Sokken</h3>
   </a>

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>

<section class="home-products">

   <h1 class="heading">Nieuwste producten</h1>

   <div class="swiper products-slider">

   <div class="swiper-wrapper">

   <?php
     $select_products = $conn->prepare("SELECT * FROM `products` LIMIT 6"); 
     $select_products->execute();
     if($select_products->rowCount() > 0){
      while($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)){
   ?>
   <form action="" method="post" class="swiper-slide slide">
      <input type="hidden" name="pid" value="<?= $fetch_product['id']; ?>">
      <input type="hidden" name="name" value="<?= $fetch_product['name']; ?>">
      <input type="hidden" name="price" value="<?= $fetch_product['price']; ?>">
      <input type="hidden" name="image" value="<?= $fetch_product['image_01']; ?>">
      <button class="fas fa-heart" type="submit" name="add_to_wishlist"></button>
      <a href="quick_view.php?pid=<?= $fetch_product['id']; ?>" class="fas fa-eye"></a>
      <img src="uploaded_img/<?= $fetch_product['image_01']; ?>" alt="">
      <div class="name"><?= $fetch_product['name']; ?></div>
      <div class="flex">
         <div class="price"><span>$</span><?= $fetch_product['price']; ?><span>/-</span></div>
         <input type="number" name="qty" class="qty" min="1" max="99" onkeypress="if(this.value.length == 2) return false;" value="1">
      </div>
      <input type="submit" value="Voeg toe aan winkelwagen" class="btn" name="add_to_cart">
   </form>
   <?php
      }
   }else{
      echo '<p class="empty">no products added yet!</p>';
   }
   ?>

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>





<footer class="footer">

   <section class="grid">

      <div class="box">
         <h3>Snelle koppelingen</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> Home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> Info</a>
         <a href="shop.php"> <i class="fas fa-angle-right"></i> Shop</a>
         <a href="contact.php"> <i class="fas fa-angle-right"></i> Contact</a>
      </div>

      <div class="box">
         <h3>Extra links</h3>
         <a href="user_login.php"> <i class="fas fa-angle-right"></i> Login</a>
         <a href="user_register.php"> <i class="fas fa-angle-right"></i> Registreer</a>
         <a href="cart.php"> <i class="fas fa-angle-right"></i> Winkelwagen</a>
         <a href="orders.php"> <i class="fas fa-angle-right"></i> Bestellingen</a>
      </div>

      <div class="box">
         <h3>Neem contact op.</h3>
         <a href="tel:+31 684975682"><i class="fas fa-phone"></i> +31 684975682</a>
         <a href="mailto:akramito2017@gmail.com"><i class="fas fa-envelope"></i> CsportInfo@gmail.com</a>
         <a href="https://www.google.com/myplace"><i class="fas fa-map-marker-alt"></i> Jan Ligthartstraat 250, 3083 AM Rotterdam </a>
      </div>

      

   </section>

   <div class="credit">&copy; Medemogelijk gemaakt <?= date('Y'); ?> Door <span>Akram Daidoune <br>

</footer>





<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".home-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
    },
});

 var swiper = new Swiper(".category-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
         slidesPerView: 2,
       },
      650: {
        slidesPerView: 3,
      },
      768: {
        slidesPerView: 4,
      },
      1024: {
        slidesPerView: 5,
      },
   },
});

var swiper = new Swiper(".products-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      550: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>
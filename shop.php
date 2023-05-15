<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/wishlist_cart.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>shop</title>
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include 'components/user_header.php'; ?>
<section class="products">
   <!-- Titel voor de nieuwste producten -->
   <h1 class="heading">Nieuwste producten</h1>
   <div class="box-container">
   <?php
     // Selecteer alle producten uit de database
     $select_products = $conn->prepare("SELECT * FROM `products`"); 
     $select_products->execute();
     if($select_products->rowCount() > 0){
      while($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)){
   ?>
   
   <form action="" method="post" class="box">
      <!-- Verborgen veld voor product-id -->
      <input type="hidden" name="pid" value="<?= $fetch_product['id']; ?>">
      <!-- Verborgen veld voor productnaam -->
      <input type="hidden" name="name" value="<?= $fetch_product['name']; ?>">
      <!-- Verborgen veld voor productprijs -->
      <input type="hidden" name="price" value="<?= $fetch_product['price']; ?>">
      <!-- Verborgen veld voor productafbeelding -->
      <input type="hidden" name="image" value="<?= $fetch_product['image_01']; ?>">
      <!-- Hartvormige knop voor het toevoegen van het product aan de verlanglijst -->
      <button class="fas fa-heart" type="submit" name="add_to_wishlist"></button>
      <!-- Knop voor het snel bekijken van het product -->
      <a href="quick_view.php?pid=<?= $fetch_product['id']; ?>" class="fas fa-eye"></a>
      <!-- Afbeelding van het product -->
      <img src="uploaded_img/<?= $fetch_product['image_01']; ?>" alt="">
      <!-- Naam van het product -->
      <div class="name"> <?= $fetch_product['name']; ?></div>
      <!-- Prijs van het product -->
      <div class="flex">
         <div class="price"><span>$</span><?= $fetch_product['price']; ?><span>/-</span></div>
         <!-- Aantal producten -->
         <input type="number" name="qty" class="qty" min="1" max="99" onkeypress="if(this.value.length == 2) return false;" value="1">
      </div>
      <!-- Knop voor het toevoegen van het product aan de winkelwagen -->
      <input type="submit" value="Toevoegen aan winkelwagen" class="btn" name="Toevoegen_aan_winkelwagen">
   </form>
   <?php
      }
   }else{
      // Melding als er geen producten zijn gevonden
      echo '<p class="empty">no products found!</p>';
   }
   ?>
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

   <div class="credit">&copy; Medemogelijk gemaakt <?= date('Y'); ?> by <span>Akram <br>

</footer>


</html>


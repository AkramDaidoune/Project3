<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

if(isset($_POST['send'])){

   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $number = $_POST['number'];
   $number = filter_var($number, FILTER_SANITIZE_STRING);
   $msg = $_POST['msg'];
   $msg = filter_var($msg, FILTER_SANITIZE_STRING);

   $toEmail = "akramito2017@gmail.com";

   $select_message = $conn->prepare("SELECT * FROM `messages` WHERE name = ? AND email = ? AND number = ? AND message = ?");
   $select_message->execute([$name, $email, $number, $msg]);

   if($select_message->rowCount() > 0){
      $message[] = 'already sent message!';  
   }else{

      $insert_message = $conn->prepare("INSERT INTO `messages`(user_id, name, email, number, message) VALUES(?,?,?,?,?)");
      $insert_message->execute([$user_id, $name, $email, $number, $msg]);

      $message[] = 'sent message successfully!';

   }

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Contact</title>
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="contact">

   <form action="" method="post">
      <h3>Neem contact op</h3>
      <input type="text" name="Naam" placeholder="Naam" required maxlength="20" class="box">
      <input type="email" name="Email" placeholder="Email" required maxlength="50" class="box">
      <input type="number" name="Telefoonnummer" min="0" max="9999999999" placeholder="Telefoonnummer" required onkeypress="if(this.value.length == 10) return false;" class="box">
      <textarea name="msg" class="box" placeholder="Bericht" cols="30" rows="10"></textarea>
      <input type="submit" value="Verstuur bericht " name="send" class="btn">
   </form>

</section>















<script src="js/script.js"></script>

</body>
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
         <a href="user_register.php"> <i class="fas fa-angle-right"></i> Register</a>
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
<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- Font Awesome cdn-link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- Aangepaste CSS-bestand-link -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<!-- Over ons-sectie -->
<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/ruilen.png" alt="">
      </div>

      <div class="content">
         <h3>Ruilen of retourneren?</h3>
         <p> Indien u een bestelling plaatst bij ons, bieden wij u de mogelijkheid om binnen 60 dagen na ontvangst van uw bestelling te retourneren. U kunt uw artikel(en) kosteloos retourneren bij een van onze Csport winkels. Indien u ervoor kiest om uw artikel(en) per post te retourneren, zijn de verzendkosten voor uw eigen rekening. Wij verwijzen u graag naar onze website voor de dichtstbijzijnde Csport winkel. Houd er rekening mee dat retourneren per post gepaard gaat met verzendkosten die voor eigen rekening zijn</p>
         <a href="contact.php" class="btn">Neem contact op.
         </a>
      </div>

   </div>

</section>

<!-- Diversiteit-sectie -->
<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/Milieu.png" alt="">
      </div>

      <div class="content">
         <h3>Vragen over milieu diversiteit.</h3>
         <p>
               Bij Csport is diversiteit een vanzelfsprekendheid, maar daarom niet minder belangrijk. Wij zijn trots op ons beleid waarin wij aandacht schenken aan alles waarin wij van elkaar verschillen, en deze verschillen accepteren en respecteren. Binnen onze organisatie veroordelen wij elke vorm van ongewenst gedrag. Wij zijn van mening dat een veilige werkomgeving en respectvolle omgang met elkaar, ongeacht de verschillen, cruciaal zijn voor het optimaal benutten van ieders talenten en het bereiken van succes.<br><br>
               Onze samenwerking is gebaseerd op deze principes en wij zijn er trots op. Binnen onze organisatie hebben wij de Culture Club opgericht. Deze groep bestaat uit teamleden van verschillende niveaus en afdelingen, waaronder de winkel en het kantoor. De Culture Club zorgt ervoor dat wij voortdurend bewust zijn van en kennis maken met verschillende culturen, achtergronden en overtuigingen. Dit verbreedt de kennis en het begrip van alle teamleden. Tevens organiseert de Culture Club (online) evenementen om de teamgeest te versterken en de brug tussen afdelingen te slaan.
         </p>

</section>

<!---Revieuws van klanten-->
<section class="reviews">
   
   <h1 class="heading">Beoordelingen van onze klanten</h1>

   <div class="swiper reviews-slider">

   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <img src="images/pic-1.png" alt="">
         <p>   
            Deze webshop is uiterst gebruiksvriendelijk en het plaatsen van een bestelling verliep zonder enige moeite. Bovendien ontving ik mijn Nike schoenen snel en probleemloos. Ik ben een regelmatige klant en heb tot op heden nog nooit enige problemen ondervonden bij mijn bestellingen. Ook het retourneren van schoenen verliep vlekkeloos.
            Ik wil graag mijn lof uiten over deze webshop en het geweldige merk dat zij aanbieden. Ik ben dan ook verbaasd over de negatieve review die ik hier tegenkom en ik kan mij daar absoluut niet in vinden.
         </p>

         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Hans lizen</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-2.png" alt="">
         <p>
            Csport doet over het algemeen goed werk, maar het is merkbaar dat zij zich inzetten om meer schoenen beschikbaar te stellen voor hun klanten. Desondanks hebben zij nog geen effectieve oplossing gevonden voor de aanwezigheid van bots.
            Helaas is er sprake van een afname in de kwaliteitscontrole bij Csport. Zo heb ik vandaag twee paar schoenen ontvangen waarvan één paar aanzienlijke lijmresten vertoont. Dit is naar mijn mening een ongewenste situatie die aandacht verdient.
         </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Alia cantona</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-3.png" alt="">
         <p>
            Bij mijn eerste bestelling via Csport wist ik niet precies wat ik kon verwachten, vooral nadat ik enkele negatieve reviews had gelezen. Echter, ik ben zeer positief verrast! Vanaf het begin tot het einde kon ik mijn pakket gemakkelijk volgen en de levering verliep snel. Ik plaatste mijn bestelling op vrijdag en op dinsdag lagen mijn schoenen klaar om opgehaald te worden bij het DHL-punt. Ik zou het zo weer doen.
            De schoenen waren zorgvuldig gecontroleerd en zagen er keurig uit. Ook de verpakking was goed in orde. Al met al kan ik Csport van harte aanbevelen.
         </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Bram van der Meer</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-4.png" alt="">
         <p>Ik heb onlangs een bestelling geplaatst op de website, maar heb helaas technische problemen ondervonden. Ik werd steeds doorgestuurd naar de Amerikaanse website, wat verwarrend was. Desondanks verliep het bestelproces goed en kreeg ik mijn bestelling snel geleverd. De afhandeling van de retourzending verliep netjes en vlot.
            Wel moet ik opmerken dat het contact met de klantenservice via de chat soms wat moeizaam verliep vanwege het vreemde taalgebruik van de chatmedewerkers. Desondanks was het overall een redelijke ervaring.
            Al met al ben ik tevreden met mijn aankoop, maar er is nog wel ruimte voor verbetering wat betreft de website en de klantenservice.
         </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Sanne Jansen</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-5.png" alt="">
         <p>Beste Csport,
           Ik ben een tevreden klant. Sinds 2014 bestel ik via jullie app en ik moet zeggen dat ik erg tevreden ben over jullie service. De klantenservice is goed bereikbaar en de afhandeling van geldteruggaves verloopt snel en soepel. Daarnaast hebben jullie vaak leuke kleding te koop. Dit mag ook zeker gezegd worden: ik heb alleen maar goede ervaringen met Csport. En wat betreft de 20% korting op sale, ik hoop dat jullie hier nooit mee stoppen!
         </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Daan de Vries</h3>
      </div>

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>
</section>


<!---Wie we zijn--->
<section class="reviews">
   
   <h1 class="heading">Wie zijn wij?</h1>

   <div class="swiper reviews-slider">

   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <img src="images/Ali.jpg" alt="">
         <p>Hallo mijn naam is Ali Shwani ik ben 16 jaar en zit op het techniekcollegerotterdam waar ik de opleiding Software developer doe. In mijn opleiding leer ik over verschillende talen over progammeren die gaan over HTML CSS JAVASCRIPT PHP en MYSQL. Dit opleiding duurt ook 3 jaar waar je in het eerste jaar veel gaat leren en het 2e jaar op stage gaat en het laatste jaar afrond met een examen. Mijn carrièredoel is om mijn MBO diploma te halen en dan verder studeren in het HBO over Cybersecurity.</p>
         <h3>Ali Shwani</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/Danyelabi.png" alt="">
         <p>Danyel is een enthousiaste 17-jarige student die momenteel de opleiding tot Software Developer volgt bij het Techniek College Rotterdam. Hij heeft altijd al een grote interesse gehad in computers en technologie en wil deze passie graag omzetten in een bloeiende carrière in de softwareontwikkeling.
</p>
         <h3>Danyel Buyukasik</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/Akram.jpeg" alt="">
         <p>Akram is een jonge man van 17 jaar oud, die momenteel de opleiding tot Software Developer volgt bij het Techniek College Rotterdam. Als toekomstig softwareontwikkelaar is hij gepassioneerd door alles wat te maken heeft met programmeren en computerwetenschappen.</p>
         <h3>Akram Daidoune</h3>
      </div>

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

   <div class="credit">&copy; Medemogelijk gemaakt <?= date('Y'); ?> Door <span>Akram Daidoune <br>

</footer>

   <div class="credit">&copy; Medemogelijk gemaakt <?= date('Y'); ?> by <span>Akram <br>

</footer>



<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView:1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>
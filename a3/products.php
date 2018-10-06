<?php
  session_start();
  include_once('tools.php');

  head('Products');
?>
  <body>

    <header>

      <div id = "logobox"><img class  ="logo" src = "../../media/company_logo.png"></div>

    <nav id = "menu">
      <ul>
        <li> <a href = "index.php">Home</a></li>
        <li> <a class active = "active" href = "">Products</a></li>
        <li> <a href = "login.php">Login</a></li>
      </ul>
      <!-- <div>Put website navigation links here</div> -->
    </nav>
  </header>
<div id = "background">
<!-- article means content that is unrelated to the page-->
    <main id = "products">
      <article class = 'Welcome'>
    <h1> PRODUCTS </h1>
  <div>
    <div class = "productbox">
      <img id = "t-shirt" src = '../../media/onepunch_shirt.jpg' alt = 'One-punch man t-shrt'>
    </div>
    <div class = "description">
    <p> One punch man T-shirt</p>
    <p>$20.00</p>
    <a class = btn href = "product.php" id = "p1">View Details</a>
  </div>
    <div class = "productbox">
      <img id = "jumper" src = '../../media/anime jumper.jpg' alt = 'printed jumper'>
    </div>
    <div class = "description">
      <p> Printed jumper of multiple anime characters</p>
      <p> $40.00 </p>
      <a class = btn href = "product.php" id = "p2">View Details</a>
    </div>

    <div class = "productbox">
      <img id = "pants" src = '../../media/dragonball_trackpants.jpeg' alt = 'trackpants'>
    </div>
    <div class = "description">
      <p> Dragonball trackpants</p>
      <p> $35.00 </p>
      <a class = btn href = "product.php" id = "p3">View Details</a>
    </div>
  </div>
      <?php


        $getId = '';
        if (!empty ($_GET['id']) && isset($prices[$_GET['id']]))
          $getId =  htmlentities($_GET['id']);

          for each ($prices as $id => $price){
            if (empty($getId))
              echo "<article>Show $getId product, no form</article>";
            else if($getId == $id)
              echo "<article>Show $getId product with form</article>";
          }


      ?>
      </article>
    </main>
</div>
<?php
  footer();

?>
  </body>
</html>

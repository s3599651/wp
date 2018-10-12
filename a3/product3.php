<?php
  session_start();
  include_once('tools.php');

  head('Product');

  if (isset($_GET['id']) && $_GET['id'] == "p3"){

?>
  <body>

    <header>

      <div id = "logobox"><img class  ="logo" src = "../../media/company_logo.png"></div>

    <nav id = "menu">
      <ul>
        <li> <a class = "active" href = "index.php">Home</a></li>
        <li> <a href = "products.php">Products</a></li>
        <li> <a href = "login.php">Login</a></li>
      </ul>
    </nav>
  </header>
<div id = "background">
    <main>
      <article class = 'Welcome'>
      <h1> T-SHIRT </h1>
      <div class = "productbox_1">
        <img class = "clothing_1" src = '../../media/dragonball_trackpants.jpeg' alt = 'trackpants'>
      <div class = "product_info">
        <p> Dragonball Trackpants</p>
        <hr>
        <p> Grey Trackpants with the Dragonball logo </p>
        <hr>
        <p> $25.50 </p>
        <hr>
        <form method = "post" action = "https://titan.csit.rmit.edu.au/~e54061/wp/processing.php">
        <input type = "hidden" id = "name" name = "id" value = "tshirt0001">
        <p>Quantity</p>
        <!--Got the code for quantity button from https://codepen.io/mtbroomell/pen/yNwwdv  -->
        <input type = 'button' class = "value-button" id = "decrease" onclick = "decreaseValue()" value = "-">
        <input type = "text" id = "number"  name = "qty" value = "1">
        <input type ='button' class = "value-button" id = "increase" onclick = "increaseValue()" value = "+">
        <p>Size</p>
        <div class = "select-size">
          <select id = "size" name= "option">
          <option value="size select">Select Size</option>
          <option value="small">S</option>
          <option value="medium">M</option>
          <option value="large">L</option>
        </select>
        </div>
        <br>
        <input type = "text" class  = "total" disabled>$25.50</p>
        <br>
        <div class = "submitbox"><input type = "submit" value = "Add to Cart"></div>
        </form>
        </div>
      </div>
    </article>
  </main>
</div>

<?php
  footer();
  preshow();
  printMyCode();
?>
  </body>
</html>
<?php
}else{
  header("Location: products.php");
}
?>

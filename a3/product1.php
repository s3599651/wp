<?php
  session_start();
  include_once('tools.php');

  head('Product');


  // $getId = [
  //   "p1" => $25.00,
  //   "p2" => $25.00,
  //   "p3" => $25.00
  //
  // ];
  //
  //   $getId = '';
  //   if (!empty ($_GET['id']) && isset($prices[$_GET['id']]))
  //     $getId =  htmlentities($_GET['id']);
  //
  //     for each ($prices as $id => $price){
  //       if (empty($getId))
  //         echo "<article>Show $getId product, no form</article>";
  //       else if($getId == $id)
  //         echo "<article>Show $getId product with form</article>";
  //     }
  //
  //
  //
  //
  //




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
        <img class = "clothing_1" src = '../../media/onepunch_shirt.jpg' alt = 'One-punch man t-shrt'>
      <div class = "product_info">
        <p> One punch man T-shirt</p>
        <hr>
        <p> Tee from the popular anime series One punch man </p>
        <hr>
        <p> $20.00 </p>
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
        <div class = "submitbox"><input type = "submit" value = "Submit"></div>
        </form>
        </div>
      </div>
    </article>
  </main>
</div>

<?php
  footer();

?>
  </body>
</html>

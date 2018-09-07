<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <title>Assignment 2</title>

    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">
    <!-- <link id = 'javascript' type="text/js" rel="stylesheet" href = "buttons.js"> -->
    <script src='../wireframe.js'></script>
  </head>

  <body>

    <header>

      <div id = "logobox"><img class  ="logo" src = "../../media/company_logo.png"></div>

    <nav id = "menu">
      <ul>
        <li> <a class = "active" href = "index.php">Home</a></li>
        <li> <a href = "products.php">Products</a></li>
        <li> <a href = "login.php">Login</a></li>
      </ul>
      <!-- <div>Put website navigation links here</div> -->
    </nav>
  </header>

<!-- article means content that is unrelated to the page-->
      <main id = "products">
        <article >
      <h1> T-SHIRT </h1>
    <div class = "row">
      <div class = "productbox_1">
        <img id = "t-shirt_1" src = '../../media/onepunch_shirt.jpg' alt = 'One-punch man t-shrt'>
      </div>
      <div class = "product_info">
        <p> One punch man T-shirt</p>
        <hr>
        <p> Tee from the popular anime series One punch man </p>
        <hr>
        <p> $20.00 </p>
        <hr>
        <form method = "post" action = "https://titan.csit.rmit.edu.au/~e54061/wp/processing.php"
        <input type = "hidden" id = "name" name = "ID" value = "tshirt0001">
        <p>Quantity</p>
        <!--Got the code for quantity button from https://codepen.io/mtbroomell/pen/yNwwdv  -->
        <div class = "value-button" id = "decrease" onclick = "decreaseValue()" value = "Decrease Value">-</div>
        <input type = "text" id = "number"  name = "qty" value = "0">
        <div class = "value-button" id = "increase" onclick = "increaseValue()" value = "Increase Value">+</div>
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

    </main>

    <footer class = "pagefooter">
          <div>&copy;<script>
            document.write(new Date().getFullYear());
          </script> Chamila Rendage(s), s3599651(s)</div>
          <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
          <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>
  </body>
</html>

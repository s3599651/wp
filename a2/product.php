<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <title>Assignment 2</title>

    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">
    <link id = 'javascript' type="text/js" rel="stylesheet" href = "buttons.js">
    <link href = "https://fonts.googleapis.com/css?family=Arimo" rel = "stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    <script src='../wireframe.js'></script>
    <script src = 'buttons.js'></script>
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
    </nav>
  </header>
<div id = "background">
    <main>
      <article class = 'Welcome'>
      <h1> T-SHIRT </h1>
      <div class = "productbox_1">
        <img id = "t-shirt_1" src = '../../media/onepunch_shirt.jpg' alt = 'One-punch man t-shrt'>
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

    <footer class = "pagefooter">
          <div>&copy;<script>
            document.write(new Date().getFullYear());
          </script> Chamila Rendage(s), s3599651(s)</div>
          <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
          <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>
  </body>
</html>

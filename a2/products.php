<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <title>Assignment 2</title>

    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">
    <script src='../wireframe.js'></script>
  </head>

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

<!-- article means content that is unrelated to the page-->
    <main id = "products">
      <article >
    <h1> PRODUCTS </h1>
  <div class = "row">
    <div class = "productbox">

      <a href = "index.php"><img id = "t-shirt" src = '../../media/onepunch_shirt.jpg' alt = 'One-punch man t-shrt' ></a>
    </div>
    <p> One punch man T-shirt</p>
    <p> $20.00 </p>
    <div class = "productbox">
      <img id = "jumper" src = '../../media/anime jumper.jpg' alt = 'printed jumper'>
    </div>
    <div class = "productbox">
      <img id = "pants" src = '../../media/dragonball_trackpants.jpeg' alt = 'trackpants'>
    </div>
  </div>
      </article>
    </main>

    <footer>
      <div>&copy;<script>
        document.write(new Date().getFullYear());
        </script> Chamila Rendage(s), s3599651(s)</div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>

  </body>
</html>

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
      <a href = "product.php"><img id = "t-shirt" src = '../../media/onepunch_shirt.jpg' alt = 'One-punch man t-shrt'></a>
    </div>
    <div class = "description">
    <p> One punch man T-shirt</p>
    <p>$20.00</p>
  </div>
    <div class = "productbox">
      <img id = "jumper" src = '../../media/anime jumper.jpg' alt = 'printed jumper'>
    </div>
    <div class = "description">
      <p> Printed jumper of multiple anime characters</p>
      <p> $40.00 </p>
    </div>

    <div class = "productbox">
      <img id = "pants" src = '../../media/dragonball_trackpants.jpeg' alt = 'trackpants'>
    </div>
    <div class = "description">
      <p> Dragonball trackpants</p>
      <p> $35.00 </p>
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

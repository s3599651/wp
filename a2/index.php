<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <title>Assignment 2</title>

    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    <link href = "https://fonts.googleapis.com/css?family=Arimo" rel = "stylesheet">
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
  <div id = "background">
    <main>
      <article class='Welcome'>
        <h1> Welcome to Anime-Merch</h1>
        <div class = "info">
          <p id = "Intro">Welcome to Anime-Merch. If your looking for the best anime-merchandise, you have come to the best place.            We have a range of clothing including jumpers, pants, tees and many more! You can find our clothing options
            on our product page. We pride ourselves on giving our customers the best value for money.</p>
        </div>
        <br>
        <br>
        <div id = "catalog">
          <h2>Clothing from Animes such as:</h2>
          <div class = "animebox1">
            <img class = "animelogo" src = '../../media/naruto.png' alt = 'naruto'>
          </div>
          <div class = "animebox2">
            <img class = "animelogo" src = '../../media/One_Piece.jpg' alt = 'onepiece'>
          </div>
          <div class = "animebox3">
            <img class = "animelogo" src = '../../media/hunterxhunter.jpg' alt = 'HunterXHunter'>
          </div>
          <div class = "animebox4">
            <img class = "animelogo" src = '../../media/Dragon_Ball_Super.jpg' alt = 'dragonballsuper'>
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

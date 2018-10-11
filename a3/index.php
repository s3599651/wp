<?php
  session_start();
  include_once('tools.php');

  head('Index');
?>
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
    <style>
      <?php
        // This PHP code inserts CSS to style the "current page" link in the nav area
        $here = $_SERVER['SCRIPT_NAM E'];
        $bits = explode('/',$here);
        $filename = $bits[count($bits)-1];
        echo "nav a[href$='$filename'] {
        box-shadow: 1px 1px 1px 2px navy;
      }";
      ?>

    </style>


  <body>

    <header>
      <div id = "background">
        <main>
          <article class='Welcome'>
            <h1> Welcome to Anime-Merch</h1>
            <div class = "info">
              <p id = "Intro">Welcome to Anime-Merch. If your looking for the best anime-merchandise, you have come to the best place.            We have a range of clothing including jumpers, pants, tees and many more! You can find our clothing options
                on our product page. We pride ourselves on giving our customers the best value for money.</p>
            </div>
            <hr>
            <h2>Clothing from Animes such as:</h2>
            <div id = "catalog">
              <div class = "animebox">
                <img class = "animelogo" src = '../../media/naruto.png' alt = 'naruto'>
              </div>
              <div class = "animebox">
                <img class = "animelogo" src = '../../media/One_Piece.jpg' alt = 'onepiece'>
              </div>
              <div class = "animebox">
                <img class = "animelogo" src = '../../media/hunterxhunter.jpg' alt = 'HunterXHunter'>
              </div>
              <div class = "animebox">
                <img class = "animelogo" src = '../../media/Dragon_Ball_Super.jpg' alt = 'dragonballsuper'>
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

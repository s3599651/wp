<?php
  session_start();
  include_once('tools.php');

  head('Login');
?>

  <body>

    <header>
        <div id = "logobox"><img class  ="logo" src = "../../media/company_logo.png"></div>


      <div id = "navigation">
      <nav>
        <ul>
          <li> <a href = "index.php">Home</a></li>
          <li> <a href = "products.php">Products</a></li>
          <li> <a class = "active" href = "login.php">Login</a></li>
        </ul>
      </nav>
    </div>
    </header>
<div id = "background">
    <main>
      <article id= "loginform">
        <form class = "logform" id= "login" method = "post" action = "https://titan.csit.rmit.edu.au/~e54061/wp/processing.php">
          <h2>User Login</h2>
          <div class = "emailholder"><label for="Email"> Email address: </label></div>
        <div class = "emailbox"><input type = "email" name= "email" id ="Email" value="" placeholder= "Email Address" required></div>
          <br>
          <div class = "passwordholder"><label for = "Pass">Password:</lablel></div>

          <div class = "passwordbox"><input type = "password" id ="pass" name = "password"></div>
          <br>
        <div class = "submitbox"><input class = "loginsubmit" type = "submit" value = "Submit"></div>

        </form>
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

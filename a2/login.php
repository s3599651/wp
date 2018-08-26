<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <title>Assignment 2</title>

    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">
    <link href = "https://fonts.googleapis.com/css?family=Arimo" rel = "stylesheet">
    <script src='../wireframe.js'></script>
  </head>

  <body>

    <header>
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

    <main>
      <article id= "loginform">
        <form class = "logform" id= "login" method = "post" action = "https://titan.csit.rmit.edu.au/~e54061/wp/processing.php">
          <h2>User Login</h2>
          <div class = "emailholder"<label for="Email"> Email address: </label></div>
          <input type = "email" name= "email" id ="email" value="" placeholder= "Email Address" required><br>
          <div class = "passwordholder"><label for = "Pass">Password:</lablel></div>
          <input type = "password" id name = "password" placeholder = "required"><br>
          <input class = "loginsubmit" type = "submit" value = "Submit">

        </form>
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

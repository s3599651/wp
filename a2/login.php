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
      <div>Put company logo and name here</div>
    </header>

    <nav>
      <ul>
        <li> <a href = "index.php">Home</a></li>
        <li> <a href = "products.php">Products</a></li>
        <li> <a class = "active" href = "login.php">Login</a></li>
      </ul>
      <!-- <div>Put website navigation links here</div> -->
    </nav>

    <main>
      <article id='loginmenu'>
        <form class = "form" id= "contact" method = "post" action = "https://titan.csit.rmit.edu.au/~e54061/wp/processing.php">
          <label for="Email"> Email address: </label> <input type = "email" name= "emailad" id ="email" value="" placeholder= "Email Address" required><br>
          <label for = "password">Password:</lable><input type = "password" id name = "passwordlad" placeholder = "required"><br>
          <input type = "submit" value = "Submit">
          <!-- <input type = "reset" value = "Reset Buttom">
          <input type = "button" value = "Hi Button!"> -->
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

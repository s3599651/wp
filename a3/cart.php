<?php
  session_start();
  include_once('tools.php');

  head('Cart');

  if (isset($_POST['add'], $_POST['id'], $_POST['qty'], $_POST['oid'])) {
    // server side code is required here to validate and check if
    //  - qty is a positive integer (ie 1 or more)
    //  - product/service and option ids are valid
    $_SESSION['cart'][$id]['oid'] = $oid;
    $_SESSION['cart'][$id]['qty'] = $qty;
    // redirection BEFORE any HTML is outputted
    header("Location: cart.php");
  }

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

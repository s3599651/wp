<?php
  session_start();
  include_once('tools.php');

  head('Product');

$firstname = "";
$email = "";
$address = "";
$city = "";
$state = "";
$postcode = "";
$cardname = "";
$cardnumber = "";
$expmonth = "";
$cvv = "";
$expyear = "";


if ($_SERVER["REQUEST_METHOD"] == "POST"){
  $firstname = test_input($_POST["firstname"]);
  $email = test_input($_POST["email"]);
  $address = test_input($_POST["address"]);
  $city = test_input($_POST["city"]);
  $state = test_input($_POST["state"]);
  $postcode = test_input($_POST["postcode"]);
}

function test_input($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}





?>



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
        <!-- <div class = "row">
          <div class = "col-75">
            <div class = "container"> -->
              <form method = "post" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <div class = "row">
                  <div class = "col-50">
                    <h3>Billing Address</h3>
                    <label for ="fname"><i class = "fa-user"></i>Full Name</label>
                    <input type = "text" id = "fname" name = "firstname" placeholder = "Name" required>
                    <label for = "email"><i class = "fa-email"></i>Email</label>
                    <input type = "text" id = "email" name = "email" placeholder = "john@example.com" required>
                    <label for = "adr"><i class = "fa-address"></i>Address</label>
                    <input type = "text" id ="adr" name = "address" required>
                    <label for = "city"><i class = "fa-institution"></i>City</label>
                    <input type = "text" id = "city" name = "city" placeholder = "Melbourne" required>

                    <div class = "row">
                      <div class = "col-50">
                        <label for = "state">State</label>
                        <input type = "text" id = "state" name = "state" placeholder = "VIC" required>
                      </div>
                      <div class  = "col-50">
                        <label for = "Postcode">Postcode</label>
                        <input type = "text" id = "postcode" name = "postcode" placeholder = "1234" required>
                      </div>
                    </div>
                  </div>

                  <div class = "col-50">
                    <h3>Payment</h3>
                    <label for = "fname"> Accepted Cards</label>
                    <div class = "icon-container">
                      <i class = "fa-visa"></i>
                      <i class = "fa-mastercard"></i>
                    </div>

                    <label for = "cname">Name on Card</label>
                    <input type = "text" id = "cname" name = "cardname" required>
                    <label for = "ccnum"> Credit card number</label>
                    <input type = "text" id = "ccnum" name = "cardnumber" placeholder = "XXXX-XXXX-XXXX-XXXX" required>
                    <label for = "expmonth">Exp Month</label>
                    <input type = "text" id = "expmonth" name = "expmonth" required>
                    <label for = "cvv">CVV</label>
                    <input type = "text" id = "cvv" name = "cvv" required>
                    <div class = "row">
                      <div class = "col-50">
                        <label for = "expyear">Exp Year</label>
                        <input type = "text" id = "expyear" name = "expyear" required>
                      </div>

                      </div>
                    </div>
                  </div>

                </div>

                <label>

                  <input type = "submit" value = "Continue to checkout" class = "btn">

                </form>

    </article>
  </main>
</div>

<?php
  footer();

?>
  </body>
</html>

<?php
  session_start();
  include_once('tools.php');

  head('Product');
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
              <form action = "">
                <div class = "row">
                  <div class = "col-50">
                    <h3>Billing Address</h3>
                    <label for ="fname"><i class = "fa-user"></i>Full Name</label>
                    <input type = "text" id = "fname" name = "firstname" placeholder = "Name">
                    <label for = "email"><i class = "fa-email"></i>Email</label>
                    <input type = "text" id = "email" name = "email" placeholder = "john@example.com">
                    <label for = "adr"><i class = "fa-address"></i>Address</label>
                    <input type = "text" id ="adr" name = "address">
                    <label for = "city"><i class = "fa-institution"></i>City</label>
                    <input type = "text" id = "city" name = "city" placeholder = "Melbourne">

                    <div class = "row">
                      <div class = "col-50">
                        <label for = "state">State</label>
                        <input type = "text" id = "state" name = "state" placeholder = "VIC">
                      </div>
                      <div class  = "col-50">
                        <label for = "Postcode">Postcode</label>
                        <input type = "text" id = "postcode" name = "postcode" placeholder = "1234">
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
                    <input type = "text" id = "cname" name = "cardname">
                    <label for = "ccnum"> Credit card number</label>
                    <input type = "text" id = "ccnum" name = "cardnumber" placeholder = "XXXX-XXXX-XXXX-XXXX">
                    <label for = "expmonth">Exp Month</label>
                    <input type = "text" id = "expmonth" name = "expmonth">

                    <div class = "row">
                      <div class = "col-50">
                        <label for = "expyear">Exp Year</label>
                        <input type = "text" id = "expyear" name = "expyear">
                      </div>

                      <div class = "col-50">
                        <label for = "cvv">CVV</label>
                        <input type = "text" id = "cvv" name = "cvv">
                      </div>
                    </div>
                  </div>

                </div>

                <label>
                  <input type = "checkbox" checked = "checked" name = "sameadr"> Shipping address same as billing </label>
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

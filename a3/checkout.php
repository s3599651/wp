<?php
  session_start();
  include_once('tools.php');

  head('Product');

$fullname = "";
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

$fullnameERR = "";
$emailERR = "";
$addressERR = "";
$cityERR = "";
$stateERR = "";
$postcodeERR = "";
$cardnameERR = "";
$cardnumberERR = "";
$expmonthERR = "";
$cvvERR = "";
$expyearERR = "";



if ($_SERVER["REQUEST_METHOD"] == "POST"){
  if (empty($_POST["fullname"])){
    $firstnameERR = "Please enter your firstname";
  }else{
    $firstname = test_input($_POST["fullname"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$fullname)){
      $fullnameERR = "Only letters and white space allowed";
    }
  }
  if (empty($_POST["email"])){
    $emailERR = "Please enter your email";
  }else{
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
      $emailERR = "Invalid email format";
    }
  }
  if (empty($_POST["address"])){
    $addressERR = "Please enter your address";
  }else{
    $address = test_input($_POST["address"]);
    if(!preg_match("/^(?:\\d+ [a-zA-Z ]+, ){2}[a-zA-Z ]+$/", $address)){
      $addressERR = "Please enter a valid address";
    }
  }
  if (empty($_POST["city"])){
    $cityERR = "Please enter your city";
  }else{
    $city = test_input($_POST["city"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$city)){
      $cityERR = "Only letters allowed";
    }
  }
  if (empty($_POST["state"])){
    $stateERR = "Please enter your state";
  }else{
    $state = test_input($_POST["state"]);
    if(!preg_match("/^(\\d\{3\}\)/$"). $state){
      $stateERR = "Enter a valid state";
    }
  }
  if (empty($_POST["postcode"])){
    $postcodeERR = "Please enter your postcode";
  }else{
    $postcode = test_input($_POST["postcode"]);
    }

  if (empty($_POST["cardname"])){
    $cardnameERR = "Please enter the cardname";
  }else{
    $cardname = test_input($_POST["cardname"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$cardname)){
      $cardnameERR = "Only letters and white space allowed";
    }
  }
  if (empty($_POST["cardnumber"])){
    $cardnumberERR = "Please enter a card number";
  }else{
    $cardnumber = test_input($_POST["cardnumber"]);
  }
}
//code for cardnumber validation => http://www.learningaboutelectronics.com/Articles/How-to-validate-a-credit-card-number-using-PHP.php
$submitbutton = $_POST['submitbutton'];
$number = $_POST['number_entered'];

function validatecard($number){
  global $type;

  $cardtype = array(
    "visa" => "/^4[0-9]{12}(?:[0-9]{3})?$/",
    "mastercard" => "/^5[1-5][0-9]{14}$/",
  );

  if (preg_match($cardtype["visa"], $number)){
    $type = "visa";
    return "visa";
  }else if (preg_match($cardtype["mastercard"],$number)) {
    $type = "mastercard";
    return "mastercard";
  }else {
    return false;
  }

}
validatecard($number);







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
                    <!--To show the values in the input fields after the user hits the submit button -->
                    <input type = "text" id = "fname" name = "fullname" value = "<?php echo $fullname;?>"placeholder = "Name" required>
                    <span class = "error">*<?php echo $fullnameERR;?></span>
                    <br><br>
                    <label for = "email"><i class = "fa-email"></i>Email</label>
                    <input type = "text" id = "email" name = "email" value = "<?php echo $email;?>" placeholder = "john@example.com" required>
                    <span class = error>*<?php echo $emailERR; ?></span>
                    <br><br>
                    <label for = "adr"><i class = "fa-address"></i>Address</label>
                    <textarea id ="adr" name = "address" rows = "5" col = "40"value = "<?php echo $address;?>" required><?php echo $addressERR?></textarea>

                    <br><br>
                    <label for = "mobile"><i class = "mobile-phone"></i>Mobile Phone</label>
                    <input type = "text" id ="mobile" name = "mobilephone" required>
                    <label for = "city"><i class = "fa-institution"></i>City</label>
                    <input type = "text" id = "city" name = "city"  value = "<?php echo $city;?>" placeholder = "Melbourne" required>
                    <span class = error>*<?php echo $cityERR?></span>
                    <br><br>
                    <div class = "row">
                      <div class = "col-50">
                        <label for = "state">State</label>
                        <input type = "text" id = "state" name = "state" value = "<?php echo $state;?>" placeholder = "VIC" required>
                        <span class = error>*<?php echo $stateERR?></span>
                        <br><br>
                      </div>
                      <div class  = "col-50">
                        <label for = "Postcode">Postcode</label>
                        <input type = "text" id = "postcode" name = "postcode" value = "<?php echo $postcode;?>" placeholder = "1234" required>

                        <br><br>
                      </div>
                    </div>
                  </div>

                  <div class = "col-25">
                    <h3>Payment</h3>
                    <label for = "fname"> Accepted Cards</label>
                    <div class = "icon-container">
                      <i class = "fa-visa"></i>
                      <div class = card_img><img class = "visa" id = "visa" src = "../../media/visa.png"></div>
                      <i class = "fa-mastercard"></i>
                      <div class = card_img><img class = "mastercard" id = "mastercard" src = "../../media/mastercard.jpg"></div>
                    </div>

                    <label for = "cname">Name on Card</label>
                    <input type = "text" id = "cname" name = "cardname" value = "<?php echo $cardname;?>"required>
                    <label for = "cnum">Card number</label>
                    <input id ="number_entered"  type = "text" name = "cardnum" value = <?php if($submitbutton){echo "$number";}?>/>
                    <?php
                      if($submitbutton)
                      {
                        if(validate($number)!== false){
                          echo "<green>$type detected. credit card number is valid</green>";

                        }else{
                          echo "<red>This credit card number is invalid </red>";
                        }
                      }
                    ?>

                    <br><br>
                    <div class = "form-group" id = "exp-date">
                    <label>Expiraiton Date</label>
                    <select>
                      <option value = "01">Jan</option>
                      <option value = "02">Feb</option>
                      <option value = "03">Mar</option>
                      <option value = "04">Apr</option>
                      <option value = "05">May</option>
                      <option value = "06">Jun</option>
                      <option value = "07">Jul</option>
                      <option value = "08">Aug</option>
                      <option value = "09">Sep</option>
                      <option value = "10">Oct</option>
                      <option value = "11">Nov</option>
                      <option value = "12">Dec</option>
                    </select>
                    <select>
                      <option value = "18">2018</option>
                      <option value = "19">2019</option>
                      <option value = "20">2020</option>
                      <option value = "21">2021</option>
                      <option value = "22">2022</option>
                      <option value = "23">2023</option>
                    </select>
                  </div>

                    <div class = "row">
                      <div class = "col-25">

                      </div>
                      <label>


                      </div>
                    </div>
                  </div>
                  <input type = "submit" id = "submitbutton" value = "Continue to checkout" class = "btn">
                  </form>
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

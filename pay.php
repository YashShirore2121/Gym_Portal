<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
</head>
<body>
  
  <form action="manager.php" method="post">
  <?php
  
  echo" 
  <h1>Payment</h1>
  <hr>
  <br>

  <legend>Subscription </legend>
  <br>
  <input type=radio name=subcritpion value=1month>1 month</input>
  <br>
  <input type=radio name=subcritpion value=6month>6 month</input>
  <br>
  <input type=radio name=subcritpion value=1year>1 year</input>
  <br>
  <br>

  <legend>Payment type </legend>
  <br>
  <input type=radio name=payment value=offline required>offline</input>
  <br>
  <input type=radio name=payment value=online required>online</input>
  <br>
  
  <img src=code.jpg   width=350>
 <br>
 <br>
  <input type=submit value=Register>
    
   
  ";  
  ?>
  </form>
  
</body>
</html>
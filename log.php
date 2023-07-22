<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Login</title>
</head>
<link rel="stylesheet" href="style.css"> 
<script language="javascript">
			function validate() {
				var myForm = document.form1;
			}
			
			function isCharKey(evt) {
         		var charCode = (evt.which) ? evt.which : event.keyCode
         		if((charCode < 97 || charCode > 123) && (charCode < 65 || charCode > 91))
            		return false;
				else
					return true;
			}
			//-->

		
			function isNumKey(evt) {
         		var charCode = (evt.which) ? evt.which : event.keyCode
         		if(charCode < 48 || charCode > 57)
            		return false;
				else
					return true;
			}
		
		</script>
<style>
   *{
    box-sizing: border-box;
    background-color: rgb('#a8a69a');
    color: #f9f5f5;
} 
textarea,input{
  background-color: #999999;
}
html {
    overflow-y: scroll;
}
    label
    {
                width: 180px;
                display: inline-block;
                margin-left: 35px;
                font-size :16px;
                font-weight:bold;
    }
    .int{
                padding: 4px;
                margin-left: 35px;
                margin-top: 10px;
                font-size: 13px;
                border-radius: 0px;
                border: 1px solid #f9f9f9;
                width:6cm;
                height:0.7cm;
    }
  .form{
    
   background-attachment: fixed;
   position:relative;
   background-color:#272531;
    max-width:600px;
    margin:30px auto;
    border-radius:10px;
    box-shadow:0 4px 10px 4px rgba(#f3f6f4,.3);
    height: 100%;
  }
  body {
    /* background: #8B008B; */
    font-family: 'Titillium Web', sans-serif;
    background-image: url('gyms3.jpg');
    background-size: cover;   
  }
  .payment{
    text-align: center;
    background: #552ca4;
    color:white;


  }
  form{
    padding: 30px 30px;
  }
  .group {
    background-color: moccasin;
  }
  .background{
    position : absolute;
    top:0;
    left:0;
    height:100%;
    width:100%;
    /* background-image : url('gymreg.jpg'); */
    opacity:.5;
    z-index:1;
    background-size:cover;
  }
  img {
        border: 1px solid #ddd;
        border-radius: 4px;
        padding: 5px;
        width: 150px;
      }
   .content{
    position:relative;
    z-index:3;
   }
   .register{
    display:flex;
    background-attachment: fixed;
    background-color: #552ca4;
    text-align: center;
    color:white;
    width:100%; 
    height: 120px;
    border-radius:10px;
    justify-content: center;
    align-items : center;
   }
   .btn{
    width:100%;
        margin-top: 30px;
        padding:10px ;
        cursor:pointer;
        background-color: #552ca4;
        color:#fff;
        border:0;
        font-size: 15px;
        font-weight: bold;
        border-radius: 5px;
   }
</style>

<body>
<?php include "header.php" ?>
<?php
$con=mysqli_connect("localhost","root","","gym");

if(isset($_POST['name'])){
  $name=$_POST["name"];
  $Email=$_POST["Email"];
  $gender=$_POST["gender"];
  $mobileno=$_POST["mobileno"];
  $date=$_POST["date"];
  $address=$_POST["address"];
  $sub = $_POST["subscription"];
  $payment = $_POST["payment"];
  $edate = date("Y-m-d",strtotime(date("Y-m-d", strtotime($date)) . " +".$sub));
  
  $query="INSERT INTO registration(name,email,gender,mobile,date,edate,address,subscription,payment) values('$name','$Email','$gender','$mobileno','$date','$edate','$address','$sub','$payment')";
  if (mysqli_query($con, $query)) {
    include('toast.php');
 } else {
    echo "Error: " .mysqli_error($con);
 }
}
mysqli_close($con);
?>
  <div class="form">
    <div class="register">
    <h1> Register </h1>
    </div>
    <hr>

    <form  method=post>
    <div class="background">
    </div>

    
 
    <?php
   
    echo "
    <div class='content'>
    
       <br>
       
      <label> Full Name:</label> <input type=name  class=int name=name  placeholder= First_name onkeypress='return isCharKey(event)' required>  
      
      <br>
      <br>
      <label> Enter your  Email: *</label> <input type=Email class=int name=Email required s>
      <br>
      <br>
      <label> Enter your Age : </label> <input type=text class=int name=ageplaceholder=age...  onkeypress='return isNumKey(event)'  required >
      <br>
      <br>
      <label>Gender *</label>
    
      Male <input type=radio name=gender value=Male id=male required> Female<input type=radio name=gender value=Female id=female required>
  </p>
 <br>
 
 <label> Enter your  Mobile no.: *</label> <input type=tel class=int name=mobileno  placeholder=Enter.mobile onkeypress='return isNumKey(event)' required>
      <br>
      <br>
      <label>
        Start Date: * </label><input type=date name=date class=int id=start_date required>
      <br>
      <br>
      <label> Address :</label> <textarea name=address class=int id=address cols=40 rows=4 placeholder=Enetr your address..></textarea> 
      <br>
      <br>
      
      
      <br>
      <header class=payment> <h1>Payment</h1> </header>
  <hr>
  <br>

  <legend>Subscription </legend>
  <br>
  <input type=radio name=subscription value='1 month'>1month</input>
  <br>
  <input type=radio name=subscription value='6 month'>6month</input>
  <br>
  <input type=radio name=subscription value='1 year'>1year</input>
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
 <button type=submit class=btn>Submit</button>
 <div class=popup id=popup>
     <img src=tick.jpg>
     <h2>Thank You!</h2>
     <p>You are successfully registered.</p>
     <button type=button onclick=closePopup()>OK</button>
 </div>
 ";
 ?>
 <script>
     let popup =document.getElementById("popup");
     function openPopup()
     {
         popup.classList.add("open-popup");
     }
     function closePopup()
     {
         popup.classList.remove("open-popup");
     }
 </script>
    </form>
    </div>
</body>

</html>
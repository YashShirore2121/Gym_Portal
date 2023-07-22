<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <script language="javascript">
        function validate()
        {
            var val=true;
            var names=document.forms['myform']['name'].value;
            var Pass=document.forms['myform']['password'].value;
            if(names=="admin")
            {
                if(Pass=='abc123')
                {
                    alert('login successful');
                    return val;
                }
                else{
                    alert('Invalid Username or password');
                    val=false;
                    return val;
                }
            }
            else{
                alert('Invalid Username or Password');
                    val=false;
                    return val;
            }
        }
        
    </script>
    <style>
        
        body
        {
    
            background-image: url('gyms1.jpg');
            background-repeat:no-repeat;
            background-attachment:fixed;
            background-size: cover;
            align-items: center;
            display: grid;
            margin: 10%;
            padding: 0%;
            
            

        }
        
        label
        {
            width: 160px;
            display: inline-block;
            margin-left: 35px;
            font-size :16px;
            font-weight:bold;
        }
       
        .container
        {
            margin-top:50px ;
            margin-left: auto;
            margin-right: auto;
            border: 10px;
            border-radius: 20px;
            border-color: black;
            background-color: rgb(162, 182, 172);
            width: 350px;
            height: 300px;      
            padding: 30px 20px;      
        }
        input{
            padding: 4px;
            margin-left: 35px;
            margin-top: 10px;
            font-size: 13px;
            border-radius: 10px;
            border: 1px solid #f9f9f9;
            width:6cm;
            height:0.7cm;
        }
        
        input#submit
        {
            
            margin-top: 4px;
            
            display:grid;
           position: relative;
            height: 25px;
            width: 75%;
            color: white;
            font-weight: bold;
            padding:4px;
            text-align: center;

            background-color: dodgerblue;
        }
        

        </style>
</head>
<body>
<?php include "header.php" ?>
<form action="dashbord.php" name="myform"  onsubmit="return validate()" method="post" >
    <div class="container">
    <?php
    
    echo"
   
    <label>Username </label>
    <br>
    <input type=text name=name placeholder='Enter your Username'  required>
    <br><br>
    <label>Password  </label>
    <br>
    <input type=password name=password placeholder='Enter your Password' required>
    <br><br>
    <br>
    <input type=submit value=Login id=submit >";
    
    ?>
    
    </div>
</body>
</html>
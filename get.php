<html>

<head></head>
<style>
    body {
        background-color: white;

    }

    h1 {
        text-align: center;
        color: orange;

    }

    label {
        width: 100px;
        display: inline-block;
        margin: 4px;
        font-size: 16px;
        font-weight: bold;
    }

    .container {

        position: absolute;
        
        margin: 20px 400px;
        background-color: rgb(96, 99, 99);
        border: 10px solid orange;

        border-radius: 20px;
        padding: 10px 40px;
        width: 450px;
        height: 630px;

    }

    input {
        padding: 5px;
        margin: 5px;
        font-size: 16px;
        border-radius: 10px;
        border: 1px solid #f9f9f9;
        width: 7cm;
    }

    input#submit {

        margin-top: 7px;
        display: grid;
        position: relative;
        height: 40px;
        width: 50%;
        color: white;
        font-weight: bold;
        padding: 4px;
        text-align: center;
        background-color: dodgerblue;
    }

    input#submit:hover {
        background-color: green;
        color: #f9f9f9;
    }
</style>

<body>
    <form action=save.php method="POST">
        <div class="container">

            <?php

            $con = mysqli_connect("localhost", "root", "", "gym");
            $x = htmlspecialchars($_GET['id']);


            $q = "select * from registration where id=$x";
            $res = mysqli_query($con, $q);


            while ($line = mysqli_fetch_assoc($res)) {
                $id = $line['id'];
                $name = $line['name'];
                $e = $line['email'];
                $sd = $line['date'];
                $g = $line['gender'];
                $no = $line['mobile'];
                $add = $line['address'];
            }
            echo "<h1>Update Profile</h1><br><br>";
            echo " 
<label>ID :</label>
<input type=number name=id value=$id readonly>
<br><br>
<label>Name :</label>
<input type=text name=name value=$name>
<br>
<br>
<label> Email id:</label>
<input type=Email name=Email value=$e>
<br>
<br>
<label>Date :</label> <input type=date name=Start value=$sd >
<br><br>
<label> Gender :</label>

<input type=text name=Gender value=$g > 

<br>
<br>
<label> Mobile no :</label> <input type=tel name=Mobile value=$no>

<br>
<br>
<label> Address :</label><textarea name=address id=address cols=40 rows=4 placeholder=Enter your address..></textarea>
<br><br>
<input type=submit value=Update id=submit>
    
    
    
      ";
            mysqli_close($con);
            ?>

        </div>

    </form>
</body>

</html>
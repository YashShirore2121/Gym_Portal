<html>
<head> <title>update</title>
<script type="text/javascript">
function delayer()
{
        alert("The entry is saved");
        window.location = "show.php";
    
}
</script>
</head>
<body onLoad="setTimeout('delayer()',1000)">

    <?php
    include "connects.php";
    $con=conn();
    $id=1;
    $name=$_POST['name'];
    $email=$_POST['Email'];
    $startdate=$_POST['Start'];
    
    $gender=$_POST['Gender'];
    $no=$_POST['Mobile'];
    $q="INSERT INTO users (Names,Email,Startdate,Gender,Mobileno) values('$name','$email','$startdate','$gender',$no)";
    mysqli_query($con,$q); 
    close();
    ?>


</body>
</html>
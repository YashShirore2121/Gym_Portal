<html>
<head> <title>updated data</title>
<script type="text/javascript">
function delayer()
{
        alert("deleted successfully");
        window.location = "connection.php";
    
}
</script>
</head>
<body onLoad="setTimeout('delayer()',1000)">
<h3> Saving Entry</h3>
<?php
$con=mysqli_connect("localhost","root","","gym");
$x=htmlspecialchars($_GET['id']);

$q="DELETE FROM registration where id=$x";
mysqli_query($con,$q);
mysqli_close($con);
?>
</body>
</html>
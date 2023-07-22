<html>
    <head>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
  <link rel="stylesheet" href="./navbar.css">
  <script defer  src="./script.js"></script>
  <link rel="stylesheet" href="./table.css"/>
</head>
<body>
  <?php include('navbar.php')?>
</body>
<?php
$con=mysqli_connect("localhost","root","","gym");
if($con)
{
    $query = " SELECT * FROM registration where Subscription='1 year'";
$result=mysqli_query($con,$query);
$cnt=mysqli_num_rows($result);

if($cnt>0)
{
    ?>
    <div class="container">
  <table class="responsive-table">
    
    <thead>
    <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Gender</th>
                            <th scope="col">MobileNo</th>
                            <th scope="col">StartDate</th>
                            <th scope="col">EndDate</th>
                            <th scope="col">Address</th>
                            <th scope="col">Subscription</th>
                            <th scope="col">Payment</th>
                            <th scope="col">Delete</th>
                            <th scope="col">Edit</th>
      </tr>
    </thead>
    <tbody>

    <?php
    while($line=mysqli_fetch_assoc($result))
    {
        $elink="<a href=get.php?id=".$line['id'].">Update</a>";
        $dlink="<a href=delete.php?id=".$line['id'].">Delete</a>";
        ?>
         <tr>
                                <td class="table-data">
                                    <?php echo $line['id']; ?>
                                </td>
                                <td class="table-data">
                                <?php echo $line['name']; ?>
                        </td>
                                <td class="table-data">
                                    <?php echo $line['email']; ?>
                        </td>
                                <td class="table-data">
                                    <?php echo $line['gender']; ?>
                        </td>
                                <td class="table-data">
                                    <?php echo $line['mobile']; ?>
                        </td>
                                <td class="table-data">
                                    <?php echo $line['date']; ?>
                        </td>
                                <td class="table-data">
                                    <?php echo $line['edate']; ?>
                        </td>
                                <td class="table-data">
                                    <?php echo $line['address']; ?>
                        </td>
                                <td class="table-data">
                                    <?php echo $line['subscription']; ?>
                        </td>
                                <td class="table-data">
                                    <?php echo $line['payment']; ?>
                        </td>
                                <td class="table-data">
                                    <?php echo $elink; ?>
                        </td>
                                <td class="table-data">
                                    <?php echo $dlink; ?>
                        </td>
                        </tr>
      </tr>
    <?php
    }
    
}
}
else{
    die('Connection failed'.mysqli_error($con));
}

mysqli_close($con);
?>    </tbody>
</table>
</div>
    </html>

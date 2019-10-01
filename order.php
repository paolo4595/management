<?php 
session_start();
error_reporting(1);
include('connection.php');
$eid=$_SESSION['create_account_logged_in'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>La Velle</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="css/style.css"rel="stylesheet"/>
 <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="margin-top:50px;">
  <?php
  include('Menu Bar.php');
  ?>
<div class="container-fluid"><!--Primary Id-->
  <h1 class="text-center text-primary">[ Reservation Details ]</h1><br>
  <div class="container">
    <div class="row">
        <table class="table table-striped table-bordered table-hover table-responsive"style="height:150px;">
               <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile Number</th>
                    <th>Address</th>
                    <th>Country</th>
                    <th>Service Type</th>
                    <th>Reservation Date</th>
                    <th>Reservation Time</th>
                    <th>Cancel</th>
               </tr>

<?php 
$sql= mysqli_query($con,"select * from service_reservation_details where email='$eid'"); 
while($result=mysqli_fetch_assoc($sql))
{
$oid=$result['id'];
echo "<tr>";

echo "<td>".$result['name']."</td>";
echo "<td>".$result['email']."</td>";
echo "<td>".$result['phone']."</td>";
echo "<td>".$result['address']."</td>";
echo "<td>".$result['country']."</td>";
echo "<td>".$result['service_type']."</td>";
echo "<td>".$result['reservation_date']."</td>";
echo "<td>".$result['reservation_time']."</td>";
echo "<td><a href='cancel_reservation.php?order_id=$oid' style='color:Red'>Cancel</a></td>";
echo "</tr>";
}                         
?> 
          </table>

    </div>
    </div>
  </div>
<?php
include('Footer.php')
?>
</body>
</html>


<table class="table table-bordered table-striped table-hover">
	<h1>Service Reservation Details</h1><hr>
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Email</th>
		<th>Mobile Number</th>
		<th>Address</th>
		<th>City</th>
		<th>State</th>
		<th>Zip</th>
		<th>Service Type</th>
		<th>Reservation Date</th>
		<th>Reservation Time</th>
		<th>Cancel Reservation</th>
	</tr>

<?php 
$i=1;
$sql=mysqli_query($con,"select * from service_reservation_details");
while($res=mysqli_fetch_assoc($sql))
{
$oid=$res['id'];

?>
<tr>
		<td><?php echo $i;$i++; ?></td>
		<td><?php echo $res['name']; ?></td>
		<td><?php echo $res['email']; ?></td>
		<td><?php echo $res['phone']; ?></td>
		<td><?php echo $res['address']; ?></td>
		<td><?php echo $res['city']; ?></td>
		<td><?php echo $res['state']; ?></td>
		<td><?php echo $res['zip']; ?></td>
		<td><?php echo $res['service_type']; ?></td>
		<td><?php echo $res['reservation_date']; ?></td>
		<td><?php echo $res['reservation_time']; ?></td>
		<td><a style="color:red" href="cancel_reservation.php?booking_id=<?php echo $oid; ?>">Cancel</a></td>
	</td>
	</tr>
<?php 	
}

?>	
</table>
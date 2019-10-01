
<table class="table table-bordered table-striped table-hover">
	<h1 >Customer Booking Details</h1><hr>
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Email</th>
		<th>Mobile Number</th>
		<th>Country</th>
		<th>Service Type</th>
		<th>Reservation Date</th>
		<th>Reservation Time</th>
		
	</tr>

<?php 
$i=1;
$sql=mysqli_query($con,"select * from customer");
while($res=mysqli_fetch_assoc($sql))
{
?>
<tr>
		<td><?php echo $i;$i++; ?></td>
		<td><?php echo $res['name']; ?></td>
		<td><?php echo $res['email']; ?></td>
		<td><?php echo $res['phone']; ?></td>
		<td><?php echo $res['country']; ?></td>
		<td><?php echo $res['service_type']; ?></td>
		<td><?php echo $res['reservation_date']; ?></td>
		<td><?php echo $res['reservation_time']; ?></td>
	</td>
	</tr>
<?php 	
}

?>	
</table>
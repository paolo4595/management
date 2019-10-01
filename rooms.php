<script>
	function delRoom(id)
	{
		if(confirm("You want to delete this Service?"))
		{
		window.location.href='delete_service.php?id='+id;	
		}
	}
</script>
<table class="table table-bordered table-striped table-hover">
	<h1>Service Details</h1><hr>
	<tr>
	<td colspan="8"><a href="dashboard.php?option=add_services" class="btn btn-primary">Add New Service</a></td>
	</tr>
	<tr style="height:40">
		<th>Serial</th>
		<th>Room No</th>
		<th>Service Type</th>
		<th>Details</th>
		<th>Price</th>
		<th>Image</th>
		<th>Update</th>
		<th>Delete</th>
	</tr>
<?php 
$i=1;
$sql=mysqli_query($con,"select * from rooms");
while($res=mysqli_fetch_assoc($sql))
{
$id=$res['room_id'];	
$img=$res['image'];
$path="../image/rooms/$img";
?>
<tr>
		<td><?php echo $i;$i++; ?></td>
		<td><img src="<?php echo $path;?>" width="50" height="50"/></td>
		<td><?php echo $res['room_no']; ?></td>
		<td><?php echo $res['type']; ?></td>
		<td><?php echo $res['details']; ?></td>
		<td><?php echo $res['price']; ?></td>
		<td><a href="dashboard.php?option=update_service&id=<?php echo $id; ?>"><span class="glyphicon glyphicon-pencil"></span></a></td>

		
		<td><a href="#" onclick="delRoom('<?php echo $id; ?>')"><span class="glyphicon glyphicon-remove" style='color:red'></span></a></td>
	</tr>	
<?php 	
}
?>	
	
</table>
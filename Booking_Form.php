<?php 
include('Menu Bar.php');
include('connection.php');
if($eid=="")
{
header('location:Login.php');
}
$sql= mysqli_query($con,"select * from service_reservation_details where email='$eid' "); 
$result=mysqli_fetch_assoc($sql);
//print_r($result);
extract($_REQUEST);
error_reporting(1);
if(isset($savedata))
{
  $sql= mysqli_query($con,"select * from service_reservation_details where email='$eid' and service_type='$type'");
  if(mysqli_num_rows($sql)) 
  {
  $msg= "<h1 style='color:red'>You have already Reserved this service</h1>";    
  }
  else
  {

   $sql="insert into service_reservation_details(id,name,email,phone,address,country,service_type,reservation_date,reservation_time) 
  values('$i','$name','$eid','$phone','$address','$country','$type','$rdate','$rtime')";
   if(mysqli_query($con,$sql))
   {
   $msg= "<h1 style='color:blue'>You have Successfully Reserved</h1><h2><a href='order.php'>View </a></h2>"; 
   }
  }
}
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
<div class="container-fluid text-center"id="primary"><!--Primary Id-->
  <h1>[ Reservation Form ]</h1><br>
  <div class="container">
    <div class="row">
      <?php echo @$msg; ?>
      <!--Form Containe Start Here-->
     <form class="form-horizontal" method="post">
       <div class="col-sm-6">
         <div class="form-group">
           <div class="row">
              <div class="control-label col-sm-4"><h4> Name :</h4></div>
                <div class="col-sm-8">
                 <input type="text" value="<?php echo $result['name']; ?>" readonly="readonly" class="form-control" name="name" placeholder="Enter Your Frist Name"required>
          </div>
        </div>
      </div>

        <div class="form-group">
          <div class="row">
           <div class="control-label col-sm-4"><h4>Email :</h4></div>
          <div class="col-sm-8">
              <input type="email" value="<?php echo $result['email']; ?>" readonly="readonly" class="form-control" name="email"  placeholder="Enter Your Email-Id"required>
          </div>
        </div>
        </div>

        <div class="form-group">
          <div class="row">
           <div class="control-label col-sm-4"><h4>Mobile :</h4></div>
          <div class="col-sm-8">
              <input type="number" value="<?php echo $result['mobile']; ?>" readonly="readonly" class="form-control" name="phone" placeholder="Type Your Phone Number"required>
          </div>
        </div>
        </div>

        <div class="form-group">
          <div class="row">
           <div class="control-label col-sm-4"><h4>Address :</h4></div>
          <div class="col-sm-8">
              <textarea name="addr" class="form-control" readonly="readonly" placeholder="Enter Your Address"><?php echo $result['address'];  ?></textarea>
          </div>
        </div>
        </div>
		

         <div class="form-group">
          <div class="row">
           <div class="control-label col-sm-4"><h4>Country :</h4></div>
          <div class="col-sm-8">
              <input type="text" class="form-control" readonly="readonly"  value="<?php echo $result['country']; ?>" name="country" placeholder="Enter Your Country Name"required>
          </div>
        </div>
        </div>

        
        </div>

           <div class="col-sm-6">
            <div class="form-group">
              <div class="row">
                <div class="control-label col-sm-5"><h4>Service Type:</h4></div>
                  <div class="col-sm-7">
                <select class="form-control" name="type"required>
                  <option>Hair Cut</option>
                  <option>Hair Blowering</option>
                  <option>Body Spa</option>
                  <option>Manicure</option>
                  <option>Pedicure</option>
               </select>
              </div>
              </div>
            </div>
          </div>

          <div class="col-sm-6">
            <div class="form-group">
              <div class="row">
                <div class="control-label col-sm-5"><h4>Reservation Date:</h4></div>
                  <div class="col-sm-7">
                  <input type="date" name="rdate" class="form-control"required>
                  </div>
              </div>
            </div>
          </div>

          <div class="col-sm-6">
            <div class="form-group">
              <div class="row">
                 <div class="control-label col-sm-5"><h4>Reservation Time:</h4></div>
                   <div class="col-sm-7">
                    <input type="time" name="rtime" class="form-control"required>
                  </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <input type="submit"value="submit" name="savedata" class="btn btn-danger"required/>
          </div>
          </form><br>
        </div>
      </div>
    </div>
  </div>
<?php
include('Footer.php')
?>
</body>
</html>

 <?php 
include('connection.php');
extract($_REQUEST);
if(isset($send))
{
mysqli_query($con,"insert into feedback values('','$n','$e','$mob','$msg')");	
$msg= "<h4 style='color:green;'>feedback sent successfully</h4>";
}
?>
<!-- Footer1 Start Here-->

<footer style="background-color: #393939;">
    <div class="container-fluid">
	<div class="col-sm-4 hov">
		<img src="logo/logo3.png"width="200px"height="70px"/><br><br>
    <p class="text-justify">A beauty salon or beauty parlor (beauty parlour), or sometimes beauty shop, is an establishment dealing with cosmetic treatments for men and women. Other variations of this type of business include hair salons and spas. There is a distinction between a beauty salon and a hair salon and although many small businesses do offer both sets of treatments; beauty salons provide extended services related to skin health, facial aesthetics, foot care, nail manicures, aromatherapy — even meditation, oxygen therapy, mud baths and many other services.</p><br>
      <center><a href="../about.php" class="btn btn-danger"><b>Read More..</b></a></center><br><br><br>
 <?php
  include('Social icon.php')
?>
	</div>&nbsp;&nbsp;
	<div class="col-sm-4 text-justify">
	       <h3 style="color:#cdd51f;">Contact Us</h3>
      <p style="color:white;"><strong>Address:&nbsp;</strong>111c MacArthur Highway, Marulas, Valenzuela City</p>
      <p style="color:white;"><strong>Email-Id:&nbsp;</strong>LaVelle@gmail.com</p>
      <p style="color:white;"><strong>Contact Us:&nbsp;</strong>09452854083</p><br><br><br>
     <center><img src="devlop/img3.png"class="img-responsive"style="width:200px;height:150px;border-radius:100%;"></center>
	</div>&nbsp;

  <!--Feedback Start Here-->
	<div class="col-sm-4 text-center">
      <div class="panel panel-primary">
        <div class="panel-heading">Feedback</div>
          <div class="panel-body">
            <?php echo @$msg; ?>
      <div class="feedback">
      <form method="post"><br>
        <div class="form-group">
          <input type="text" name="n" class="form-control" id="#"placeholder="Enter Your Name"required>
        </div>
        <div class="form-group">
          <input type="Email" name="e" class="form-control" id="#"placeholder="Email"required>
        </div>
        <div class="form-group">
          <input type="Number" name="mob" class="form-control" id="#"placeholder="Mobile Number"required>
        </div>
        <div class="form-group">
          <textarea type="Text" name="msg" class="form-control" id="#"placeholder="Type Your Massage"required></textarea>
        </div>
          <input type="submit" value="send" name="send" class="btn btn-primary btn-group-justified"required>
      </form>     
        </div>
       </div>
      </div>
    </div>

    <!--Feedback Panel Close here-->

  </div>
</footer>
<!--Footer1 Close Here-->

<!--Footer2 start Here-->

<footer class="container-fluid text-center"style="background-color:#000408;height:40px;padding-top:10px;color:#f0f0f0;">
  <p>Developed By Paolo&Marc | All Rights Reserved 2019</p>
</footer>

<!--Footer2 start Here-->
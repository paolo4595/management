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
  <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="margin-top:50px;">
<?php
      include('Menu Bar.php')
  ?><br>
<div class="container-fluid text-center">
<div class="container"> 
  <div class="row content">
    <div class="col-sm-12">
      <h1 id="font">{ La Velle }</h1><br>
      <p class="text-justify">La Velle Beauty is an establishment dealing with cosmetic treatments for men and women. Other variations of this type of business include hair salons and spas.

There is a distinction between a beauty salon and a hair salon and although many small businesses do offer both sets of treatments; beauty salons provide extended services related to skin health, facial aesthetics, foot care, nail manicures, aromatherapy — even meditation, oxygen therapy, mud baths and many other services.</p>
<h1 align="center"id="font">[ Services ]</h1><br>
<p class="text-justify">Haircut,Hair Blowering(to edit).</p>
    </div>
  </div><br><br>
  <div class="row"align="center">
  <!--map Start Here-->
  <div class="col-sm-2"style="background-color:#27303b;height:80px;width:100px;">
      <a href="#" type="button" data-toggle="modal" data-target="#myModal"><img src="image/icon/icon-01.png"width="60px;"height="50px;"style="margin-top:15px;"></a>
  </div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d964.9062747645194!2d120.9798759291822!3d14.677204799359604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b4194193e437%3A0x8928d4200f8cf193!2s108%20Manor%2C%20Valenzuela%2C%20Metro%20Manila!5e0!3m2!1sen!2sph!4v1568072783278!5m2!1sen!2sph" width="500" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      </div>
    </div>
  </div>
</div>      
<!--Map Close Here-->
        <div class="col-sm-2">
          <h4><b>Address</b></h4>
          <b>108 Manor, Valenzuela, Metro Manila</b>
        </div>
        <div class="col-sm-2"style="background-color:#27303b;height:80px;width:100px;">
            <a href="#"><img src="image/icon/icon-02.png"width="60px;"height="50px;"style="margin-top:15px;"></a>
        </div>
         <div class="col-sm-2">
          <h4><b>Phone</b></h4>
              <b>(+63) 9452854083</b>
        </div>
        <div class="col-sm-2"style="background-color:#27303b;height:80px;width:100px;">
            <a href="#"><img src="image/icon/icon-03.png"width="60px;"height="50px;"style="margin-top:15px;"></a>
        </div>
         <div class="col-sm-2">
          <h4><b>Email-Id</b></h4>
              <b>lavelle@gmail.com</b>
        </div>
  </div><br><br>
</div>
</div>
<?php
  include('Footer.php')
?>
</body>
</html>

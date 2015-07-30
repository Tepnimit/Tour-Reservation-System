<!DOCTYPE html>
<html>
<title> Order Page </title>
<head>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
 
<style>
#box {
    background-color:#333;
    width: 70%;
    height:80%;
    padding: 40px;
    border: 1px solid white;
border-radius:20px;
  position:absolute;
  top:0%;
  left:50%;
  margin-top:50px; /* this is half the height of your div*/  
  margin-left:-35%; /*this is half of width of your div*/
color:white;
}
</style>
</head>
<body style="background:black">
<div id="box">
<h3>Yosemite National Park - 10366</h3>
<br>
 <table>
  <thead>
   <tr>
    <td>
     <img src="http://www.backpaco.com/wp-content/uploads/2015/04/yosemite-national-park.jpg" width=400px height=250px>
    </td>
    <td>
      <table class="table table-hover">
       <thead>
        <tr>
         <td>
          <p>ID: 10366</p>
         </td>
        </tr>
        <tr>
        <tr>
         <td>
          <p>Yosemite National Park</p>
         </td>
        </tr>
        <tr>
         <td>
          <p>3days/2nights</p>
         </td>
        </tr>
        <tr>
         <td>
          <p>$1200</p>
         </td>
        </tr>
        <tr>
         <td>
          <p>August 30, 2017</p>
         </td>
        </tr>
      </table>
    </td>
  </tr>
 </table>
<br>
<?php 
if ($_POST['RESPMSG'] == 'Approved') {
?>
  <div align="center" style="color:yellow">Successfully! Thank you for booking</div>
<?php
} else {
echo "For Demo: Use credir card no: 4111111111111111 and expired date: 12/15";
include 'form.php';
}
?>
</div>
</body>
</html>

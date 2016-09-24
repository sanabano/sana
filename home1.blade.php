<!DOCTYPE html>
<html>
<head>
<meta name="veiwport"width=device-width, initial-scale=1.0>
<link href="css/bootstrap.min.css" rel="stylesheet">
<title> Home page</title>

</head>
<style>
body{

  background-image: url(images/pic44.png);
  background-size: cover;
}

</style>
</head>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #474445;
    text-align: left;
    padding: 8px;
}

ul.tab {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    border: 1px solid #5C4C50;
    background-color: #858283;
}

/* Float the list items side by side */
ul.tab li {float: left;}
ul.nav li{float:right;}
/* Style the links inside the list items */
ul.tab li a {
    display: inline-block;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of links on hover */
ul.tab li a:hover {
    background-color: #9C8F92;
}

/* Create an active/current tablink class */
ul.tab li a:focus, .active {
    background-color: #474445;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #474445;
    border-top: none;
}

<script type="text/javascript" src="js/jquery.min.js"></script>
</style>
<body>
<div class="page header" style="margin: 1auto;
    width: 400px;
    padding: 1em; 
    color: #070802">
              <h1> CloudTronics
                
              </h1></div> 
              <div  class="col-md-12" style="border:3px; border-color:#474445; padding: 14px 16px; ">
<ul class="tab">
  <li><a href="home1.blade.php" class="tablinks" onclick="items(event, 'Home')">Home</a></li>
  <li><a href="#" class="tablinks" onclick="items(event, 'Mobile')">Mobile</a></li>
  <li><a href="#" class="tablinks" onclick="items(event, 'Tablets')">Tablets</a></li>
  <li><a href="#" class="tablinks" onclick="items(event, 'Laptops')">Laptops</a></li>
  <li><a href="#" class="tablinks" onclick="items(event, 'Motherboard')">Motherboard</a></li>
  <li><a href="#" class="tablinks" onclick="items(event, 'Processors')">Processors</a></li>
  <li><a href="#" class="tablinks" onclick="items(event, 'Offer')">Offer</a></li>
  <li><a href="#" class="tablinks" onclick="items(event, 'Sale')">Sale</a></li>
  <ul class="nav">
  <li><a href="signuppage.blade.php" class="tablinks" onclick="items(event, 'SignUp')">SignUp</a></li>
  <li><a href="#" class="tablinks" onclick="items(event, 'Login')">Login</a></li>
</ul> </ul>
</div>
<div  class="col-md-12" style="border:3px; border-color:#474445; padding: 14px 16px; ">

<div class= "col-md-6">
<br><center><img src="images/pic24.jpg" width="1000px" height="180px"
            class="img-responsive"></center><br></div>
            </div>
            <div  class="col-md-12" style="border:3px; border-color:#474445; padding: 14px 16px; ">
<table border:1px solid #474445;><td>
<div class= "col-md-12">
<h2> Top Selling Products</h2>
<br><center><img src="images/pic10.jpg" width="200px" height="180px"
            class="img-responsive">
            <img src="images/pic16.jpg" width="200px" height="180px"
            class="img-responsive">
            <img src="images/pic13.jpg" width="200px" height="180px"
            class="img-responsive">
            <img src="images/pic6.jpg" width="200px" height="180px"
            class="img-responsive">
            <img src="images/pic25.png" width="200px" height="180px"
            class="img-responsive">
            <img src="images/pic26.jpg" width="200px" height="180px"
            class="img-responsive"></center></div>
            </td></table></div>
            <div  class="col-md-12" style="border:3px; border-color:#474445; padding: 14px 16px; ">
<table border:1px solid #474445;><td>
<div class= "col-md-12">
<h2> New Products </h2>
<br><center><img src="images/pic10.jpg" width="200px" height="180px"
            class="img-responsive">
            <img src="images/pic16.jpg" width="200px" height="180px"
            class="img-responsive">
            <img src="images/pic13.jpg" width="200px" height="180px"
            class="img-responsive">
            <img src="images/pic6.jpg" width="200px" height="180px"
            class="img-responsive">
            <img src="images/pic25.png" width="200px" height="180px"
            class="img-responsive">
            <img src="images/pic26.jpg" width="200px" height="180px"
            class="img-responsive"></center></div>
            </td></table></div>
 </table></div></body></html>


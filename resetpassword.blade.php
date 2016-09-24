<!DOCTYPE html>
<html>
<head>
<meta name="veiwport"width=device-width, initial-scale=1.0>
<link href="css/bootstrap.min.css" rel="stylesheet">
<title> reset password</title>
<style>
body{

  background-image: url(images/pic44.png);
  background-size: cover;
}
form {
    margin: 1auto;
    width: 400px;
    padding: 1em;
    
}
form div + div {
    margin-top: 1em;
}
label {
    display: inline-block;
    width: 90px;
    text-align: left;
    color:black;
}

input:focus, textarea:focus {
    /* To give a little highlight on active elements */
    border-color: #474445;
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
    border: 1px solid #474445;
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
  <li><a href="home1.blade.php ?>" class="tablinks" onclick="items(event, 'Home')">Home</a></li>
  <li><a href="#" class="tablinks" onclick="items(event, 'Mobile')">Mobile</a></li>
  <li><a href="#" class="tablinks" onclick="items(event, 'Tablets')">Tablets</a></li>
  <li><a href="#" class="tablinks" onclick="items(event, 'Laptops')">Laptops</a></li>
  <li><a href="#" class="tablinks" onclick="items(event, 'Motherboard')">Motherboard</a></li>
  <li><a href="#" class="tablinks" onclick="items(event, 'Processors')">Processors</a></li>
  <li><a href="#" class="tablinks" onclick="items(event, 'Offer')">Offer</a></li>
  <li><a href="#" class="tablinks" onclick="items(event, 'Sale')">Sale</a></li>
  <ul class="nav  navbar-right">
  <li><a href="signuppage.bade.php" class="tablinks" onclick="items(event, 'SignUp')">SignUp</a></li>
  <li><a href="signinpage.bade.php" class="tablinks" items(event, 'SignIn')">SignIn</a></li>
</ul> </ul>
</div>
<div class="col-md-12"class="col-md-12" style="border:3px; border-color:#474445; padding: 14px 16px;">
<table border:1px solid #474445;><td>
<div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">

          <h3> Reset Password  </h3>
<form>
<div class="col-md-12"class="col-md-12" style="border:3px; border-color:#474445; padding: 14px 16px;">
<table border:1px solid #474445;><td>
<div>
<center>
        <label for="newpassword">New Password:</label>
        <br><input type="password" id="newpassword" placeholder="pass_word">
    </center></div>
<div>
<center>
        <label for="re-enter">Re-enter Password:</label>
       <br><input type="password" id="re-enter" placeholder="pass_word">
</center></div>
<center>
<br> <div class="button">
        <button type="submit">Re-set Password</button>
    </div></center>
    <center>
    <br> <div class="button">
        <button type="submit">cancel</button>
    </div></center>
</div></td></table>
</form>

</div>
</div>
</div>
</div>
<br>
<br>
</td>
</table></div>
</body>
</html>
<?php

session_start();

if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}

?>

<!DOCTYPE html>
<html>
	<head>
		<link href='https://css.gg/log-out.css' rel='stylesheet'>
		<link href='https://css.gg/shopping-cart.css' rel='stylesheet'>
	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	<link href='https://css.gg/shopping-cart.css' rel='stylesheet'>
	<link href='https://css.gg/info.css' rel='stylesheet'>
	<link href='https://css.gg/log-in.css' rel='stylesheet'>
	<link href='https://css.gg/inbox.css' rel='stylesheet'>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	
	
	<style>
	
	
.card {
  box-shadow: 4px 8px 16px 0 rgba(0, 0, 0, 0.4);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}

.alert.success {background-color: #4CAF50; padding: 20px; color: white; opacity: 1; transition: opacity 0.6s; margin-bottom: 15px;}
.alert.info {background-color: #2196F3; padding: 20px; color: white; opacity: 1; transition: opacity 0.6s; margin-bottom: 15px;}
.alert.warning {background-color: #ff9800; padding: 20px; color: white; opacity: 1; transition: opacity 0.6s; margin-bottom: 15px;}

.closemessage {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closemessage:hover {
  color: black;
}

.test{

  display: none;
  width:175px;
  height:220px;
  border-radius: 6px;
  padding: 8px 0;
  z-index: 1;
  bottom: -50%;
  left: -150%;
 
  
 
}
  
.popup2:hover + .test {
  display: block;
  -webkit-animation: fadeIn 1s;
  animation: fadeIn 1s;
  border-bottom: 3px solid transparent;
}




.produkt {
  border-top: 1px solid grey;
  width:120px;
}

/* Popup container - can be anything you want */
.popup {
  position: relative;
  display: inline-block;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* The actual popup */
.popup .popuptext {
  visibility: hidden;
  width: 160px;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 8px 0;
  position: absolute;
  z-index: 1;
  bottom: 125%;
  left: 50%;
  margin-left: -80px;
}

/* Popup arrow */
.popup .popuptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

/* Toggle this class - hide and show the popup */
.popup .show {
  visibility: visible;
  -webkit-animation: fadeIn 1s;
  animation: fadeIn 1s;
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
  from {opacity: 0;} 
  to {opacity: 1;}
}

@keyframes fadeIn {
  from {opacity: 0;}
  to {opacity:1 ;}
}	
	
	
body {
  font-family: "Lato", sans-serif;
  transition: background-color .5s;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  right: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 38px;
  margin-right: 45px;
}

#main {
  transition: margin-right .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
	
	
.center {
  margin-left: auto;
  margin-right: auto;
  border-radius: 9px;
  border-bottom: 3px solid transparent;
}

.tbversion {
 border-radius: 12px;
}


.btn {
  border: None;
  border-radius: 12px;
  background-color: white;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  display: inline-block;
}

.btn:hover {background: #eee;}

.version {color: blue;}
.account {color: black;}
.order {color: black;}
.message {color: black;}

</style>
			<link rel="icon" href="shoping-cart2.jpg" type="image/x-icon">
			<title>Vorzeige Projekt</title> <!-- Made by Kevin St. -->
			<div id="main">

			<table style="background-color:#a8a8a8;" class="center"> 
				<tr>
					<th width="150" height="100"><a href="home.php"><h1><img src="logo.png"></a></th>
					<th>
						<table style="background-color:white;" class="tbversion">
							<tr>
								<th><a href="javascript:alert('Version: 0.03.1 Beta');" style="color:grey;"><i class="gg-info"></i></a></th>
							</tr>
						</table>
					</th>
				
					<th width="300"></th>
					<th>
						<table style="background-color:white;" class="tbversion">
							<tr>
								<th><i class="gg-inbox"></i></th>
								<th><button class="btn message">Messages</button></h1></th>
							</tr>
						</table>
					</th>
					<th width="220"></th>
					<th>
						<table style="background-color:white;" class="tbversion">
							<tr>
								<th><i class="gg-shopping-cart"></th>
								<th><form action="order.php"><button class="btn order">Order</i></button></th>
							</tr>
						</table>
					</th>
					<th width="220"></th>
					<th>
						<table style="background-color:white;" class="tbversion">
							<tr>
								<th><a href="logout.php" style="color: #000000"><i class="fas fa-sign-out-alt"></i></a></th>
								<th><form action="logout.php"><button class="btn account">Logout</button></h1></center></form></th>
							</tr>
						</table>
					</th>
					<th width="30"></th>

					<th>
						<div id="mySidenav" class="sidenav">
						<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
						<a href="profile.php">Account</a>
						<a href="#">Services</a>
						<a href="#">Clients</a>
						<a href="#">Contact</a>
						</div>
						<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
					</th>
					<th width="10"></th>
				</tr>
			</table>
			
			
		
	
		<script>
			function openNav() {
			document.getElementById("mySidenav").style.width = "250px";
			document.getElementById("main").style.marginRight = "250px";
			document.body.style.backgroundColor = "rgba(0,0,0,0.2)";
			}

			function closeNav() {
			document.getElementById("mySidenav").style.width = "0";
			document.getElementById("main").style.marginRight= "0";
			document.body.style.backgroundColor = "white";
			}
			
			function myFunction() {
			var popup = document.getElementById("myPopup");
			popup.classList.toggle("show");
			}

			var close = document.getElementsByClassName("closemessage");
				var i;

				for (i = 0; i < close.length; i++) {
				close[i].onclick = function(){
				var div = this.parentElement;
				div.style.opacity = "0";
				setTimeout(function(){ div.style.display = "none"; }, 600);
					}
				}
		</script>
	</head>
	
	<body style="background-color:white;">
		


		
		<br>
		<br>
		<table class="center" style="border-collapse: collapse;">
			<tr>
				<td height="0" width="120"></td>
				<td height="0" width="200"></td>
				<td height="0" width="220"></td>
				<td height="0" width="200"></td>
				<td height="0" width="220"></td>
				<td height="0" width="200"></td>
				<td height="0" width="220"></td>
				<td height="0" width="200"></td>
				<td height="0" width="120"></td>
			</tr>
			<tr>
				<td height="175" width="120"></td>
				<td height="175" width="200"><center><div class="popup2"><a href="Produkte/Kette_Chips.html"><img src="Produkte/chips2.png" width="150" height="150"></div></a>	<div class="test"><div class="card"><h2>Chilli Chips</h2><p style="color: grey; font-size: 22px;">$9.99</p><p>Some text about the Chips. Super und leckere Chips. Hergestellt aus Bio-Produkte und sind vegan und lakun frei.</p></div></div>		<br> 	<div class="produkt"><a href="Produkte/Kette_Chips.html" style="text-decoration: none; color:grey;"><br> Zum Produkt</a></div></center></td>
				<td height="175" width="120"></td>
				<td height="175" width="200"><center><div class="popup2"><a href="Produkte/Kette_Chips.html"><img src="Produkte/chips2.png" width="150" height="150"></div></a>	<div class="test"><div class="card"><h2>Chilli Chips</h2><p style="color: grey; font-size: 22px;">$9.99</p><p>Some text about the Chips. Super und leckere Chips. Hergestellt aus Bio-Produkte und sind vegan und lakun frei.</p></div></div>		<br> 	<div class="produkt"><a href="Produkte/Kette_Chips.html" style="text-decoration: none; color:grey;"><br> Zum Produkt</a></div></center></td>
				<td height="175" width="120"></td>
				<td height="175" width="200"><center><div class="popup2"><a href="Produkte/Kette_Chips.html"><img src="Produkte/chips2.png" width="150" height="150"></div></a>	<div class="test"><div class="card"><h2>Chilli Chips</h2><p style="color: grey; font-size: 22px;">$9.99</p><p>Some text about the Chips. Super und leckere Chips. Hergestellt aus Bio-Produkte und sind vegan und lakun frei.</p></div></div>		<br> 	<div class="produkt"><a href="Produkte/Kette_Chips.html" style="text-decoration: none; color:grey;"><br> Zum Produkt</a></div></center></td>
				<td height="175" width="120"></td>
				<td height="175" width="200"><center><div class="popup2"><a href="Produkte/Kette_Chips.html"><img src="Produkte/chips2.png" width="150" height="150"></div></a>	<div class="test"><div class="card"><h2>Chilli Chips</h2><p style="color: grey; font-size: 22px;">$9.99</p><p>Some text about the Chips. Super und leckere Chips. Hergestellt aus Bio-Produkte und sind vegan und lakun frei.</p></div></div>		<br> 	<div class="produkt"><a href="Produkte/Kette_Chips.html" style="text-decoration: none; color:grey;"><br> Zum Produkt</a></div></center></td>
				<td height="175" width="120"></td>
			</tr>
			<tr>
				<td></td>
				<td><center></center></td>
			</tr>
		</table>		
		
		
		

		
		
		
	</div></body>
</html>
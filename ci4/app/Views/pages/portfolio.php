<!DOCTYPE HTML>
<html>
    <head>
        <title>Portfolio</title>
		<link rel="stylesheet" href="<?php echo base_url('css/style.css');?>">
		<link rel="icon" type="image/x-icon" href="images/favicon.ico">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
	<style>
	#port1 {
		position: absolute;
		z-index:2;
		width: 960px;
		top: 780px;	
		left: 50px;
	}

	#port2 {
		position: absolute;
		z-index:2;
		width: 960px;
		top: 1250px;	
		right: 50px;
	}
	
	#port3 {
		position: absolute;
		z-index:2;
		width: 960px;
		top: 1770px;	
		left: 50px;
	}
	
	#port4 {
		position: absolute;
		z-index:2;
		width: 960px;
		top: 2260px;	
		right: 50px;
	}
	
	#footer2 {
		position: relative;
		z-index:2;
		width: 100%;
		top: 2200px;
	}
	
	
	#facebook2 {
		display: flex;
		position: absolute;
		z-index: 2;
		width: 1280px;
		border-radius: 4px;
		top: 3070px;
		left: 485px;
		width: 25px;
	}
	
	#linkedin2 {
		position: absolute;
		z-index: 2;
		width: 1280px;
		top: 3062px;
		left: 510px;
		width: 43px;	
	}
	
	#heartfoot2 {
		position: absolute;
		z-index: 2;
		width: 1280px;
		top: 3014px;
		left: 730px;
		width: 70px;
	}
	
	#instagram2 {
		position: absolute;
		z-index: 2;
		width: 1280px;
		top: 2887px;
		right: 525px;
		width: 35px;
	}
	
	#textfooter1 {
		color: #FF7A9C;
		font-family: Arial;
		font-weight: normal;
		font-size: 16px;
		text-align: left;
		letter-spacing: 2px;
		top: 3005px;
		left: 485px;
		position: absolute;
		z-index: 4;	
	}
	
	#textfooter3 {
		color: #FF7A9C;
		font-family: Arial;
		font-weight: bold;
		font-size: 16px;
		text-align: left;
		letter-spacing: 2px;
		top: 2987px;
		right: 570px;
		position: absolute;
		z-index: 4;	
	}
	
	#mystory2 {
		color: #FF7A9C;
		font-family: Arial;
		font-weight: 550;
		font-size: 16px;
		text-align: center;
		letter-spacing: 2px;
		line-height: 2.0;
		top: 3014px;
		right: 528px;
		position: absolute;
		z-index: 4;		
	}
	
	.tooltip2 {
		position: relative;
		display: inline-block;
		top: 3074px;
		right: 525px;
		position: absolute;
		z-index: 4;
		font-family: Arial;
		font-weight: 550;
		font-size: 16px;
		text-align: left;
		color: #FF7A9C;
	  
	}

	.tooltiptext2 {
	  visibility: hidden;
	  width: 300px;
	  background-color: #ffc0d5;
	  font-family: Arial;
	  font-weight: normal;
	  font-size: 14px;
	  color: #D85375;
	  text-align: center;
	  border-radius: 4px;
	  padding: 8px 0;

	  /* Position the tooltip */
	  position: absolute;
	  z-index: 1;
	  top: -15px;
	  left: 105%;
	}

	.tooltip2:hover .tooltiptext2 {
	  visibility: visible;
	}
	
	</style>
    </head>

    <body style="background-color:#D85375">
	<div id="navbar">
	<ul>
	  <li style="float:right"><a class="navi, navi1" href="portfolio">Portfolio</a></li>
	  <li style="float:right"><a class="navi" href="mystory">My Story</a></li>
	  <li style="float:right"><a class="navi" href="home">Home</a></li>
	  <li><a class="active" href="home">WanderWithWayne.com</a></li>
	</ul>
	</div>
	
	<img src="images/headingclouds.png" id="header">
	<img src="images/portbg1.png" id="collage">

	<a target="_blank" href="https://www.figma.com/proto/2nTIX3uwOadpM9lsWVWOOD/STARBUCKS?node-id=6-5&starting-point-node-id=6%3A5&mode=design&t=kWAYLc5q3cLpStVk-1">
	<img src="images/1.png" id="port1"></a>
	
	<a target="_blank" href="https://www.figma.com/proto/ToZRh7aKdzo4DCe19BFHau/Untitled?node-id=52-4&starting-point-node-id=52%3A4&mode=design&t=RYrsVRoKOWrhD9SW-1">
	<img src="images/2.png" id="port2"></a>
	
	<img src="images/3.png" id="port3">
	
	<a target="_blank" href="https://www.figma.com/proto/VVaJrGBAj9lRSSdlWh2kxM/HIGH-FI-WEBSITE?node-id=1494-1876&starting-point-node-id=1494%3A1876&mode=design&t=wHexaN4SWCiMmH4u-1">
	<img src="images/4.png" id="port4"></a>

	
	
	
	
	<img src="images/footer.png" id="footer2">
	
	<a target="_blank" href="https://www.facebook.com/dzn.wayne">
	<img src="images/facebook.png" id="facebook2"></a>
	
	<a target="_blank" href="https://www.linkedin.com/in/wayne-denise-dizon-0b89b7248/">
	<img src="images/linkedin.png" id="linkedin2"></a>
	
	<img src="images/heartfoot.gif" id="heartfoot2">
	
	<a target="_blank" href="https://www.instagram.com/wayne_dzn?igsh=OGQ5ZDc2ODk2ZA%3D%3D&utm_source=qr">
	<img src="images/instagram.png" id="instagram2"> </a>
	
	<p id="textfooter1"> Have a question or <br> wanna collab? </p>
	
	<a href="home"><p id="textfooter3">HOME</p></a>
	
	<a href="mystory"><p id="mystory2">MY STORY</p></a>
	
	<div class="tooltip2">RESOURCES
	<span class="tooltiptext2"> Source Code: W3 Schools, Khan Academy<br> Pictures: Pinterest, Canva</span>
	</div>

	
    </body>
</html>
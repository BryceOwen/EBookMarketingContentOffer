<!doctype html>
<html lang="en">


<!--
Team Members: Mina Robinson, Bri Covert, and Bryce Owen
-->


<head>
<title>Thank You!</title>

<!-- META DATA -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- ICONS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- FONTS -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap" rel="stylesheet">

<!-- STYLES -->
<style>
body {
	height: 100%;
	margin: 0px;
	color: #444;
	background-color: #f4f1e9;
    font-size: "20px"
}
*  {
	box-sizing: border-box;
	font-family: "Raleway:wght@100";
}
div {
	margin: auto;
	padding: 1em;
	max-width: 600px;
	text-align:center;
}
h1, h3, p {margin: 36px auto;}
h1 {font-size: 1.5em;}
span {
	color: #e07f6c; 
	font-size: larger;
}
a {
	color: white;
	background-color: #e07f6c;
	cursor: pointer;
	border-radius: 1em;
	padding: 0.25em 1.25em;
	text-decoration: none;
	text-transform: uppercase;
	text-shadow: 2px 4px 4px rgba(0,0,0,0.25);
	box-shadow: 2px 4px 6px rgba(0,0,0,0.25);
}
a:hover {opacity: 0.5;}
.logo {
	color: #e07f6c;
	font-size: 3em;
	text-shadow: 2px 4px 4px rgba(0,0,0,0.25);
}
</style>
</head>

<!-- HTML WITH A PINCH OF PHP -->
<body>
<div>
	<h1><?php echo $_POST["firstname"]; ?>, thanks for requesting the<br><span><em>Dear All, Please Stop Telling Me I'm Getting A Barista Degree</em></span> eBook!</h1>
    <p><img src="../img/Cover.jpg" width="35%" alt="Book Cover"></p>
	<h3><a href="../../lib/download/ebook.pdf" download>Download your copy</a></h3>
	<p>(We've also sent the link to <?php echo $_POST["email"]; ?>. )</p>
    <p>Your support is greatly appreciated, and we wish you the best of luck in your artistic endeavors! &nbsp;&nbsp;&mdash;&nbsp; <b>Bri Covert and team</b></p>
	<p><img src="../img/Bri%20Covert%20Logo.png" width ="40%" alt="Bri Covert watercolor Art Logo"></p>
</div>
</body>
</html>
<html>
<head>
	<title>Andriod Project</title>

	<meta charset="utf-8">

  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  	<link rel="stylesheet" type="text/css" href="css/Index-Style.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'> -->
    <link rel="stylesheet" href="category-style.css">
<!--	<script src="js/stickyHeader.js"></script>-->
	
<body>

<div class="social-menu-section">
	   <a href="#" class="fa fa-facebook"></a>
	   <a href="#" class="fa fa-twitter"></a>
	   <a href="#" class="fa fa-google"></a>
	   <a href="#" class="fa fa-instagram"></a>
</div>

<div class="navigation-menu">
<div id="navbar">
<header class="header">
<a href="index.php">
    <h1 class="logo">
      <img src="Images/Header-Logo.png" style="width:40%;"></img>
    </h1></a>
      <ul class="main-nav">
          <li><a href="#" class="font-color">RXJAVA</a></li>
          <li><a href="#" class="font-color">BLOGS</a></li>
          <li><a href="#" class="font-color">STORE</a></li>
          <li><a href="#" class="font-color">MAGAZINE</a></li>
          <li><a href="#" class="font-color">TIPS</a></li>
          <li><a href="#" class="font-color">GITHUB</a></li>
      </ul>
  </header> 
  </div>
</div>


<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
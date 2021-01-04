  <html>
<head>

<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/Index-Style.css">
<link rel="stylesheet" type="text/css" href="css/loader.css">
<link rel="stylesheet" href="category-style.css">
<script type="text/javascript" src="js/paginationJs.js"></script>
<script type="text/javascript" src="js/loadPage.js"></script>
<script type="text/javascript" src="js/stickyHeader.js"></script>
<script type="text/javascript" src="http://onecreative.aol.com/ads/jsapi/ADTECH.js"></script>
<!-- SiderBar CSS -->
<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<body onLoad="myContent();" class="andriod_sutra">

<div class="social-menu-section">
     <a href="#" class="fa fa-facebook"></a>
     <a href="#" class="fa fa-twitter"></a>
     <a href="#" class="fa fa-google"></a>
     <a href="#" class="fa fa-instagram"></a>
</div>

<div class="navigation-menu">
<div id="navbar">
  
<header class="header">


    <h1 class="logo">
      <a href="index.php">
      <img src="Images/Header-Logo.png" class="h-logo"></img></a>
    </h1>
      <ul class="main-nav topnav" id="myTopnav">
          <li><div class="home_header_info"><a href="index.php" class="font-color header_info1">Home</a>
            <a href="index.php" class="font-color header_info2">Home</a></div></li>
           
          <li ><a href="Data.php?type=Beginners"  class="font-color" >BEGINNER</a></li>
          <li><a href="Data.php?type=Mediators" id="mediator" class="font-color">MEDIATOR</a></li>
          <li><a href="Data.php?type=Advanced" id="advanced" class="font-color">ADVANCED</a></li>
          <li><a href="Blogs.php" class="font-color">BLOGS</a></li>
          <li><a href="Tips.php" class="font-color">TIPS</a></li>
          <li><a href="Github.php" class="font-color">GITHUB</a></li>
          <li></li>
          <a href="javascript:void(0);" class="icon" onClick="myFunction()">
          <i class="fa fa-bars"></i></a>
      </ul>

  </header> 

  </div>
  
  
</div>
</div>


<script>
window.onscroll = function() {myFunction1()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction1() {
 
  if (window.pageYOffset > sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
 
}

</script>
<script>

function myFunction() {
  var x = document.getElementById("myTopnav");
  var classes=x.className;
  
  if (x.className === "main-nav topnav") {
    x.className += " responsive";
  } else {
    x.className = "main-nav topnav";
  }
}
function addClass(id){
  var x=document.getElementById(id);
  // alert(x);
  // var div=document.createElement('div');
// x.classList.remove('data')
x.className="home_header_info"  
  // x.appendChild(div);
}

</script>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ex.Responsive </title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- CSS ที่สร้างขึ้น -->
<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="css/button.css">
<link rel="stylesheet" href="css/Social-icons.css">

<style>

</style>
</head>
<body style="font-family:Verdana;color:#aaaaaa;">

<br>
<div class="row">
    <div class="col-sm-2"><img src="icons/Step/Step1.gif" style="width:100%"></div>
    <div class="col-sm-2"><img src="icons/Step/Step2.gif" style="width:100%"></div>
    <div class="col-sm-2"><img src="icons/Step/Step3.gif" style="width:100%"></div>
    <div class="col-sm-2"><img src="icons/Step/Step4.gif" style="width:100%"></div>
    <div class="col-sm-2"><img src="icons/Step/Step5.gif" style="width:100%"></div>
    <div class="col-sm-2"><img src="icons/Step/Step6.gif" style="width:100%"></div>
</div>
<!--  -->
<div class="head">
  <h1>Head Logo.</h1>
  <!-- <img src="icons/Logo Thai PP-R_with_Certificates.webp"> -->
</div>
<!--  -->
<div class="menus-head" id="myTopnav">
  <!-- <center><h1>Menu.</h1></center> -->
    <a href="#"></a>
    <a href="#">Menu1<br>เมนู1</a>
    <a href="#">Menu2<br>เมนู2</a>
    <a href="#">Menu3<br>เมนู3</a>
    <a href="#">Menu4<br>เมนู4</a>
    <a href="#">Menu5<br>เมนู5</a>
    <a href="#">Menu6<br>เมนู6</a>
    <a href="#">Menu7<br>เมนู7</a>
    <a href="#">Menu8<br>เมนู8</a>
    <a href="#">Menu9<br>เมนู9</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
</div>
<!--  -->
<div class="page">
  <div class="menu-left"> 
    <img src="icons/a2ecafa8b7a85af2671fb9b4b2dfa311.gif" style="width:100%">
      <div class="wrapper">
        <!-- <a href="#"><button class="btn btn-outline-secondary btn-block">Link 1</button></a>
        <a href="#"><button class="btn btn-outline-secondary btn-block">Link 2</button></a> -->
        <a href="#"><span>Link 1</span></a>
        <a href="#"><span>Link 2</span></a>
      </div>
      <br><img src="icons/1ca1bc17689d83092a0b7bb393fa5658.gif" style="width:100%">
    </div>

  <div class="main">
    <h5><u>Head Topic</u></h5>

        <div class="icons">
            <!-- <h5>Icon Shop</h5> -->    
            <a href="https://twitter.com" class="icon-button twitter">
              <i class="fa fa-twitter" id="icon-twitter"></i><span></span>
            </a>

            <a href="https://web.facebook.com" class="icon-button facebook">
              <i class="fa fa-facebook" id="icon-facebook"></i><span></span>
            </a>

            <a href="https://www.google.com" class="icon-button google-plus">
              <i class="fa fa-google" id="icon-google-plus"></i><span></span>   
            </a>

            <a href="https://www.youtube.com/" class="icon-button youtube">
              <i class="fa fa-youtube-play" id="icon-youtube"></i><span></span>   
            </a>

        </div>

        <div class="example">
            
        </div>

    <img src="icons/shutterstock_1114262204-1.jpg" style="width:100%"> <br><br>
        
  </div>
<!--  -->
  <div class="right">
    <img src="icons/nIjPRJG.gif" style="width:100%">
        <h2>About</h2>
        <p>This is example website for learning with responsive website.</p>
    <img src="icons/02_online-marketing.gif" style="width:100%">
  </div>
</div>
<!--  -->
<div class="footer">
    © Ex. w3schools.com and apply by <a href="https://www.google.co.th/">Nattasit Suksumran</a>
</div>
<!--  -->
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "menus-head") {
    x.className += " responsive";
  } else {
    x.className = "menus-head";
  }
}
</script>

</body>
</html>

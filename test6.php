<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- CSS ที่สร้างขึ้น -->
<link rel="stylesheet" href="css/test2.css">

</head>


<body>

<nav class="navbar navbar-expand-sm py-0 main-nav">
        <a class="navbar-brand" href=""></a>
            <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon">
                  <i class="fas fa-bars" style="color:red; font-size:28px;"></i>
                </span>
            </button>
        <!-- <ul class="nav navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Download</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Register</a>
            </li>
        </ul> -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar" >
        <ul class="nav navbar-nav mx-auto">
                <li class="nav-item">
                    <a  class="nav-link" href="https://airadmittance.com/">HOME<br>หน้าแรก</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://airadmittance.com/article/">BLOG<br>รอบรู้เรื่องท่อ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://airadmittance.com/product/">PRODUCT<br>สินค้า</a>
                </li>    
                <li class="nav-item">
                    <a class="nav-link" href="https://airadmittance.com/installation/">INSTALLATION<br>วิธีการติดตั้ง</a>
                </li> 
                <li class="nav-item">
                    <a class="nav-link" href="https://airadmittance.com/technical-data/">TECHNICAL DATA<br>ข้อมูลเชิงเทคนิค</a>
                </li> 
                <li class="nav-item">
                    <a class="nav-link" href="https://airadmittance.com/project-references/">PROJECT REF.<br>โครงการชั้นนำ</a>
                </li> 
                <li class="nav-item">
                    <a class="nav-link" href="https://airadmittance.com/download/">DOWLOAD<br>ข้อมูล-ราคาท่อ PPR</a>
                </li> 
                <li class="nav-item">
                    <a class="nav-link active" href="#" >DEALER<br>หาซื้อง่าย</a>
                </li> 
                <li class="nav-item">
                    <a class="nav-link" href="https://airadmittance.com/service/">SERVICE<br>บริการ</a>
                </li> 
        </ul>
        <!-- <ul class="nav navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">Rates</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Help</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
            </li>
        </ul> -->
    </div>
</nav>

<script>
  $("[data-trigger]").on("click", function(){
    var trigger_id =  $(this).attr('data-trigger');
    $(trigger_id).toggleClass("show");
    $('body').toggleClass("offcanvas-active");
});

// close button 
$(".btn-close").click(function(e){
    $(".navbar-collapse").removeClass("show");
    $("body").removeClass("offcanvas-active");
}); 
</script>

</body>
</html>
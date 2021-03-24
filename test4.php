<?php
$servername = "localhost";
$username = "admin";
$password = "1234";
$dbname = "testnewggmap";

$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_query($conn, "SET NAMES UTF8");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

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

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">

<script src='https://kit.fontawesome.com/a076d05399.js'></script>

<!-- alert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>

<!-- CSS ที่สร้างขึ้น -->
<link rel="stylesheet" href="css/responsive.css">
<!-- <link rel="stylesheet" href="css/Social-icons.css"> -->

<style>

</style>
</head>
<body>
<div class="fix">
    <div class="head">
        <div class="row">
            <div class="col-sm-1"></div>
            <!-- <div class="col-sm-6"><h1>Logo</h1></div> -->
            <div class="col-sm-4"> <img src="icons/cropped-Head_Logo-1-2048x315.png" style="width:80%"></div>
            <div class="col-sm-5"></div>
        </div>
    </div>
<div class="menus-head" id="myTopnav">
        <a></a>
        <a></a>
        <a href="https://airadmittance.com/">HOME<br>หน้าหลัก</a>
        <a href="https://airadmittance.com/article/">BLOG<br>รอบรู้เรื่องท่อ</a>
        <a href="https://airadmittance.com/product/">PRODUCT<br>สินค้า</a>
        <a href="https://airadmittance.com/installation/">INSTALLATION<br>วิธีการติดตั้ง</a>
        <a href="https://airadmittance.com/technical-data/">TECHNICAL DATA<br>ข้อมูลเชิงเทคนิค</a>
        <a href="https://airadmittance.com/project-references/">PROJECT REF.<br>โครงการชั้นนำ</a>
        <a href="https://airadmittance.com/download/">DOWLOAD<br>ข้อมูล-ราคาท่อ PPR</a>
        <a href="#" class="active">DEALER<br>หาซื้อง่าย</a>
        <a href="https://airadmittance.com/service/">SERVICE<br>บริการ</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
</div>
</div>

<div class="example" >
<img src="icons/shutterstock_1114262204-1.jpg" width="100%" >
    <div class="insert-image">
      <!-- <h2><b>Picture</b></h2> -->
    </div>
</div>

<!--  -->
<div class="page" id="main">
  <div class="menu-left"> 
     
    </div>

<!-- Text -->
  <div class="main">
    <div class="text">
        <h3><b>ผู้แทนจำหน่าย<br>ทั่วไทย หาซื้อง่าย ท่อ ไทย พีพี-อาร์</b></h3>
    </div>

    <div class="text">
        <p>ร้านขายท่อ PPR หาซื้อง่ายใกล้บ้าน ใกล้โครงการไม่ต้องกังวลของขาดหรือหาซื้อไม่ได้ ท่าน้ำไทย พีพี-อาร์ มี Stock ท่อ PPR และข้อต่อ PPR มากที่สุดในประเทศไทย อีกทั้งยังมีร้านขายท่อ PPR จำหน่าย PPR มากที่สุด 
            มีทั้งร้านค้าวัสดุ โมเดิร์นเทรด ชั้นนำทั่วไทยที่พร้อมจำหน่ายทั้งขายส่ง ขายปลีก และในออนไลน์ จึงมั่นใจได้ว่าหน้างานหรือโครงการต่าง ๆ ของคุณจะดำเนินงานได้อย่างต่อเนื่อง ไม่มีสะดุดส่งผลกระทบต่อความหน้าเชื่อถือ เสร็จงานตรงตามเวลาที่กำหนด
        </p>
    </div>

 <!----------------------- Google Maps ----------------------->
<div class="container">
    <div class="row">
      <div class="col-md-7">
      <div id="map_canvas"></div>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>  
    <script type="text/javascript">

    //  ของการค้นหาบริษัทที่ 1
    $(function(){
        $("#data1").keyup(function(e){
            if(e.keyCode==13){ // เมื่อกดปุ่ม enter ในช่องค้นหา
                search_map(); // ให้เรียกใช้ฟังก์ชั่นการค้นหา แบบ ajax
            }
        });
    });
    $(function(){
        $("#data2").keyup(function(e){
            if(e.keyCode==13){ // เมื่อกดปุ่ม enter ในช่องค้นหา
                search_map(); // ให้เรียกใช้ฟังก์ชั่นการค้นหา แบบ ajax
            }
        });
    });

    // ของการค้นหาบรฺิษัที่ 2
    $(function(){
        $("#ndata1").keyup(function(e){
            if(e.keyCode==13){ // เมื่อกดปุ่ม enter ในช่องค้นหา
                search_map(); // ให้เรียกใช้ฟังก์ชั่นการค้นหา แบบ ajax
            }
        });
    });
    $(function(){
        $("#ndata2").keyup(function(e){
            if(e.keyCode==13){
                search_map();
            }
        })
    })
    $(function(){
        $("#ndata3").keyup(function(e){
            if(e.keyCode==13){
                search_map();
            }
        })
    })

    var map; // กำหนดตัวแปร map ไว้ด้านนอกฟังก์ชัน เพื่อให้สามารถเรียกใช้งาน จากส่วนอื่นได้
    var infowindow=[]; // กำหนดตัวแปรสำหรับเก็บตัว popup แสดงรายละเอียดสถานที่
    var infowindowTmp; // กำหนดตัวแปรสำหรับเก็บลำดับของ infowindow ที่เปิดล่าสุด
    var my_Marker=[]; // กำหนดตัวแปรสำหรับเก็บตัว marker เป็นตัวแปร array
    var GGM; // กำหนดตัวแปร GGM ไว้เก็บ google.maps Object จะได้เรียกใช้งานได้ง่ายขึ้น
    function initialize() { // ฟังก์ชันแสดงแผนที่
    GGM=new Object(google.maps); // เก็บตัวแปร google.maps Object ไว้ในตัวแปร GGM
    // กำหนดจุดเริ่มต้นของแผนที่
    var my_Latlng  = new GGM.LatLng(13.761728449950002,100.6527900695800);
    // กำหนด DOM object ที่จะเอาแผนที่ไปแสดง ที่นี้คือ div id=map_canvas
    var my_DivObj=$("#map_canvas")[0]; 
    // กำหนด Option ของแผนที่
    var myOptions = {
        zoom: 8, // กำหนดขนาดการ zoom
        center: my_Latlng , // กำหนดจุดกึ่งกลาง
        mapTypeId:GGM.MapTypeId.ROADMAP, // กำหนดรูปแบบแผนที่
        mapTypeControlOptions:{ // การจัดรูปแบบส่วนควบคุมประเภทแผนที่
            position:GGM.ControlPosition.TOP_RIGHT, // จัดตำแหน่ง
            style:GGM.MapTypeControlStyle.DROPDOWN_MENU // จัดรูปแบบ style 
        }
    };
    map = new GGM.Map(my_DivObj,myOptions);// สร้างแผนที่และเก็บตัวแปรไว้ในชื่อ map
    }    //end function initialize()

    function search_map(){ // ฟังก์ชั่นการค้นหา แบบ ajax
    var i_marker=0; // กำหนดตัวแปร ไว้นับจำนวน marker หรือปักหมุด
    var data_found=0;// กำหนดตัวแปร ไว้นับจำนวนรายการที่ค้นจอ
    // $tp1 = '';
    // test1++;
    $("#navigator_link").html('');
    for(i=0;i<my_Marker.length;i++){ // วนหลูปเพื่อยกเลือก ตัว marker ทั้งหมด หรือล้างค่า ก่อนกำหนดใหม่
        my_Marker[i].setMap(null);// คำสั่งในการยกเลิกตัว marker
    }

    $.ajax({
        url:"test2.php", // ใช้ ajax ใน jQuery เรียกใช้ไฟล์ xml 
        type: "GET", // ส่งค่าข้อมูลแบบ GET ไปที่ไฟล์ test16.php
        data: { data_search :$("#data1").val(), data2 :$("#data2").val(), ndata_search :$("#ndata1").val(), ndata2 :$("#ndata2").val(), ndata3 :$("#ndata3").val() }, //// รับค่า จากการ input text ชื่อ id เท่ากับ data_search และ data2
        dataType: "xml",
        success:function(xml){
            $(xml).find('marker').each(function(m){ // วนลูปดึงค่าข้อมูลมาสร้าง marker  
                
                var markerID=$(this).find("id").text();// นำค่าต่างๆ มาเก็บไว้ในตัวแปรไว้ใช้งาน    
                var markerName=$(this).find("name").text();// นำค่าต่างๆ มาเก็บไว้ในตัวแปรไว้ใช้งาน    
                var markerLat=$(this).find("latitude").text();// นำค่าต่างๆ มาเก็บไว้ในตัวแปรไว้ใช้งาน    
                var markerLng=$(this).find("longitude").text(); // นำค่าต่างๆ มาเก็บไว้ในตัวแปรไว้ใช้งาน  
                var typename=$(this).find("typename").text(); // นำค่าต่างๆ มาเก็บไว้ในตัวแปรไว้ใช้งาน 
                var pname_th=$(this).find("pnameth").text(); // นำค่าต่างๆ มาเก็บไว้ในตัวแปรไว้ใช้งาน 
                var aname_th=$(this).find("anameth").text(); // นำค่าต่างๆ มาเก็บไว้ในตัวแปรไว้ใช้งาน 
                var markerIcons=$(this).find("icon").text(); // นำค่าต่างๆ มาเก็บไว้ในตัวแปรไว้ใช้งาน        
                var image1=new GGM.MarkerImage(markerIcons);  // สร้างตัวแปร image และใช้คำสั่งของ API มาเก็บค่าไอคอนอีกรอบ

        // // ตัว check typename ว่ามีค่าหรือไม่?  
        if(typename == ''){
        var tp1 = 'บริษัทประเภทที่ 1'; 
        }else{
        var tp1 = typename;
        }            

    //สร้างแปรมาเก็บค่า HTML.
    var navi_link="<tr><td>"
                +"<a href='javascript:showInfo("+m+")'><i class='fas fa-map-marker-alt' style='font-size:20px'></i></a>"
            +"</td><td><font color='red'><b>"
                +tp1+
            "</b></font></td></tr>"          
        +"<tr><td>"
            +"</td><td><b>สถานที่ตั้ง :&nbsp;"
                +markerName+
                "<br />จังหวัด :&nbsp;"
                +pname_th+
                "<br />เขต :&nbsp;"
                +aname_th+
                "<br/>ละติจูดที่ : &nbsp;"
                +markerLat+
                "<br/>ลองจิจูดที่ : &nbsp;"
                +markerLng+
        "</b></td></tr>";

    $("#navigator_link").prepend("<table class='table'>"+navi_link+"</table>");    
    // นำลิ้สรายการ พร้อมลิ้งค์ไปแสดงใน id = " sidebar  "     

                var markerLatLng=new GGM.LatLng(markerLat,markerLng);
                my_Marker[i_marker] = new GGM.Marker({ // สร้างตัว marker เป็นแบบ array
                    position:markerLatLng,  // กำหนดไว้ที่เดียวกับจุดกึ่งกลาง
                    animation: google.maps.Animation.DROP,  //กำหนด animation ให้กับตัว marker
                    // icon: image1, // เปลี่ยนเป็น icon ตามรูปภาพที่ดึงจาก xml 
                    map: map, // กำหนดว่า marker นี้ใช้กับแผนที่ชื่อ instance ว่า map
                    title:markerName // แสดง title เมื่อเอาเมาส์มาอยู่เหนือ
                });

                //  กรณีตัวอย่าง ดึง title ของตัว marker มาแสดง
                infowindow[m] = new GGM.InfoWindow({// สร้าง infowindow ของแต่ละ marker เป็นแบบ array
                    content: my_Marker[m].getTitle() // ดึง title และตัวแปรต่างๆที่รับค่า ในตัว marker มาแสดงใน infowindow
    +"<br /><a href='https://www.google.com/maps/search/"+markerLat+","+markerLng+"/@"+markerLat+","+markerLng+",13z?ht=th' target='_blank'>คลิกเพื่อดูใน Google Maps</a>" // แสดงเนื้อหา ของแต่ละ icons
                });
                                            
                GGM.event.addListener(my_Marker[m], 'click', function(){ // เมื่อคลิกตัว marker แต่ละตัว
                    if(infowindowTmp!=null){ // ให้ตรวจสอบว่ามี infowindow ตัวไหนเปิดอยู่หรือไม่
                        infowindow[infowindowTmp].close();  // ถ้ามีให้ปิด infowindow ที่เปิดอยู่
                    }
                    infowindow[m].open(map,my_Marker[m]); // แสดง infowindow ของตัว marker ที่คลิก
                    infowindowTmp=m; // เก็บ infowindow ที่เปิดไว้อ้างอิงใช้งาน
                    map.panTo(infowindow[m].getPosition()); // เลื่อนไปที่ marker ที่คลิก
                    map.setZoom(10);

                    // if(my_Marker[m].getAnimation() !== null ){
                    //     my_Marker[m].setAnimation(null);
                    // }else{
                    //     my_Marker[m].setAnimation(GGM.Animation.BOUNCE);
                    // }
                });  
                    
                i_marker++;// เพิ่มค่า เพื่อเก็บจำนวนตัว marker ทั้งหมด
                    if(i_marker==1){
                        // เก็บค่าตำแหน่ง พักัด สำหรับใช้ ย้ายตำแหน่ง ตรงกลางแผนที่ไปที่ดังกล่าว กรณีพบข้อมูลเดียว 
                        newCenterLatLon=markerLatLng;   
                    }
                    data_found++;// เก็บค่า เพื่อนับจำนวนรายการที่ค้นเจอทั้งหมด
            //test1++;

            }); //End วนลูปดึงค่าข้อมูลมาสร้าง marker!

            if(i_marker==1){    
                map.setCenter(newCenterLatLon);// ถ้าค้นเจอเพียงรายการเดียว ให้ย้ายตรงกลางแผนที่ไปที่ ตำแหน่งที่เจอ
            }
            if(i_marker>1){ // // ถ้าค้นเจอมากกว่า 1 ตำแหน่ง ให้ย้าย ตรงกลาง แผนที่ มาตำแหน่งเดิม ตอนแรก
                newCenterLatLon=new GGM.LatLng(13.727833,100.525604);   
                map.setCenter(newCenterLatLon); 
            }
            if(data_found==0){ // ถ้าไม่พบข้อมูลใดๆ ให้แสดงเตือน
                //alert("ไม่พบข้อมูล ตามค้นหา");   
            swal({
                title: 'คำเตือน!',
                text: ' ไม่พบสถานที่ หรือคุณอาจระบุสถานที่ผิดหรือไม่ชัดเจน!',
                icon: 'error',
                buttons: 'ตกลง',
                dangerMode: true,
                }).then(function(isConfirm) {
                if (isConfirm) {
                    window.location = '#main'; 
                    // <--- submit form programmatically ---->
                } else {
                    
                }
                });
                
                $("#data_search").val("");
            }   // End data_found == 0;

        }   // Ed function(xml)

    }); // end Show data ajax 

    }    //end searchmap

    // ส่วนของฟังก์ชันที่เรียกใช้งานจากลิ้งค์ เพื่อแสดง infowindow
    function showInfo(m){ // ส่งค่า  i  คือ index ของตัว marker แต่ละตัวในแผนที่
    //  เมื่อคลิกจากลิ้งค์ ให้ตัว marker ในแผนที่นั้นๆ ถูกคลิกด้วย
    GGM.event.trigger(my_Marker[m],"click");
    // เมื่อคลิกจากลิ้ง จะซูมเข้าไปหาตัว marker นั้น!!
    map.setZoom(12);
    }   

    $(function(){
        // โหลด สคริป google map api เมื่อเว็บโหลดเรียบร้อยแล้ว
        // ค่าตัวแปร ที่ส่งไปในไฟล์ google map api
        // v=3.2&sensor=false&language=th&callback=initialize
        //  v เวอร์ชัน่ 3.2
        //  sensor กำหนดให้สามารถแสดงตำแหน่งทำเปิดแผนที่อยู่ได้ เหมาะสำหรับมือถือ ปกติใช้ false
        //  language ภาษา th ,en เป็นต้น
        //  callback ให้เรียกใช้ฟังก์ชันแสดง แผนที่ initialize

        $("<script/>", {
        "type": "text/javascript",
        src: "//maps.google.com/maps/api/js?v=3.2&sensor=false&language=th&callback=initialize"
        }).appendTo("body"); 

    });

    </script>
    </div>  <!-- //div 7 -->

    <div class="col-md-5">
        <form id="form_search_map_data" name="form_search_map_data" method="post" action="" onsubmit="return false;" >
        <div class="search1">
        <h3><i class='fas fa-landmark'></i>ร้านค้าวัสดุชั้นนำ</h3>
            <div class="row">
            <?php    
                $query = "SELECT * FROM com_type1 AS t1 
                    INNER JOIN provinces AS p ON p.p_id = t1.p_id
                    WHERE t1.p_id
                    GROUP BY t1.p_id";
                $result = mysqli_query($conn, $query);   
            ?>   
                <div class="col-sm-6" >
                
                    <select name="data_search" id="data1" class="form-control" >
                        <option value=""><b>-จังหวัด-</b></option>
                        
                        <?php while($row = mysqli_fetch_array($result))  { ?>
                            <option value="<?php echo $row["p_id"]; ?>"><?php echo $row["pname_th"]; ?> </option>
                        <?php  }  ?>

                    </select>
                </div>
                
                <div class="col-sm-6">
                    <select name="data2" id="data2" class="form-control">
                    <option value="">เขต/อำเภอ</option>
                    </select>
                </div>

                <div class="col-sm-12">
    <br>            <input type="button" name="bt_search" id="bt_search" value="ค้นหา" onclick="search_map();" class="btn btn-outline-success btn-block" /><br>
                </div>
            </div>
        </div>
    <!-- ------------------------------------------------------------------------------- -->
        <div class="search2">
        <h3><i class='fas fa-landmark'></i> โมเดิร์นเทรด</h3>
            <div class="row">
            <?php    
                $query2 = "SELECT * FROM type";
                $result2 = mysqli_query($conn, $query2);   
            ?>
                <div class="col-sm-6">
                    <select name="ndata_search" id="ndata1" class="form-control" >
                        <option value="">-ร้านค้า-</option>
                    <?php while($row2 = mysqli_fetch_array($result2))  { ?>
                        <option value="<?php echo $row2["t_id"]; ?>"><?php echo $row2["t_name"]; ?> </option>
                    <?php  }  ?>
                    </select>
                </div>
            
                <div class="col-sm-6">
                    <select name="ndata2" id="ndata2" class="form-control">
                        <option value="">จังหวัด</option>
                    </select>
                </div>

                <div class="col-sm-6">
    <br>            <select name="ndata3" id="ndata3" class="form-control">
                        <option value="">เขต/อำเภอ</option>
                    </select>
                </div>
                
                <div class="col-sm-6">
    <br>            <input type="button" name="bt_search2" id="bt_search2" value="ค้นหา" onclick="search_map();" class="btn btn-outline-light btn-block" /><br>
                <!-- <button type="button" name="bt_search2" id="bt_search2"  onclick="search_map();" class="btn btn-default btn-block" >ค้นหา</button> -->
                </div>
            </div>      <!-- </row> -->
        </div>   
        </form>      <!-- </form> -->
    <br>
            <div class="contact" align="center">
                <h5><b>ต้องการสอบถามเพิ่มเติม</b></h5><h5><b>ติดต่อเราได้ที่: 09 8765 432-1</b></h5>
                <button class="btn btn-success" ><i class='fas fa-phone-square-alt' style='font-size:24px'></i><a> ติดต่อเรา..</a></button>
            </div>

    </div>
    
        </div>       <!-- //row -->
    </div>       <!-- //container -->

    <!-- ส่งค่า id input ไปยังไฟล์ script -->
    <?php
        include 'script3.php';
    ?>

<div class="container">
<div class="col-md-5">
    <div id="borders">
        <br><h4>แสดงผลลัพธ์การค้นหา มีรายการดังนี้ :</h4>
        <div id="side_bar">
            <div id="navigator_link"> 
                <h3><u>ยังไม่มีข้อมูลที่ค้นหา </u></h3>   
            </div>
        </div>
    </div>
</div>
                    </div>

</div>    <!-- //main -->

  <div class="right">
    <!-- <img src="icons/a2ecafa8b7a85af2671fb9b4b2dfa311.gif" style="width:100%">
        <h2>About</h2>
        <p>This is example website for learning with responsive website.</p> -->
  </div>
  

</div>      <!-- //page -->

<!--  -->
<div class="footer">
    <!-- © Ex. w3schools.com and apply by <a href="https://www.google.co.th/">Nattasit Suksumran</a> -->
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

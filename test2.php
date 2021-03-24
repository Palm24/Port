<?php
header("Content-type:text/xml; charset=UTF-8");              
header("Cache-Control: no-store, no-cache, must-revalidate");             
header("Cache-Control: post-check=0, pre-check=0", false); 

$servername = "localhost";
$username = "admin";
$password = "1234";
$dbname = "testnewggmap";

$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_query($conn, "SET NAMES UTF8");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// XML XML !!! ห้ามมี COMMENT ที่เป็นแบบ HTML!!! เด็ดขาด!!
echo '<?xml version="1.0" encoding="utf-8"?>';
?>
<markers>

<?php
 
// parameter Search 1 !!
if(isset($_GET['data_search']) != ''){ //ตรวจสอบว่ามีการส่งค่ามาหรือไม่ และไม่เป็นค่าว่าง
    echo $data_search = $_GET['data_search']; //ถ้าไม่เป็นค่าว่าง จะเก็บค่า data_search ไว้ในตัวแปรที่่กำหนดไว้
}else{
    echo $data_search = '';
}

if(isset($_GET['data2']) != ''){ 
    echo $data2 = $_GET['data2'];
}else{
    echo $data2 = '';
}

// parameter Search2 !!
if(isset($_GET['ndata_search']) != ''){ 
    echo $ndata_search = $_GET['ndata_search'];
}else{
    echo $ndata_search = '';
}

if(isset($_GET['ndata2']) != ''){ 
    echo $ndata2 = $_GET['ndata2'];
}else{
    echo $ndata2 = '';
}

if(isset($_GET['ndata3']) != ''){ 
    echo $ndata3 = $_GET['ndata3'];
}else{
    echo $ndata3 = '';
}

    // Start query Search 1 !!!
    if($data_search != '' && $data2 == ''){ //เช็คว่า ทั้ง 2 ตัวแปรว่ามีหรือไม่มีค่าว่าง
        $pro = "SELECT * FROM com_type1 AS t0              
        INNER JOIN provinces AS p ON p.p_id = t0.p_id
        INNER JOIN amphures AS a ON a.a_id = t0.a_id
        WHERE t0.p_id = '$data_search' 
        ORDER BY L_ID1 DESC"; // ส่วนการ query ข้อมูล
        $qr=mysqli_query($conn, $pro);
        while($rs = mysqli_fetch_array($qr)){       
?>

<marker id="<?php echo $rs['L_ID1']; ?>">
        <name><?php echo $rs['NAME']; ?></name>
        <latitude><?php echo $rs['LAT']; ?></latitude>
        <longitude><?php echo $rs['LNG']; ?></longitude>
        <pnameth><?php echo $rs['pname_th']; ?></pnameth>
        <anameth><?php echo $rs['aname_th']; ?></anameth>
        <icon><?php echo $rs['icons']; ?></icon>
</marker>

<?php       }
        }elseif($data_search != '' && $data2 != ''){ //เช็คว่า ทั้ง 2 ตัวแปรว่ามีหรือไม่มีค่าว่าง
            $dt = "SELECT * FROM com_type1 AS t1
            INNER JOIN provinces AS p ON p.p_id = t1.p_id
            INNER JOIN amphures AS a ON a.a_id = t1.a_id
            WHERE t1.p_id = '$data_search' AND t1.a_id = '$data2' ";
            $qr1 = mysqli_query($conn, $dt);
            while($rs = mysqli_fetch_array($qr1)){
?>

<marker id="<?php echo $rs['L_ID1']; ?>">
        <name><?php echo $rs['NAME']; ?></name>
        <latitude><?php echo $rs['LAT']; ?></latitude>
        <longitude><?php echo $rs['LNG']; ?></longitude>
        <pnameth><?php echo $rs['pname_th']; ?></pnameth>
        <anameth><?php echo $rs['aname_th']; ?></anameth>
        <icon><?php echo $rs['icons']; ?></icon>
</marker>

<?php    // Stat query Search 2 !!!
             }
        }elseif($ndata_search != '' && $ndata2 == '' && $ndata3 == ''){
            $tp = "SELECT * FROM com_type2 AS t2
            INNER JOIN type AS t ON t.t_id = t2.t_id
            INNER JOIN provinces AS p ON p.p_id = t2.p_id
            INNER JOIN amphures AS a ON a.a_id = t2.a_id
            WHERE t2.t_id = '$ndata_search' ";
            $qr2 = mysqli_query($conn, $tp);
            while($rs = mysqli_fetch_array($qr2)){
?>

<marker id="<?php echo $rs['L_ID2']; ?>" >
        <name><?php echo $rs['NAME']; ?></name>
        <latitude><?php echo $rs['LAT']; ?></latitude>
        <longitude><?php echo $rs['LNG']; ?></longitude>
        <typename><?php echo $rs['t_name']; ?></typename>
        <pnameth><?php echo $rs['pname_th']; ?></pnameth>
        <anameth><?php echo $rs['aname_th']; ?></anameth>
        <icon><?php echo $rs['icons']; ?></icon>
</marker>

<?php
            }
        }elseif($ndata_search != '' && $ndata2 != '' && $ndata3 == ''){
            $pro2 = "SELECT * FROM com_type2 AS t2
            INNER JOIN type AS t ON t.t_id = t2.t_id
            INNER JOIN provinces AS p ON p.p_id = t2.p_id
            INNER JOIN amphures AS a ON a.a_id = t2.a_id
            WHERE t2.t_id = '$ndata_search' AND t2.p_id = '$ndata2' ";
            $qr3 = mysqli_query($conn, $pro2);
            while($rs = mysqli_fetch_array($qr3)){
?>

<marker id="<?php echo $rs['L_ID2']; ?>" >
        <name><?php echo $rs['NAME']; ?></name>
        <latitude><?php echo $rs['LAT']; ?></latitude>
        <longitude><?php echo $rs['LNG']; ?></longitude>
        <typename><?php echo $rs['t_name']; ?></typename>
        <pnameth><?php echo $rs['pname_th']; ?></pnameth>
        <anameth><?php echo $rs['aname_th']; ?></anameth>
        <icon><?php echo $rs['icons']; ?></icon>
</marker>

<?php       }
        }elseif($ndata_search != '' && $ndata2 != '' && $ndata3 != ''){
            $ds = "SELECT * FROM com_type2 AS l
            INNER JOIN type AS t ON t.t_id = l.t_id
            INNER JOIN provinces AS p ON p.p_id = l.p_id
            INNER JOIN amphures AS a ON a.a_id = l.a_id
            WHERE l.t_id = '$ndata_search' AND l.p_id = '$ndata2' AND l.a_id = '$ndata3' ";
            $qr4 = mysqli_query($conn, $ds);
            while($rs = mysqli_fetch_array($qr4)){
?>

<marker id="<?php echo $rs['L_ID2']; ?>" >
        <name><?php echo $rs['NAME']; ?></name>
        <latitude><?php echo $rs['LAT']; ?></latitude>
        <longitude><?php echo $rs['LNG']; ?></longitude>
        <typename><?php echo $rs['t_name']; ?></typename>
        <pnameth><?php echo $rs['pname_th']; ?></pnameth>
        <anameth><?php echo $rs['aname_th']; ?></anameth>
        <icon><?php echo $rs['icons']; ?></icon>
</marker>

<?php   
            }
    }else{
        echo '○เกิดข้อผิดพลาดในการค้นหา โปรดรองใหม่อีกครั้ง!!○';
    }    
?>

</markers>
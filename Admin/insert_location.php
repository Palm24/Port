<html>
<head>
		<script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>
</head>
<body>
<?php
$servername = "localhost";
$username = "admin";
$password = "1234";
$dbname = "google_maps";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_query($conn, "SET NAMES UTF8");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// require '../connectdb.php';
// error_reporting (E_ALL ^ E_NOTICE);
echo '<pre>';
    print_r($_POST);
echo '</pre>';

if($_POST['com1'] == 'com_type1'){
    $com1 = $_POST['com1'];
    $name1 = $_POST['name1'];
    $lat1 = $_POST['lat1'];
    $lng1 = $_POST['lng1'];
    $zoom1 = $_POST['zoom1'];
    $phone1 = $_POST['phone1'];
    $province1 = $_POST['data_search'];
    $amphure1 = $_POST['data2'];
}else{
    $com2 = $_POST['com2'];
    $name2 = $_POST['name1'];
    $lat2 = $_POST['lat2'];
    $lng2 = $_POST['lng2'];
    $zoom2 = $_POST['zoom2'];
    $province2 = $_POST['ndata_search'];
    $amphure2 = $_POST['ndata2'];
    $type = $_POST['type'];
}

// $check = "SELECT * FROM com_type1 WHERE NAME = '$name1' OR LAT = '$lat1' OR LNG = '$lng1' ";
// $check = "SELECT * FROM com_type1 WHERE NAME = '$name1' ";
// $result = mysqli_query($conn, $check) or die ("Error in query: $check " . mysqli_error());
// $num = mysqli_fetch_array($result);

// if($num > 0)   		
// {
// 	echo "
// 	<script>
// 	swal({
// 		title: 'คำเตือน!',
// 		text: 'ชื่อสถานที่ หรือละติดจูด หรือลองจิจูด มีข้อมูลที่ซ้ำกัน กรุณาใส่ข้อูลใหม่อีกครั้ง !!',
// 		icon: 'warning',
// 		buttons: 'ตกลง',
// 		dangerMode: true,
// 		}).then(function(isConfirm) {
// 		if (isConfirm) {
// 			history.back(); 
// 			// <--- submit form programmatically ---->
// 		} else {
			
// 		}
// 		});
// 	</script> ";
// }else{
//     if($com1 = $_POST['com1']){
//         $sql = "INSERT INTO com_type1(NAME, LAT, LNG, Zoom, Phone, p_id, a_id)
//         VALUES ('$name1', '$lat1', '$lng1', '$zoom1', '$phone1','$province1', '$amphure1')";
//         if ($conn->query($sql) === TRUE) 
//             {				
//                 echo "
//                 <script>
//                 swal({
//                     title: 'เสร็จสิ้น',
//                     text: ' เพิ่มข้อมูลเรียบร้อย !',
//                     icon: 'success',
//                     buttons: 'เสร็จสิ้น',
//                     dangerMode: true,
//                     }).then(function(isConfirm) {
//                     if (isConfirm) {
//                         window.location = 'Add_location.php'; 
//                         // <--- submit form programmatically ---->
//                     } else {
                        
//                     }
//                     });
//                 </script> ";
                
//             }else {
//             echo "
//             <script>
//             swal({
//                 title: 'คำเตือน!',
//                 text: 'เกิดข้อผิดพลาดในการบันทึกข้อมูล โปรดรทำรายการใหม่อีกครั้ง !',
//                 icon: 'info',
//                 buttons: 'ตกลง',
//                 dangerMode: true,
//                 }).then(function(isConfirm) {
//                 if (isConfirm) {
//                     window.location = 'history.back(); '; 
//                     // <--- submit form programmatically ---->
//                 } else {
                    
//                 }
//                 });
//             </script> ";
//             }
//     }else{
//         $sql = "INSERT INTO com_type2(NAME, LAT, LNG, Zoom, p_id, a_id, t_id)
//         VALUES ('$name2', '$lat2', '$lng2', '$zoom2', '$province2', '$amphure2', ' $type')";
//         if ($conn->query($sql) === TRUE) 
//             {				
//                 echo "
//                 <script>
//                 swal({
//                     title: 'เสร็จสิ้น',
//                     text: ' เพิ่มข้อมูลเรียบร้อย !',
//                     icon: 'success',
//                     buttons: 'เสร็จสิ้น',
//                     dangerMode: true,
//                     }).then(function(isConfirm) {
//                     if (isConfirm) {
//                         window.location = 'Show_location2.php'; 
//                         // <--- submit form programmatically ---->
//                     } else {
                        
//                     }
//                     });
//                 </script> ";
                
//             }else {
//             echo "
//             <script>
//             swal({
//                 title: 'คำเตือน!',
//                 text: 'เกิดข้อผิดพลาดในการบันทึกข้อมูล โปรดรทำรายการใหม่อีกครั้ง !',
//                 icon: 'info',
//                 buttons: 'ตกลง',
//                 dangerMode: true,
//                 }).then(function(isConfirm) {
//                 if (isConfirm) {
//                     window.location = 'history.back(); '; 
//                     // <--- submit form programmatically ---->
//                 } else {
                    
//                 }
//                 });
//             </script> ";
//         }
//     }
// }
?>
</body>
</html>
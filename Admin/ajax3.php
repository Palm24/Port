
<?php
      $con= mysqli_connect("localhost","admin","1234","testnewggmap") or die("Error: " . mysqli_error($con));
      mysqli_query($con, "SET NAMES 'utf8' ");
      //error_reporting( error_reporting() & ~E_NOTICE );
      date_default_timezone_set('Asia/Bangkok');


      if (isset($_POST['function']) && $_POST['function'] == 'data1') { // ถ้า มีการส่งค่ามา และค่านั้นไม่ใช่ค่าว่าง
        $id = $_POST['id']; /// รับค่าตัวแปร id จาก script2.php
        // ด้านล่างเป็นโค้ด query ข้อมูล 
        $sql = "SELECT * FROM amphures AS a
        INNER JOIN provinces AS p ON p.p_id = a.p_id 
        WHERE a.p_id='$id'";
        $query = mysqli_query($con, $sql);
        echo '<option value="" selected >-เขต/อำเภอ-</option>'; // ส่ง โค้ด html นี้กลับไปหน้า test12.php  ตรง dropdown ที่ 2
        foreach ($query as $value) { // วนลูบเรียกข้อมูลขึ้นมาแสดง
          echo '<option value=" '.$value['a_id'].' ">'.$value['aname_th'].'</option>'; // แสดงค่าใน dropdown ตามที่เรา query ข้อมูล
        }
      }

// ------------------------------------------------------------------------------------------------------------------

      if (isset($_POST['function']) && $_POST['function'] == 'ndata1') { // ถ้า มีการส่งค่ามา และค่านั้นไม่ใช่ค่าว่าง
        $id = $_POST['id']; /// รับค่าตัวแปร id จาก script2.php
        // ด้านล่างเป็นโค้ด query ข้อมูล 
        $sql = "SELECT * FROM amphures AS a
        INNER JOIN provinces AS p ON p.p_id = a.p_id 
        WHERE a.p_id='$id'";
        $query = mysqli_query($con, $sql);
        echo '<option value="" selected >-เขต/อำเภอ-</option>'; // ส่ง โค้ด html นี้กลับไปหน้า test12.php  ตรง dropdown ที่ 2
        foreach ($query as $value) { // วนลูบเรียกข้อมูลขึ้นมาแสดง
          echo '<option value=" '.$value['a_id'].' ">'.$value['aname_th'].'</option>'; // แสดงค่าใน dropdown ตามที่เรา query ข้อมูล
        }
      }
?>
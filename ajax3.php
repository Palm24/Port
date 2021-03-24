
<?php
      $con= mysqli_connect("localhost","admin","1234","testnewggmap") or die("Error: " . mysqli_error($con));
      mysqli_query($con, "SET NAMES 'utf8' ");
      //error_reporting( error_reporting() & ~E_NOTICE );
      date_default_timezone_set('Asia/Bangkok');


      if (isset($_POST['function']) && $_POST['function'] == 'data1') { // ถ้า มีการส่งค่ามา และค่านั้นไม่ใช่ค่าว่าง
        $id = $_POST['id']; /// รับค่าตัวแปร id จาก script2.php
        // ด้านล่างเป็นโค้ด query ข้อมูล 
        $sql = "SELECT * FROM com_type1 AS l
        INNER JOIN provinces AS p ON p.p_id = l.p_id
        INNER JOIN amphures AS a ON a.a_id = l.a_id  
        WHERE l.p_id = '$id'  
        GROUP BY l.a_id ";
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
          $sql = "SELECT * FROM provinces as p
        INNER JOIN com_type2 as t ON t.p_id = p.p_id
        WHERE t.t_id='$id' 
        GROUP BY t.p_id ASC ";
          $query = mysqli_query($con, $sql);
          echo '<option value="" selected >-จังหวัด-</option>'; // ส่ง โค้ด html นี้กลับไปหน้า test12.php  ตรง dropdown ที่ 2
          foreach ($query as $values) { // วนลูบเรียกข้อมูลขึ้นมาแสดง
              echo '<option value="'.$values['p_id'].'/'.$values['t_id'].'">'.$values['pname_th'].'</option>'; // แสดงค่าใน dropdown ตามที่เรา query ข้อมูล
          // ส่งค่ากลับไป script2 2 ค่าคือ "id จังหวัด" และ "id ประเภท"                
          }
      }
    
      if (isset($_POST['function']) && $_POST['function'] == 'ndata2') {
        $id = $_POST['id']; // ค่าที่จะแสดงออกมาเป็นแบบ Ex. " 36/2 "
        $test = explode('/', $id);  //ใช้ explode ในการตัด str ตัว "/" ออกเพื่อแยกตัว array
        $province = $test[0];  // กำหนดตัว array ที่ต้องการและมาเก็บในตัวแปรที่สร้างไว้
        $type = $test[1];  // กำหนด array ที่ต้องการและมาเก็บในตัวแปรที่สร้างไว้
    
        // qurey ข้อมูล-->แบบเงื่อนไขที่ว่าให้เลือก เขตทั้งหมดในจังหวัดนั้นๆ 
        //ถ้าต้องการเลือกเฉพาะเขตนั้นๆ ต้องกำหนดเงื่อนไขจาก p_id และ com_id !!!
        $sql2 = "SELECT * FROM amphures AS a
        INNER JOIN com_type2 AS t ON t.a_id = a.a_id
        WHERE t.p_id = '$province' AND t.t_id = '$type'
        GROUP BY  t.a_id DESC ";
        $query2 = mysqli_query($con, $sql2);
        echo '<option value="" selected >-เขต/อำเภอ-</option>';
        foreach ($query2 as $value2) {
          echo '<option value=" '.$value2['a_id'].' ">'.$value2['aname_th'].'</option>';
        }
      }

?>
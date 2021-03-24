<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
  $('#data1').change(function() { //รับค่า id จาก test1.php
    var id_province = $(this).val(); //สร้างตัวแปร id_province มาเก็บค่า

      $.ajax({
      type: "POST",
      url: "ajax3.php", // ส่งค่าข้อมูลแบบ POST ไปที่ไฟล์ ajax2.php
      data: {id:id_province,function:'data1'}, //// รับค่าจาก ตัวแปร id_province และมาเก็บไว้ในตัวแปร id อีกรอบ
      success: function(data){ /// ถ้าสำเร็จเข้าฟังก์ืชั่นนี้
          $('#data2').html(data); ///ไปเรียกค่าจากฟังก์ชั่น data2 ด้านล่าง
          $('#ndata1').val('');  /// ทำให้ form การค้นหาของ ndata1 เป็นค่าว่าง 
      }
    });
  });

  $('#data2').change(function() {
    var id_amphures = $(this).val();

      $.ajax({
      type: "POST",
      url: "ajax3.php",
      data: {id:id_amphures,function:'data2'},
      success: function(data){
          $('#data3').html(data);  
      }
    });
  });

  $('#ndata1').change(function() { //รับค่า id จาก test1.php
    var id_province = $(this).val(); //สร้างตัวแปร id_province มาเก็บค่า

      $.ajax({
      type: "POST",
      url: "ajax3.php", // ส่งค่าข้อมูลแบบ POST ไปที่ไฟล์ ajax2.php
      data: {id:id_province,function:'ndata1'}, //// รับค่าจาก ตัวแปร id_province และมาเก็บไว้ในตัวแปร id อีกรอบ
      success: function(data){ /// ถ้าสำเร็จเข้าฟังก์ืชั่นนี้
          $('#ndata2').html(data); ///ไปเรียกค่าจากฟังก์ชั่น ndata2 ด้านล่าง
          $('#data1').val(''); /// ทำให้ form การค้นหาของ data1 เป็นค่าว่าง 
      }
    });
  });

  $('#ndata2').change(function() {
    var id_amphures = $(this).val();
    // alert(id_amphures);
      $.ajax({
      type: "POST",
      url: "ajax3.php",
      data: {id:id_amphures,function:'ndata2'},
      success: function(data){
          $('#ndata3').html(data);  
      }
    });
  });

</script>
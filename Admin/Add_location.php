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
?> 
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Add Locations</title>
   <!-- Icon Website  -->
   <link rel="short icon" type="image/x-icon" href="img/atom_icon_182535.ico">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

  <?php
      include "sidebar.php";
    ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

          <?php
            include "topbar.php";
          ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800"><i class='far fa-edit'></i>  Add Location into Database.</h1>
          <p class="mb-4">This is Demo Add DataTables For Google Maps. 
            <br >For more information about Locations, please visit the <a target="_blank" href="https://www.google.co.th/maps/">Go to Google Maps</a>.
          </p>

          <div class="row">
          <div class="col-sm-6">
          <a href="Show_location1.php" class="btn btn-outline-primary btn-sm"><i class='far fa-file-alt'></i> หน้าแสดงข้อมูลสถานที่ Shop type 1</a><br>
          <hr>
          <form action="insert_location.php" method="post" class="form-horizontal" enctype="multipart/form-data" >
            
            <div class="form-group">
              <label for="exampleInputEmail1">Dealer shop</label><br>
              <input type="radio" name="com1" value="com_type1" required="required">
                <label for="male">ร้านตัวแทน PP-R</label><br>
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Name</label>
              <input type="text" class="form-control" name="name1" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Location Name" >
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">Latitude</label>
              <input type="text" class="form-control" name="lat1" id="exampleInputPassword1" placeholder="Latitude ...." >
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">Longitude</label>
              <input type="text" class="form-control" name="lng1" id="exampleInputPassword1" placeholder="Longitude ...." >
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">Zoom</label>
              <input type="text" class="form-control" name="zoom1" id="exampleInputPassword1" placeholder="Zoom ...." value="10" >
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">Phone</label>
              <input type="text" class="form-control" name="phone1" id="exampleInputPassword1" placeholder="Phone ...."  >
            </div>

            <?php  
              $query = "SELECT * FROM provinces";
              $result = mysqli_query($conn, $query);   
            ?>
            <div class="form-group">
              <label for="exampleInputPassword1">province</label>
                <select name="data_search" id="data1" class="form-control" required="required">
                  <option value="">-จังหวัด-</option>
        <?php while($row = mysqli_fetch_array($result))  { ?>
                    <option value="<?php echo $row["p_id"]; ?>"><?php echo $row["pname_th"]; ?> </option>
        <?php  }  ?>
                  </option>      
                </select>
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">amphures</label>
                <select name="data2" id="data2" class="form-control">
                    <option value="">เขต/อำเภอ</option>
                </select>
            </div>

            <button type="submit" name="Add" id="Add" class="btn btn-success" ><i class='fas fa-plus'></i> Submit</button>
          </form>

        </div>

          <div class="col-sm-6">
          <a href="Show_location2.php" class="btn btn-outline-primary btn-sm"><i class='far fa-file-alt'></i> หน้าแสดงข้อมูลสถานที่ Shop type 2</a><br>
        <hr>
          <form action="insert_location.php" method="post" class="form-horizontal" enctype="multipart/form-data" >
            
            <div class="form-group">
              <label for="exampleInputEmail1">Dealer shop</label><br>
                <input type="radio" name="com2" value="com_type2" required="required">
                <label for="female">Shop_type2</label><br>
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Name</label>
              <input type="text" class="form-control" name="name2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Location Name" required="required">
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">Latitude</label>
              <input type="text" class="form-control" name="lat2" id="exampleInputPassword1" placeholder="Latitude ...." required="required">
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">Longitude</label>
              <input type="text" class="form-control" name="lng2" id="exampleInputPassword1" placeholder="Longitude ...." required="required">
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">Zoom</label>
              <input type="text" class="form-control" name="zoom2" id="exampleInputPassword1" placeholder="Zoom ...." value="10" required="required">
            </div>

            <?php  
              $query = "SELECT * FROM provinces";
              $result = mysqli_query($conn, $query);   
            ?>
            <div class="form-group">
              <label for="exampleInputPassword1">province</label>
                <select name="ndata_search" id="ndata1" class="form-control" required="required">
                  <option value="">-จังหวัด-</option>
        <?php while($row = mysqli_fetch_array($result))  { ?>
                    <option value="<?php echo $row["p_id"]; ?>"><?php echo $row["pname_th"]; ?> </option>
        <?php  }  ?>
                  </option>      
                </select>
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">amphures</label>
                <select name="ndata2" id="ndata2" class="form-control">
                    <option value="">เขต/อำเภอ</option>
                </select>
            </div>

            <?php  
              $query = "SELECT * FROM type";
              $result = mysqli_query($conn, $query);   
            ?>
            <div class="form-group">
              <label for="exampleInputPassword1">Type Company</label>
                <select name="type" id="type" class="form-control" required="required">
                  <option value="">Company</option>
        <?php while($row = mysqli_fetch_array($result))  { ?>
                    <option value="<?php echo $row["t_id"]; ?>"><?php echo $row["t_name"]; ?> </option>
        <?php  }  ?>
                  </option>      
                </select>
            </div>

            <button type="submit" name="Add" id="Add" class="btn btn-info" ><i class='fas fa-plus'></i> Submit</button>
          </form>

        </div>
        </div>

        <?php
          include 'script3.php';
        ?>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->
  

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>

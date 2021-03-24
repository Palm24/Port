<?php
  include "connectdb/connectdb.php";

  // echo '<pre>';
  //   print_r($_GET);
  // echo '</pre>';

    
  if(isset($_GET['L_ID1']) != ''){ 
    $ID1 = mysqli_real_escape_string($conn, $_GET['L_ID1']);

    $sql0 = "SELECT * FROM com_type1 as t1
    INNER JOIN provinces as p ON p.p_id = t1.p_id
    INNER JOIN amphures as a ON a.a_id = t1.a_id
    WHERE L_ID1 = '$ID1' ";
    $result0 = mysqli_query($conn , $sql0) or die ("Error in query: $sql0 " . mysqli_error());
    $row0 = mysqli_fetch_array($result0);
  }else{
    $ID1 = '';
  }

  if(isset($_GET['L_ID2']) != ''){ 
    $ID2 = mysqli_real_escape_string($conn, $_GET['L_ID2']);

    $sql1 = "SELECT * FROM com_type2 as t2
    INNER JOIN provinces as p ON p.p_id = t2.p_id
    INNER JOIN amphures as a ON a.a_id = t2.a_id
    INNER JOIN type as t ON t.t_id = t2.t_id
    WHERE L_ID2 = '$ID2' ";
    $result1 = mysqli_query($conn , $sql1) or die ("Error in query: $sql1 " . mysqli_error());
    $row1 = mysqli_fetch_array($result1);
  }else{
    $ID2 = '';
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

  <title>SB Admin 2 - Blank</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

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
          <h1 class="h3 mb-2 text-gray-800"><i class='far fa-edit'></i>  Edit Location.</h1>
          <p class="mb-4">This is Demo Edit DataTables For Google Maps. 
            <br >For more information about Locations, please visit the <a target="_blank" href="https://www.google.co.th/maps/">Go to Google Maps</a>.
          </p>

          <a href=javascript:history.back(1) class="btn btn-outline-danger btn-sm"><i class='fas fa-reply'></i> ย้อนกลับ</a>
          <hr>

          <form action="insert_location.php" method="post" class="form-horizontal" enctype="multipart/form-data" >
            
            <div class="form-group">
              <label for="exampleInputEmail1">Dealer shop</label><br>
                <?php
                    if($ID1 != ''){
                        echo '<i class="fas fa-warehouse" style="font-size:20px"></i> Shop type 1';
                    }else{
                        echo '<i class="fas fa-warehouse" style="font-size:20px"></i> Shop type 2';
                    }
                ?>
            </div>

            <div class="row">
                <div class="col-sm-6">
                <div class="form-group">
                <label for="exampleInputEmail1">ID Location</label>
                <input type="text" class="form-control" name="id" id="exampleInputEmail1" value="<?php if($ID1 != ''){ echo $ID1; }else{ echo $ID2; } ?>" aria-describedby="emailHelp" placeholder="Location Name" disabled="disableed">
                <input type="hidden" class="form-control" name="id" id="exampleInputEmail1" value="<?php if($ID1 != ''){ echo $ID1; }else{ echo $ID2; } ?>" aria-describedby="emailHelp">
                </div>
                </div>

                <div class="col-sm-6">
                <div class="form-group">
                <label for="exampleInputEmail1">Zoom </label>
                <input type="text" class="form-control" name="zoom" id="exampleInputEmail1" value="<?php if($ID1 != ''){ echo $row0['Zoom']; }else{ echo $row1['Zoom']; } ?>" aria-describedby="emailHelp" placeholder="Location Name"">
                </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                <div class="form-group">
                <label for="exampleInputPassword1">Latitude</label>
                <input type="text" class="form-control" name="lat" id="exampleInputPassword1" value="<?php if($ID1 != ''){ echo $row0['LAT']; }else{ echo $row1['LAT']; } ?>" placeholder="Latitude ...." required="required">
                </div>
                </div>

                <div class="col-sm-6">
                <div class="form-group">
                <label for="exampleInputPassword1">Longitude</label>
                <input type="text" class="form-control" name="lng" id="exampleInputPassword1" value="<?php if($ID1 != ''){ echo $row0['LNG']; }else{ echo $row1['LNG']; } ?>" placeholder="Longitude ...." required="required">
                </div>
                </div>
            </div>

            <?php
              if($ID1 != ''){
            ?>
              <div class="form-group">
                <label for="exampleInputPassword1">Name</label>
                <input type="text" class="form-control" name="name" id="exampleInputPassword1" value="<?php echo $row0['NAME']; ?>" value="10" required="required">
              </div>
            <?php
              }else{
            ?>
              <div class="row">
              <div class="col-sm-6">
              <div class="form-group">
                <label for="exampleInputPassword1">Company Type</label>
                <input type="text" class="form-control" name="name" id="exampleInputPassword1" value="<?php echo $row1['t_name']; ?>" value="10" required="required">
              </div>
              </div>

              <div class="col-sm-6">
              <div class="form-group">
                <label for="exampleInputPassword1">Name</label>
                <input type="text" class="form-control" name="name" id="exampleInputPassword1" value="<?php echo $row1['NAME']; ?>"  value="10" required="required">
              </div>
              </div>
              </div>
            <?php
            }
            ?>

            <div class="row">
            <div class="col-sm-6">
            <div class="form-group">
              <label for="exampleInputPassword1">province</label>
              <input type="text" class="form-control" name="province" id="exampleInputPassword1" value="<?php if($ID1 != ''){ echo $row0['pname_th']; }else{ echo $row1['pname_th']; } ?>" value="10" required="required">
            </div>
            </div>

            <div class="col-sm-6">
            <div class="form-group">
              <label for="exampleInputPassword1">amphures</label>
              <input type="text" class="form-control" name="amphure" id="exampleInputPassword1" value="<?php if($ID1 != ''){ echo $row0['aname_th']; }else{ echo $row1['aname_th']; }?>" value="10" required="required">
            </div>
            </div>
            </div>

            <button type="submit" name="edit" id="edit" class="btn btn-success" ><i class='fas fa-plus'></i> Save Data</button>
          </form>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2021</span>
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

</body>

</html>

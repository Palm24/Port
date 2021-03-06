<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

<!-- Sidebar Toggle (Topbar) -->
<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
  <i class="fa fa-bars"></i>
</button>

<!-- Topbar Search -->
<form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
  <div class="input-group">
    <a href="../test5.php" class="btn btn-outline-primary"><i class='fas fa-desktop'></i> Go to Web page</a> &nbsp; &nbsp;
    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for...." aria-label="Search" aria-describedby="basic-addon2">
    <div class="input-group-append">
      <button class="btn btn-primary" type="button">
        <i class="fas fa-search fa-sm"></i>
      </button>
    </div>
  </div>
</form>

<!-- Topbar Navbar -->
<ul class="navbar-nav ml-auto">

<!-- Nav Item - Search Dropdown (Visible Only XS) -->
<li class="nav-item dropdown no-arrow d-sm-none">
  <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <i class="fas fa-search fa-fw"></i>
  </a>
  <!-- Dropdown - Messages -->
  <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
    <form class="form-inline mr-auto w-100 navbar-search">
      <div class="input-group">
        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search fa-sm"></i>
          </button>
        </div>
      </div>
    </form>
  </div>
</li>

<!-- Nav Item - Alerts -->
<li class="nav-item dropdown no-arrow mx-1">
  <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <i class="fas fa-bell fa-fw"></i>

    <!-- Counter - Alerts -->
    <span class="badge badge-danger badge-counter">3+</span>
  </a>
  <!-- Dropdown - Alerts -->
  <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
    <h6 class="dropdown-header">
      Alerts Center
    </h6>
    <a class="dropdown-item d-flex align-items-center" href="#">
      <div class="mr-3">
        <div class="icon-circle bg-primary">
          <i class="fas fa-file-alt text-white"></i>
        </div>
      </div>

      <div>
        <div class="small text-gray-500">   
          <?php
            $date = date("d-M-Y");
            echo $date;

            $sql = "SELECT count(L_ID1) as num1 FROM com_type1 ";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result);
            $num1 = $row['num1'];
        
            $sql = "SELECT count(L_ID2) as num2 FROM com_type2 ";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result);
            $num2 = $row['num2'];
        
            $total = $num1 + $num2 ;
          ?>
        </div>
        <span class="font-weight-bold">????????????????????????????????????????????????????????????????????????????????????????????? ?????? <?php echo $total; ?> ?????????????????????</span>
      </div>
    </a>
    <a class="dropdown-item d-flex align-items-center" href="#">
      <div class="mr-3">
        <div class="icon-circle bg-success">
          <i class="fas fa-donate text-white"></i>
        </div>
      </div>
      <div>
        <div class="small text-gray-500">
          <?php
            $date = date("d-M-Y");
            echo $date;
          ?>
        </div>
        ??????????????????????????????????????????????????????????????????????????? <?php echo $num1 ?> ????????????????????? <br>
        ???????????????????????????????????????????????? 2 ??????????????????????????? <?php echo $num2 ?> ?????????????????????
      </div>
    </a>
    <a class="dropdown-item d-flex align-items-center" href="#">
      <div class="mr-3">
        <div class="icon-circle bg-warning">
          <i class="fas fa-exclamation-triangle text-white"></i>
        </div>
      </div>
      <div>
        <div class="small text-gray-500">
          <?php
            $date = date("d-M-Y");
            echo $date;
          ?>
        </div>
       ??????????????????????????????????????????????????????????????????????????????????????? ?????????????????????????????????????????????????????????????????????????????????????????????.
      </div>
    </a>
    <a class="dropdown-item text-center small text-gray-500" href="#">Close</a>
  </div>
</li>

<!-- Nav Item - Messages -->
<li class="nav-item dropdown no-arrow mx-1">
  <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <i class="fas fa-envelope fa-fw"></i>
    <!-- Counter - Messages -->
    <span class="badge badge-danger badge-counter">7</span>
  </a>
  <!-- Dropdown - Messages -->
  <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
    <h6 class="dropdown-header">
      Message Center
    </h6>
    <a class="dropdown-item d-flex align-items-center" href="#">
      <div class="dropdown-list-image mr-3">
        <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
        <div class="status-indicator bg-success"></div>
      </div>
      <div class="font-weight-bold">
        <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
        <div class="small text-gray-500">Emily Fowler ?? 58m</div>
      </div>
    </a>
    <a class="dropdown-item d-flex align-items-center" href="#">
      <div class="dropdown-list-image mr-3">
        <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
        <div class="status-indicator"></div>
      </div>
      <div>
        <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
        <div class="small text-gray-500">Jae Chun ?? 1d</div>
      </div>
    </a>
    <a class="dropdown-item d-flex align-items-center" href="#">
      <div class="dropdown-list-image mr-3">
        <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
        <div class="status-indicator bg-warning"></div>
      </div>
      <div>
        <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
        <div class="small text-gray-500">Morgan Alvarez ?? 2d</div>
      </div>
    </a>
    <a class="dropdown-item d-flex align-items-center" href="#">
      <div class="dropdown-list-image mr-3">
        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
        <div class="status-indicator bg-success"></div>
      </div>
      <div>
        <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
        <div class="small text-gray-500">Chicken the Dog ?? 2w</div>
      </div>
    </a>
    <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
  </div>
</li>

<div class="topbar-divider d-none d-sm-block"></div>

<!-- Nav Item - User Information -->
<li class="nav-item dropdown no-arrow">
  <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="mr-2 d-none d-lg-inline text-gray-600 small">Valerie Luna</span>
    <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
  </a>
  <!-- Dropdown - User Information -->
  <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
    <a class="dropdown-item" href="#">
      <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
      Profile
    </a>
    <a class="dropdown-item" href="#">
      <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
      Settings
    </a>
    <a class="dropdown-item" href="#">
      <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
      Activity Log
    </a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
      <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
      Logout
    </a>
  </div>
</li>

</ul>

</nav>
<!-- End of Topbar -->
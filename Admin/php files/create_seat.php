<?php
    
    $BID= $TID= $CLASS=" ";
    if(isset($_POST['submit'])){
        $BID = $_POST['bid'];
        $TID = $_POST['tid'];
        $CLASS= $_POST['class'];

        require '../../connect/db_connect.php';
        require '../functions/functionsForAdmin.php';

        createSeat($BID, $TID, $CLASS);
    }

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Create Seat</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="../../Images/train.png">
    <link rel="stylesheet" href="../CSS files/helper.css">
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" style="text-align: center;" href="#"> <img src="tr1.png" width="35px" height="35px"  alt=""></i>&nbsp;Mugen Train</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100" type="text" placeholder="" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="#" style="color: white;">Sign out</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-info sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
        <li class="nav-item " >

<a class="nav-link active" style="color: white;" aria-current="page" href="admin_panel.php">

  <i class='bx bxs-dashboard'></i>
  Dashboard
</a>
</li>
<li class="nav-item">
<a  href="admin_profile.php" class="nav-link " style="color: white;">
    <i class='bx bxs-user-detail' ></i>
  Profile
</a>
</li>
<li class="nav-item">
<a  href="create_train.php" class="nav-link " style="color: white;">
  <i class='bx bxs-file'></i>
  Train Lists
</a>
</li>
<li class="nav-item">
<a  href="create_train.php" class="nav-link " style="color: white;">
  <i class='bx bxs-train'></i>
  Add Train
</a>
</li>
<li class="nav-item ">
<a class="nav-link" href="create_route.php" style="color: white;">
  <i class='bx bxs-traffic-cone' ></i>
  Add Route
</a>
</li>
<li class="nav-item ">
<a class="nav-link" href="create_block.php" style="color: white;">
  <i class='bx bx-wrench'></i>
  Add Block
</a>
</li>
<li class="nav-item ">
<a class="nav-link" href="create_seat.php" style="color: white;">
  <i class='bx bxs-user-circle' ></i>
  Add Seats
</a>
</li>
<li class="nav-item ">
<a class="nav-link" href="userHomepage.php" style="color: white;">
  <i class='bx bxs-log-out-circle'></i>
  Logout
</a>
</li>
        </ul>
        <hr>

     
    
   

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">

      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><i class='bx bx-wrench'></i>
            &nbsp;Create Routes</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <!-- <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div> -->
          <form action="create_seat.php" method="POST"></form>
          <!-- <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
          </button> -->
        </form>
        </div>
      </div>

      <div class="card" style="margin:8%">
        <div class="card-header">
          <h3>Create Seats
          <img src="../../Images/block3.png" style="float: right;" height="60px" width="60px" alt="">
          </h3>
        </div>
        <div class="card-body">
            <form action="create_seat.php" method="POST">
            <div class="form-group row" style="margin-top: 15px;">
                    <label for="fare" class="col-sm-2 col-form-label">Train ID</label>
                    <div class="col-sm-10">
                      <input type="number" name="tid" class="form-control" id="fare" placeholder="Train ID">
                    </div>
                  </div>
                  <div class="form-group row" style="margin-top: 15px;">
                    <label for="fare" class="col-sm-2 col-form-label">Block ID</label>
                    <div class="col-sm-10">
                      <input type="number" name="bid" class="form-control" id="fare" placeholder="Block ID">
                    </div>
                  </div>
                  <div class="form-group row"  style="margin-top: 15px;">
                    <label for="class" class="col-sm-2 col-form-label">Class</label>
                    <div class="col-sm-10">
                      <input type="text" name="class" class="form-control" id="class" placeholder="Class Name">
                    </div>
                  </div>
              </form>
              <input name="submit" id="register" class="btn btn-block login-btn" type="submit" value="Create">
          
        </div>
      </div>

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> @yield('title') </title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/css/assets/vendors/feather/feather.css">
    <link rel="stylesheet" href="/css/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/css/assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="/css/assets/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/assets/vendors/typicons/typicons.css">
    <link rel="stylesheet" href="/css/assets/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="/css/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="/css/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="/css/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="/css/assets/js/select.dataTables.min.css">
    <link rel="stylesheet" href="/css/assets/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="/images/logo.png" />
    <style>
      a{
        text-decoration: none;
      }
      .table td img {
    width: 36px;
    height: 36px;
    border-radius: 0%;
      }
    </style>
  </head>

  <body class="with-welcome-text">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
          <div class="me-3" > 
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
              <span class="icon-menu"></span>
            </button>
          </div>
          <div>
            <a class="navbar-brand brand-logo" href="/Dashboard">
              <img src="/images/slogan.png" alt="logo" />
            </a>
            <a class="navbar-brand brand-logo-mini" href="/Dashboard">
              <img src="/images/sloganmini.png" alt="logo" />
            </a>
          </div>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-top">
          <ul class="navbar-nav">
            @yield('name')
          </ul>
          <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown d-none d-lg-block user-dropdown">
              <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle" src="/images/face1.jpg" alt="Profile image"> </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                  <img class="img-md rounded-circle" src="/images/face1.jpg" alt="Profile image">
                  <p class="mb-1 mt-3 fw-semibold">Omnia Maher</p>
                  <p class="fw-light text-muted mb-0">omniamaher565@gmail.com</p>
                </div>
                 <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign Out</a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="/Dashboard">
                <i class="menu-icon mdi mdi-chart-line"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>

            <li class="nav-item nav-category">Admin Controls</li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#books" aria-expanded="false" aria-controls="books">
                <i class="menu-icon mdi mdi-table"></i>
                <span class="menu-title"> Data Tables </span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="books">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="/AllBooks"> Books</a></li>
                  <li class="nav-item"> <a class="nav-link" href="/BBooks">Borrowed Books</a></li>
                  <li class="nav-item"> <a class="nav-link" href="/AllUsers">Users</a></li>

                </ul>
            <li class="nav-item nav-category">Shortcuts</li>
            <li class="nav-item">
            <a class="nav-link" href="/AddBook">
                <i class="menu-icon mdi mdi-layers-outline"></i>
                <span class="menu-title">Add Book</span>
              </a>
              </li>
              <li class="nav-item">
            <a class="nav-link" href="/AddUser">
                <i class="menu-icon mdi mdi-account-circle-outline"></i>
                <span class="menu-title">Add User</span>
              </a>
              </li>
             

                <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="menu-icon mdi mdi-logout"></i>
                <span class="menu-title">Sign Out</span>
              </a>
              </li>
          </ul>
        </nav>
       
        <!-- partial -->
         {{$slot }} 
         </div>
         
<footer>
<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2); width: 100%; height: 40px; font-size:small;">
  © 2024 Copyright:
  <a class="text-white" href="#">CyperChelf_Library.com</a>
</div>
</footer>



    <script src="/js/vendor.bundle.base.js"></script>
    <script src="/js/bootstrap-datepicker.min.js"></script>
    <script src="/js/chart.umd.js"></script>
    <script src="/js/progressbar.min.js"></script>
    <script src="/js/off-canvas.js"></script>
    <script src="/js/template.js"></script>
    <script src="/js/settings.js"></script>
    <script src="/js/hoverable-collapse.js"></script>
    <script src="/js/todolist.js"></script>
    <script src="/js/jquery.cookie.js" type="text/javascript"></script>
    <script src="/js/dashboard.js"></script>
    <script src="/js/jquery-3.7.1.min.js"></script>
  </body>
</html>
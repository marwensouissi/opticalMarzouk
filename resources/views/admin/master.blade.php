<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>OpticalMarzouk - @yield('title')</title>
  <!-- base:css -->
  <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/bootstrap.min.css') }}"> 
  {{-- <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css"> --}}
  <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet"type="text/css"  href="{{ asset('admin/assets/vendors/css/vendor.bundle.base.css') }}">
  <link rel="icon" type="image/png"  href="/admin/assets/images/logo/eee.png">


  {{-- <link rel="shortcut icon" href="/admin/assets/images/logo/bleu.ico" type="image/x-icon"> --}}


  
  {{-- <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css"> --}}
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->

  {{-- <link rel="stylesheet" href="css/style.css"> --}}
  <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/style.css') }}">

  <!-- endinject -->
  {{-- <link rel="shortcut icon" href="/images/favicon.png" /> --}}



  
</head>
<body>
  <div class="container-scroller d-flex">
    <div class="row p-0 m-0 proBanner" id="proBanner">
      <div class="col-md-12 p-0 m-0">

      </div>
    </div>
    <!-- partial:./partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <div>
      <ul class="nav" style="position: fixed">
        <li class="nav-item sidebar-category">
          <p>Navigation</p>
          <span></span>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.html">
            <i class="mdi mdi-view-quilt menu-icon"></i>
            <span class="menu-title">Dashboard</span>
          </a>
        </li>
        <li class="nav-item sidebar-category">
          <p>Components</p>
          <span></span>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/my_admin/opt">
            <i class="mdi mdi-glasses menu-icon"></i>
            <span class="menu-title"> Lunette Optique</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/my_admin/solaire">
            <i class="mdi mdi-sunglasses menu-icon"></i>
            <span class="menu-title">Lunette Solaire </span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pages/tables/basic-table.html">
            <i class="mdi mdi-watch menu-icon"></i>
            <span class="menu-title">Montres</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pages/tables/basic-table.html">
            <i class="mdi mdi-eye menu-icon"></i>
            <span class="menu-title">Gestion De Prix</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="pages/tables/basic-table.html">
            <i class="mdi mdi-tag-multiple menu-icon"></i>
            <span class="menu-title">Gestion de solde</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="pages/tables/basic-table.html">
            <i class="mdi mdi-truck-delivery menu-icon"></i>
            <span class="menu-title">Commande</span>
          </a>
        </li>

       
        
      </ul>
    </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:./partials/_navbar.html -->
      <nav class="navbar col-lg-12 col-12 px-0 py-0  d-flex flex-row">
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <div class="navbar-brand-wrapper text-white">
 <img src="/admin/assets/images/logo/blanc.png" height="180px" alt="">
          </div>
          <ul class="navbar-nav navbar-nav-right  text-white">
            <li class="nav-item">
              <i class="mdi mdi-calendar-today" style="font-size: 24px; margin-right:8px"></i>

              <h4 class="mb-0 font-weight-bold d-none d-xl-block text-white" style="font-family: sans-serif" id="dateRange" >      
                         <i class="mdi mdi-calendar-today"></i>

              </h4>            </li>
            <li class="nav-item dropdown me-1">
              <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-bs-toggle="dropdown">
                <i class="mdi mdi-calendar mx-0"></i>
                <span class="count bg-info">2</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                      <img src="admin/assets/images/faces/face4.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow">
                    <h6 class="preview-subject ellipsis font-weight-normal">David Grey
                    </h6>
                    <p class="font-weight-light small-text text-muted mb-0">
                      The meeting is cancelled
                    </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                      <img src="admin/assets/images/faces/face2.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow">
                    <h6 class="preview-subject ellipsis font-weight-normal">Tim Cook
                    </h6>
                    <p class="font-weight-light small-text text-muted mb-0">
                      New product launch
                    </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                      <img src="admin/assets/images/faces/face3.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow">
                    <h6 class="preview-subject ellipsis font-weight-normal"> Johnson
                    </h6>
                    <p class="font-weight-light small-text text-muted mb-0">
                      Upcoming board meeting
                    </p>
                  </div>
                </a>
              </div>
            </li>
            <li class="nav-item dropdown me-2">
              <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                <i class="mdi mdi-email-open mx-0"></i>
                <span class="count bg-danger">1</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-success">
                      <i class="mdi mdi-information mx-0"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal">Application Error</h6>
                    <p class="font-weight-light small-text mb-0 text-muted">
                      Just now
                    </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-warning">
                      <i class="mdi mdi-settings mx-0"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal">Settings</h6>
                    <p class="font-weight-light small-text mb-0 text-muted">
                      Private message
                    </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-info">
                      <i class="mdi mdi-account-box mx-0"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal">New user registration</h6>
                    <p class="font-weight-light small-text mb-0 text-muted">
                      2 days ago
                    </p>
                  </div>
                </a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>

      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <!-- row end -->

          @yield('content')
          @yield('script')
          <!-- row end -->
        </div>
      </div>
    
        <!-- content-wrapper ends -->
        <!-- partial:./partials/_footer.html -->
        {{-- <footer class="bg-body-tertiary text-center text-lg-start">
          <!-- Copyright -->
          <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2024 Copyright:
            <a class="text-body" >OpticalMarzouk</a>
          </div>
          <!-- Copyright -->
        </footer> --}}
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- base:js -->
  

  <script   src="{{ asset('admin/assets/vendors/chart.js/Chart.min.js') }}"> </script>
  <script src="{{ asset('admin/assets/vendors/js/vendor.bundle.base.js') }}"></script>
  <script   src="{{ asset('admin/assets/js/off-canvas.js') }}"></script>
  <script   src="{{ asset('admin/assets/js/hoverable-collapse.js') }}"></script>
  <script   src="{{ asset('admin/assets/js/template.js') }}"></script>
  <script   src="{{ asset('admin/assets/js/jquery.cookie.js') }}"></script>
  <script   src="{{ asset('admin/assets/js/dashboard.js') }}"></script>

  <script>
    // Get the current date
    var currentDate = new Date();
  
    // Options for formatting the date in French
    var options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
  
    // Format the current date in French
    var currentDateString = currentDate.toLocaleDateString('fr-FR', options);
  
    // Capitalize the first letter of the day and month
    currentDateString = currentDateString.replace(/^\w/, (c) => c.toUpperCase());
  
    // Update the content of the h4 element
    document.getElementById('dateRange').innerText =  currentDateString;
  </script>

  {{-- <script src="js/dashboard.js"></script> --}}


  {{-- <script src="vendors/js/vendor.bundle.base.js"></script> --}}
  <!-- endinject -->
  <!-- Plugin js for this page-->
  {{-- <script src="vendors/chart.js/Chart.min.js"></script> --}}
  {{-- <script src="js/jquery.cookie.js" type="text/javascript"></script> --}}
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  {{-- <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script> --}}
  <!-- endinject -->
  <!-- plugin js for this page -->
    {{-- <script src="js/jquery.cookie.js" type="text/javascript"></script> --}}
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  {{-- <script src="js/dashboard.js"></script> --}}
  <!-- End custom js for this page-->
</body>

</html>


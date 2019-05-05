<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>oss</title>
  <link rel="stylesheet" href="css/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="css/perfect-scrollbar.min.css">
  <link rel="stylesheet" href="css/rickshaw.min.css" />
  <link rel="stylesheet" href="css/chartist.min.css" />
  <link rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon" href="images/favicon.html" />
  <style type="text/css">
      .background{
        background-color: #ff422f;
      }
  </style>
</head>
<body class="sidebar-dark">
  <div class="container-scroller">
    <nav class="navbar navbar-light col-lg-12 col-12 p-0 fixed-top d-flex flex-row background">
      <div class="text-center navbar-brand-wrapper">
        <a class="navbar-brand brand-logo" href="{{url('/')}}">OSS</a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <button class="navbar-toggler navbar-toggler align-self-center mr-2" type="button" data-toggle="minimize">
          <span class="navbar-toggler-icon"></span>
        </button>
        <form class="form-inline mt-2 ml-3 mt-md-0 d-none d-sm-block">
          <div class="input-group solid">
            <span class="input-group-addon"><i class="mdi mdi-magnify"></i></span>
            <input type="text" class="form-control">
          </div>
        </form>
        <ul class="navbar-nav ml-lg-auto">
           <li class="nav-item dropdown">
            <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-toggle="dropdown">
              <img src="{{asset('images/profile.jpg')}}" alt="" style="border-radius: 50%;width: 50px;height: 50px;border: 1px solid green;">
            </a>
            <div class="dropdown-menu navbar-dropdown notification-drop-down" aria-labelledby="notificationDropdown">
              <a class="dropdown-item" href="#">
                <i class="fa fa-login text-success fa-fw"></i>
                <span class="notification-text">Login</span>
              </a>
               <a class="dropdown-item" href="#">
                <i class="fa fa-register text-success fa-fw"></i>
                <span class="notification-text">Register</span>
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
    <div class="container-fluid page-body-wrapper">
      <div class="row row-offcanvas row-offcanvas-right">
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="{{url('/')}}">
                <i class="mdi mdi-gauge menu-icon"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/widgets.html">
                <i class="mdi mdi-puzzle menu-icon"></i>
                <span class="menu-title">Widget</span>
                <span class="badge badge-danger badge-pill ml-auto">New</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#layoutsSubmenu" aria-expanded="false" aria-controls="layoutsSubmenu">
                <i class="mdi mdi-arrow-expand-all menu-icon"></i>
                <span class="menu-title">Oss-Form-Feature</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="layoutsSubmenu">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('excel-data-list')}}">Excel Import&Export</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('textarea_max_length_count')}}">Textarea Max-Length-Count</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('')}}">Rtl</a>
                  </li>
                </ul>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#fileUpload" aria-expanded="false" aria-controls="fileUpload">
                <i class="mdi mdi-arrow-expand-all menu-icon"></i>
                <span class="menu-title">File Upload</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="fileUpload">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('file-upload-php')}}">PHP-File-Upload</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('textarea_max_length_count')}}">Ajax-File-Upload</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('')}}">Multiple-File-Upload-PHP</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('')}}">Multiple-File-Upload-Ajax</a>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </nav>
        <div class="content-wrapper">
            @yield('contents')
        </div>
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-center">
                <a href="#">Active IT Soluation Ltd</a> &copy; 2019
            </span>
          </div>
        </footer>
      </div>
    </div>
  </div>
  @yield('footer-script')
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/perfect-scrollbar.jquery.min.js"></script>
  <script src="js/jquery.flot.js"></script>
  <script src="js/jquery.flot.resize.js"></script>
  <script src="js/misc.js"></script>
  <script src="js/dashboard_1.js"></script>
</body>
</html>

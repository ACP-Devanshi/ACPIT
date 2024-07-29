
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Student | Dashboard | AmarComputerPoint</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <!-- {{asset('css/bootstrap.min.css')}} -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('img/logoicon.png')}}" />
    <style>
    table {
        border-collapse: collapse;
        width: 50%;
        margin: 20px auto;
    }
    /* Initially collapsed state */

    .menu-open {
        display: block; /* Ensures the menu is always visible */
        padding-left: 20px; /* Adjust padding as necessary for styling */
      }

    .nav-item .nav-link {
      display: flex;
      align-items: center;
      padding: 10px 15px;
      text-decoration: none;
      color: #333; /* Adjust color as needed */
    }

    .nav-item .nav-link:hover {
      background-color: #f8f9fa; /* Add a hover effect if desired */
      color: #007bff; /* Change color on hover */
    }



    th, td {
        padding: 12px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }

    h3 {
        margin: 0;
    }

    center {
        display: block;
        text-align: center;
    }

    .imgg {
      /* border-radius: 50%; */
    width: 100px; /* Adjust the width and height as needed */
    height: 65px; /* Adjust the width and height as needed */
    
    }
</style>
  </head>
  <body>
 
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
         <img class="imgg" src="{{asset('img/Logo.png')}}" alt="logo"/>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <div class="search-field d-none d-md-block">
            <form class="d-flex align-items-center h-100" action="#">
              <div class="input-group">
                <div class="input-group-prepend bg-transparent">
                  <i class="input-group-text border-0 mdi mdi-magnify"></i>
                </div>
                <input type="text" class="form-control bg-transparent border-0" placeholder="Search projects">
              </div>
            </form>
          </div>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                  <img src="{{('../../uploads/image/' . session('user_image')) }}" alt="image">
                  <span class="availability-status online"></span>
                </div>
                <div class="nav-profile-text">
                <form action="{{ url('student/logout') }}" method="post">
              @csrf <!-- Add a CSRF token for security, if applicable in your framework -->
                <button type="submit" class="dropdown-item">
                 <i class="mdi mdi-logout me-2 text-primary"></i> Signout
                 </button>
                </form>
                </div>
              </a>
            </li>
            <li class="nav-item d-none d-lg-block full-screen-link">
              <a class="nav-link">
                <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
              </a>
            </li>
            
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                  <img src="{{('../../uploads/image/' . session('user_image')) }}" alt="profile">
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2">{{session('user_name')}}</span>
                  <span class="text-secondary text-small">Student</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/student/profile')}}">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Student</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
                </ul>
              </div>
            </li> -->
            <li class="nav-item">
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/student/attendance')}}">
                <span class="menu-title">Attendance</span>
                <i class="mdi mdi-table-large menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/student/fees')}}">
                <span class="menu-title">Fees</span>
                <i class="mdi mdi-chart-bar menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/student/certificate')}}">
                <span class="menu-title">Certificate</span>
                <i class="mdi mdi-trophy-award menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span class="menu-title">Ebook</span>
                <i class="mdi mdi-book menu-icon"></i>
              </a>
              <div class="menu-open" id="general">
                <ul class="nav flex-column sub-menu">
                  @foreach($ebook as $value)
                  @if(isset($value->batch))
                      <?php 
                      // Decode the JSON string into a PHP array
                      $batch = json_decode($value->batch, true); 
                      ?>
                      @if(is_array($batch))
                          @foreach($batch as $key)
                            @if($key==session('user_batch'))
                            <li class="nav-item">
                              <a class="nav-link" href="{{url('/student/ebook')}}/{{$value->id}}"> {{$value->title}} </a>
                            </li>
                            @endif  
                          @endforeach
                      @endif    
                  @endif
                   
                  
                  @endforeach
                </ul>
              </div>
            </li>

          </ul>
        </nav>
<style>
    .img-fluid {
        width: 500px; /* Set the width */
        height: 200px; /* Set the height */
        object-fit: cover; /* Maintain aspect ratio */
    }
    
        /* CSS to style the iframe */
        #pdfViewer {
            width: 100%;
            height: 100vh; /* Adjust height as needed */
            /* border: none; */
        }

    
</style>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            

            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  <div style="text-align: center;">
                  <div class="row g-12">
               
                       
                       
                  <!-- <iframe id="pdfViewer" src="{{ asset('uploads/image/1714727451.pdf') }}" width="100%" height="800px"></iframe> -->
                  <embed src="{{ asset('uploads/image/')}}/{{$ebookwithid->ebook}} #toolbar=0" style="width:100%; height:500px;">
</iframe>

            
               
           </div>
                  </div>
                  </div>
                </div>
              </div>

     
@include('student/footer')




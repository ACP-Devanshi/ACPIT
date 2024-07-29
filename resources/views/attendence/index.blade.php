@if(isset($true))
<script> alert("Signed in successfully")</script>
@endif
@if(isset($false))
<script> alert(" Invalid Credentials")</script>  
@endif
@if(isset($relogin))
<script> alert("Already logged in")</script> 
@endif
@if(isset($loginfirst))
<script> alert("Please login first")</script> 
@endif
@if(isset($logout))
<script> alert("Signed out successfully")</script> 
@endif
@if(isset($relogout))
<script> alert("Already Signed out")</script> 
@endif
<!DOCTYPE html>
<html lang="en">
<head>
<style>
    /* Target the option elements */
    select.form-control option {
        color: black; /* Change the color to black or your desired color */
    }
</style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Attendance | AmarComputerPoint</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('public/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <!-- {{asset('css/bootstrap.min.css')}} -->
    <link rel="stylesheet" href="{{asset('public/assets/css/style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('public/img/logoicon.png')}}" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
           
          <div class="row flex-grow">
          
            <div class="col-lg-4 mx-auto">
            <p><h1>Student Attendance System</h1></p>
              <div class="auth-form-light text-left p-5">
                <div class="brand-logo">
                  <img src="{{asset('public/img/Logo.png')}}">
                </div>
                <h4>Hello! let's get started</h4>
                <h6 class="font-weight-light">Sign in to continue.</h6>
                <form method="post" action="{{ url('attendence/signin') }}" enctype="multipart/form-data">
    @csrf
    <div class="row g-3">
        <div class="col-md-12">
            <div class="form-floating">
                <input type="text" class="form-control" id="rollno" name="rollno" placeholder="Roll Number" required>
                <label for="rollno">Roll number</label>
                <span class="text-danger">
                    @error('rollno')
                    {{$message}}
                    @enderror
                </span>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-floating">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                <label for="password">Password</label>
                <span class="text-danger">
                    @error('password')
                    {{$message}}
                    @enderror
                </span>
            </div><br>
        </div>
        <div class="col-md-12">
            <div class="form-floating">
            <select class="form-control" id="batch_time" name="batch_time" required>
            <option value="" selected disabled>Select Batch Time</option>
            <option value="7:00AM to 8:30AM ">7:00AM to 8:30AM </option>
            <option value="8:30AM to 10:00AM">8:30AM to 10:00AM</option>
            <option value="09:30AM to 1:30PM">09:30PM to 1:30PM</option>
            <option value="10:15AM to 11:45AM">10:15AM to 11:45AM</option>
            <option value="01:00PM to 02:45PM">01:00PM to 02:45PM</option>
            <option value="03:00PM to 4:45PM">03:00PM to 4:45PM</option>
            <!-- Add more options as needed -->
        </select>
        <label for="batch_time">Batch Time</label>
            </div><br>
        </div>
        <div class="col-md-6">
        <button class="btn btn-gradient-primary w-100 py-3" type="submit" name="signIn" value="1">SignIn</button>
        </div>
        
        <div class="col-md-6">
        <button class="btn btn-gradient-primary w-100 py-3" type="submit" name="signOut" value="1">SignOut</button>
        </div>
     
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../assets/js/off-canvas.js"></script>
    <script src="../assets/js/hoverable-collapse.js"></script>
    <script src="../assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
  </body>
</html>
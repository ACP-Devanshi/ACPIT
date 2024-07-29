@include('student/header')

        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-home"></i>
                </span> Dashboard
              </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                  </li>
                </ul>
              </nav>
            </div>
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  <div style="text-align: center;">
                   <img src="{{ asset('public/uploads/image/' . session('user_image')) }}" alt="profile" style="width: 250px; height: 250px; border-radius: 50%; object-fit: cover;">
                  </div>
                  <div style="margin-left: 150px;">
                  <center><table>
                    <tr><td><h3>Roll Number : {{session('user_rollno')}}</h3></td></tr>
                    <tr><td><h3>Name : {{session('user_name')}}</h3></td></tr>
                    <tr><td><h3>Father's Name : {{session('user_fname')}}</h3></td></tr>
                    <tr><td><h3>Batch : {{session('user_batch')}} </h3></td></tr> 
                    <tr><td><h3>Joining Date : {{session('user_regdate')}}</h3></td></tr>
                    <tr><td><h3>Address : {{session('user_address')}}</h3></td></tr>  
                    </table> 
                  </center>
                  </div>
                   
                  
                  </div>
                </div>
              </div>

        @include('student/footer')

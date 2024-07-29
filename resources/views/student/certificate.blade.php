@include('student/header')
<style>
    .img-fluid {
        width: 500px; /* Set the width */
        height: 200px; /* Set the height */
        object-fit: cover; /* Maintain aspect ratio */
    }
    
</style>
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
                  <div class="row g-4">
               @foreach($data as $value)
               <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                   <div class="team-item bg-light">
                       <div class="overflow-hidden">
                           <img class="img-fluid" src="{{ asset('uploads/image/' . $value->image) }}" alt="">
                       </div>
                       
                       <div class="text-center p-4">
                           <h5 class="mb-0">{{$value->batch}}</h5>
                       </div>
                       <a class="btn btn-primary w-100 py-3" href="{{ asset('uploads/image/' . $value->certificate) }}" target="__blank"><font color="white">Download</font></a>

                   </div>
               </div>
               @endforeach
           </div>
                  </div>
                  </div>
                </div>
              </div>

      
@include('student/footer')
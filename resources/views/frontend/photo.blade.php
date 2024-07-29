@include('frontend/header')
<style>
    .team-item img {
        width: 500px; /* Set the width */
        height: 300px; /* Set the height */
        object-fit: cover; /* Maintain aspect ratio */
    }
</style>
<div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Gallery</h6>
                <h1 class="mb-5">Our Photos</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="public/img/infra1.jpeg" alt="">
  
                        </div>
                        
                        <div class="text-center p-4">
                            <h5 class="mb-0">Infrastructure</h5>
                            
                        </div>
                        <button class="btn btn-primary w-100 py-3" type="submit"><a href="{{url('/infrastructure images')}}"><font color="white">More</font></a></button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="public/img/s2.jpg" alt="">
                        </div>
                        
                        <div class="text-center p-4">
                            <h5 class="mb-0">Workshop</h5>
                        </div>
                        <button class="btn btn-primary w-100 py-3" type="submit"><a href="{{url('/workshop images')}}"><font color="white">More</font></a></button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="public/img/s3.jpg" alt="">
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Formal Events</h5>
                        </div>
                        <button class="btn btn-primary w-100 py-3" type="submit"><a href="{{url('/formal images')}}"><font color="white">More</font></a></button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="public/img/img1.png" alt="">
                        </div>
                        
                        <div class="text-center p-4">
                            <h5 class="mb-0">Informal Events</h5>
                        </div>
                        <button class="btn btn-primary w-100 py-3" type="submit"><a href="{{url('/informal images')}}"><font color="white">More</font></a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->
@include('frontend/footer')
@include('frontend/header')
<!-- Header Start -->
<div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Join</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Join Now</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
        @if(session('status'))
         <div id="notification" class="col-lg-6 col-md-12 text-left wow fadeInUp bg-primary mx-auto" style="height: 50px; display: flex; align-items: center; text-align: center; margin: 50px auto; color: white;" data-wow-delay="0.1s">
            <h6 style="display: flex; align-items: center; color: white; margin-left: 10px;">
               Thank you for joining us. Our team will get in touch with you shortly
            <i class="bi bi-check" style="font-weight: bold; font-size: 2.5em; margin-right: 5px; margin-top: 5px;"></i>
            </h6>
         </div>
         <br>
         @endif
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Join Now</h6>
                <h1 class="mb-5">Fill this form for joining us</h1>
            </div>
            <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                <form method="post" action="{{ url('/frontend/join') }}" enctype="multipart/form-data">
    @csrf
    <div class="row g-3">
        <div class="col-md-6">
            <div class="form-floating">
                <input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
                <label for="name">Your Name</label>
                <span class="text-danger">
                    @error('name')
                    {{$message}}
                    @enderror
                </span>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-floating">
                <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
                <label for="email">Your Email</label>
                <span class="text-danger">
                    @error('email')
                    {{$message}}
                    @enderror
                </span>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-floating">
                <input type="phone" class="form-control" id="phone" name="phone" placeholder="Your phone Number">
                <label for="phone">Your phone Number</label>
                <span class="text-danger">
                    @error('phone')
                    {{$message}}
                    @enderror
                </span>
            </div>
        </div>
        <div class="col-12">
        <div class="col-12"><label for="course"><b>Please Select Course</b></label>
        </div>
        
    <div class="form-check">
        <input class="form-check-input" type="checkbox" id="Bachelor Courses" name="course[]" value="Bachelor Courses">
        <label class="form-check-label" for="Bachelor Courses">Bachelor Courses</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" id="Diploma Courses" name="course[]" value="Diploma Courses">
        <label class="form-check-label" for="Diploma Courses">Diploma Courses</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" id="Web Development Courses" name="course[]" value="Web Development Courses">
        <label class="form-check-label" for="Web Development Courses">Web Development Courses</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" id="NIELIT Programm" name="course[]" value="NIELIT Programm">
        <label class="form-check-label" for="NIELIT Programm">NIELIT Programm</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" id="Computer Hardware Courses" name="course[]" value="Computer Hardware Courses">
        <label class="form-check-label" for="Computer Hardware Courses">Computer Hardware Courses</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" id="Computer Basic Courses" name="course[]" value="Computer Basic Course">
        <label class="form-check-label" for="Computer Basic Courses">Computer Basic Courses</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" id="Other" name="course[]" value="Other">
        <label class="form-check-label" for="Other">Other</label>
    </div>
    <!-- Add more checkboxes as needed -->
    <div class="form-floating mt-2">
        <!-- Optional: You can add a hidden input field to handle non-selection case -->
        <input type="hidden" name="course[]" value="" />
    </div>
      </div>
        <div class="col-12">
            <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
        </div>
    </div>
</form>
</div>
</div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@include('frontend/footer')
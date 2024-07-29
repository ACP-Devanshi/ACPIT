@include('frontend/header')


    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Contact</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Contact</li>
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
         <div id="notification" class="text-left wow fadeInUp bg-primary mx-auto" style="height: 50px; display: flex; align-items: center; text-align: center; margin: 50px auto; color: white;" data-wow-delay="0.1s">
            <h6 style="display: flex; align-items: center; color: white; margin-left: 10px;">
               Thank you for reaching out to us. Our team will get in touch with you shortly
            <i class="bi bi-check" style="font-weight: bold; font-size: 2.5em; margin-right: 5px; margin-top: 5px;"></i>
            </h6>
         </div>
        @endif
        <br>
        
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Contact Us</h6>
                <h1 class="mb-5">Contact For Any Query</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h5>Get In Touch</h5>
                    <p class="mb-4">We'd love to hear from you! Whether you have a question about our courses, feel free to reach out using the contact information below. Your feedback is important to us, and we'll do our best to respond promptly.</p>
                    <div class="d-flex align-items-center mb-3">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                            <i class="fa fa-map-marker-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-primary">Office</h5>
                            <p class="mb-0">Near Gulariya Thana , InFront Of Masjid , Gorakhpur , Uttar Pradesh, India</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-primary">Mobile</h5>
                            <p class="mb-0">+91 8416828100 , 6306705028</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                            <i class="fa fa-envelope-open text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-primary">Email</h5>
                            <p class="mb-0">amarcomputerpoint529@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <iframe class="position-relative rounded w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4234.1483620174195!2d83.40820580016728!3d26.824675598057837!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39914f8247b83a9f%3A0x55b486b654d7897a!2sAmar%20Computer%20Point!5e0!3m2!1sen!2sin!4v1703575026359!5m2!1sen!2sin"
                        frameborder="0" style="min-height: 300px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>
                <div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                <form method="post" action="{{ url('/frontend/contactSave') }}" enctype="multipart/form-data">
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
        <div class="col-12">
            <div class="form-floating">
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Subject">
                <label for="subject">Contact Number</label>
                <span class="text-danger">
                    @error('phone')
                    {{$message}}
                    @enderror
                </span>
            </div>
        </div>
        <div class="col-12">
            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a message here" id="message" name="message" style="height: 150px"></textarea>
                <label for="message">Message</label>
                 <span class="text-danger">
                    @error('message')
                    {{$message}}
                    @enderror
                </span>
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
    <script>

    // Wait for the page to load
    document.addEventListener("DOMContentLoaded", function() {
        // Find the element by ID
        var notificationDiv = document.getElementById("notification");

        // Set a timeout to add a class after 5 seconds
        setTimeout(function() {
           
            // Add a class to hide the element (you may need to define this class in your CSS)
            notificationDiv.classList.add("hidden");
        }, 5000); // 5000 milliseconds = 5 seconds
    });
</script>
    <!-- Contact End -->


    @include('frontend/footer')
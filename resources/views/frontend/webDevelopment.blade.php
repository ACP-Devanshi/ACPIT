@include('frontend/header')
<!-- Header Start -->
<div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Courses</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Courses</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Web Development Courses</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="public/img/web develop 4x9.jpg" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.3s">
                    <h1>Web Development</h1>
                    <h6 class="section-title bg-white text-start text-primary pe-3">Web Development</h6>
                    <p class="mb-4">A web development course teaches the skills needed to create websites and web applications. It covers areas like HTML, CSS, and JavaScript for front-end development, as well as server-side programming languages like Python, Ruby, or JavaScript (with Node.js) for back-end development. Students learn about databases, frameworks, and tools used in web development, along with design principles and user experience considerations.</p>
                    <p class="mb-4"> The goal is to equip learners with the knowledge and skills to build functional and visually appealing websites and web applications.</p>
                    <h6 class="section-title bg-white text-start text-primary pe-3">Syllabus</h6>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Frontend
                              <ul>
                                <li>HTML</li>
                                <li>CSS</li>
                                <li>Javascript</li>
                              </ul> 
                            </p>
                        </div>
                        <div class="col-sm-6">
                         <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Backend
                            <ul>
                                <li>Php</li>
                                <li>Laravel(Framework)</l>
                            </ul>    
                          </p>
                        </div>
                        <div class="col-sm-6">
                         <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Database
                            <ul>
                                <li>MySql</li>
                            </ul>    
                          </p>
                        </div>
                    </div>
                    <h6 class="section-title bg-white text-start text-primary pe-3">Duration</h6>
                    <div class="row gy-2 gx-4 mb-4">
                    <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>6-8 Months
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- About End -->
    @include('frontend/footer')
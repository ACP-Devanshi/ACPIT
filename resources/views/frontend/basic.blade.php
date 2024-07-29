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
                            <li class="breadcrumb-item"><a class="text-white" href="#">Diploma Courses</a></li>
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
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="public/img/c4.jpg" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h1>BCC</h1>
                    <h6 class="section-title bg-white text-start text-primary pe-3">Basic Computer Course</h6>
                    <p class="mb-4">The BCC course, also known as the Basic Computer Course, is an introductory program designed to provide fundamental knowledge and skills in computer applications. It covers basic concepts such as computer fundamentals, operating systems, word processing, spreadsheets, and presentations.</p>
                    <p class="mb-4"> The BCC course aims to equip individuals with the necessary computer literacy to perform basic tasks in various fields, enhancing their employability and enabling them to navigate the digital world effectively.</p>
                    <h6 class="section-title bg-white text-start text-primary pe-3">Syllabus</h6>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Computer fundamentales
                              <ul>
                                <li>Windows</li>
                                <li>Paint</li>
                                <li>Notepad/Wordpad</li>
                              </ul> 
                            </p>
                        </div>
                        <div class="col-sm-6">
                         <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>MS Office
                            <ul>
                                <li>MS Word</li>
                                <li>MS Excel</li>
                                <li>MS Powerpoint</li>
                            </ul>    
                          </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Internet & Networking</p>
                        </div>
                    </div>
                    <h6 class="section-title bg-white text-start text-primary pe-3">Duration</h6>
                    <div class="row gy-2 gx-4 mb-4">
                    <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>3 Months
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h1>CCC</h1>
                    <h6 class="section-title bg-white text-start text-primary pe-3">Course on Computer Concepts</h6>
                    <p class="mb-4">The CCC course, provided by NIELIT, is the Course on Computer Concepts. It's a basic computer literacy program that covers fundamental concepts of information technology, including computer fundamentals, operating systems, the internet, and productivity tools.</p>
                    <p class="mb-4"> The course aims to equip individuals with essential computer skills for personal and professional use.</p>
                    <h6 class="section-title bg-white text-start text-primary pe-3">Syllabus</h6>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>BCC</p>
                        </div>
                        <div class="col-sm-6">
                         <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Banking</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Lebra office (just like MS office)
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Solve Multiple Test Series
                            </p>
                        </div>
                    </div>
                    <h6 class="section-title bg-white text-start text-primary pe-3">Duration</h6>
                    <div class="row gy-2 gx-4 mb-4">
                    <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>3 Months
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/c3.jpg" alt="" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- About End -->
    @include('frontend/footer')
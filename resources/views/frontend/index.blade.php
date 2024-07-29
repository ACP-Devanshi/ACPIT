@include('frontend/header')

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="public/img/slide1.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .3);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                            <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Best Courses</h5>
                                <h1 class="display-3 text-white animated slideInDown">Empowering Minds With Technology</h1>
                                <p class="fs-5 text-white mb-4 pb-2">"We enable empowerment by seamlessly combining the capabilities of human intellect and technology in a harmonious manner. #TechEmpowerment #InnovativeMinds"</p>
                                <a href="{{url('/about')}}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                                <a href="{{url('/joinNow')}}" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Join Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="public/img/slide2.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .3);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Best Courses</h5>
                                <h1 class="display-3 text-white animated slideInDown">Let's Play With Coding</h1>
                                <p class="fs-5 text-white mb-4 pb-2">"Embark on a coding adventure where creativity meets logic, and possibilities are only limited by your imagination. Let's engage in coding! 🚀💻 #CodePlayground #TechCreativity"</p>
                                <a href="{{url('/about')}}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                                <a href="{{url('/joinNow')}}" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Join Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="public/img/slide3.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .3);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Best Courses</h5>
                                <h1 class="display-3 text-white animated slideInDown">Where Education Meets With Creativity</h1>
                                <p class="fs-5 text-white mb-4 pb-2">"Discover a world where the classroom becomes a stage for creativity, and learning is a dynamic performance. Welcome to the place where education meets with creativity! 🎓🎨 #EducationalInnovation #CreativeClassroom"</p>
                                <a href="{{url('/about')}}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                                <a href="{{url('/joinNow')}}" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Join Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="public/img/slide4.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .3);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Best Courses</h5>
                                <h1 class="display-3 text-white animated slideInDown">The Best Learning Platform</h1>
                                <p class="fs-5 text-white mb-4 pb-2">"Your journey to success begins here - on the best learning platform. Unleash your potential, embrace knowledge, and redefine what's possible. #SuccessJourney #BestInLearning"</p>
                                <a href="{{url('/about')}}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                                <a href="{{url('/joinNow')}}" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Join Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>
                            <h5 class="mb-3">Skilled Instructors</h5>
                            <p>Along with expert teachers, we also provide expert guidance and career counseling.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                            <h5 class="mb-3">Online Classes</h5>
                            <p>We provide both online and offline classes so that students can attend classes with ease.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fas fa-award text-primary mb-4"></i>
                            <h5 class="mb-3">Verified Certificate</h5>
                            <p>Our institute is certified by the Government of India and We are providing certified certificate.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-user-graduate text-primary mb-4"></i>
                            <h5 class="mb-3">Placement Drive</h5>
                            <p>We provide a 100% placement guarantee for students in a prestigious company.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- About Start -->
   <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-relative w-100 h-80" src="public/img/img20.png" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6>
                    <h1 class="mb-4">Welcome to AmarComputerPoint</h1>
                    <p class="mb-4">Amar Computer Point Institute has been training IT professionals for years, launching successful careers. We offer courses in software development, web development, data science, and cybersecurity, ensuring practical, hands-on learning with experienced instructors in state-of-the-art labs.</p>
                    <p class="mb-4">Our programs emphasize problem-solving, critical thinking, and creativity. We provide career counseling and job placement assistance to help students thrive in the tech industry. With flexible learning options, including online and offline classes.</p>
                    <p class="mb-4">Our mission is to empower youth to contribute to their communities and the nation. Join us at Amar Computer Point Institute to unlock your potential and achieve your IT dreams..</p>

                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Skilled Instructors</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Online/Offline Classes</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Verified Certificate</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Offering Academic classes</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Offering specialized courses</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>100% Placement Drive</p>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="{{url('/about')}}">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Categories Start -->
    <div class="container-xxl py-5 category">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Categories</h6>
                <h1 class="mb-5">Courses Categories</h1>
            </div>
            <div class="row g-3">
                <div class="col-lg-7 col-md-6">
                    <div class="row g-3">
                        <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                            <a class="position-relative d-block overflow-hidden" href="{{url('/bachelor')}}">
                                <img class="img-fluid" src="public/img/BCA.jpg" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                    <h5 class="m-0">BCA</h5>
                                    <small class="text-primary">3 Years Course</small>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                            <a class="position-relative d-block overflow-hidden" href="{{url('/diploma')}}">
                                <img class="img-fluid" src="public/img/adca 2 (1).jpg" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                    <h5 class="m-0">ADCA</h5>
                                    <small class="text-primary">1 Year Course</small>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                            <a class="position-relative d-block overflow-hidden" href="{{url('/nielit')}}">
                                <img class="img-fluid" src="public/img/ccc ph (1).jpg" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                    <h5 class="m-0">O Level</h5>
                                    <small class="text-primary">1 Years Course</small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                    <a class="position-relative d-block h-100 overflow-hidden" href="{{url('/nielit')}}">
                        <img class="img-fluid position-absolute w-100 h-100" src="public/img/CCC N.jpg" alt="" style="object-fit: cover;">
                        <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin:  1px;">
                            <h5 class="m-0">CCC</h5>
                            <small class="text-primary">6 Months Course</small>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Categories Start -->


    <!-- Courses Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Courses</h6>
                <h1 class="mb-5">Popular Courses</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="public/img/popular3.jpg" alt="">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <a href="{{url('/nielit')}}" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                                <a href="{{url('/joinNow')}}" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Join Now</a>
                            </div>
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h3 class="mb-0">Rs. 3,000/-</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <h5 class="mb-4">NIELIT Approved CCC Course</h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-star-half text-primary me-2"></i>Basic</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>3 Months</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-award text-primary me-2"></i>Verified Certificate</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="public/img/popular1.jpg" alt="">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <a href="{{url('/webDevelopment')}}" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                                <a href="{{url('/joinNow')}}" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Join Now</a>
                            </div>
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h3 class="mb-0">Rs. 10,000/-</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <h5 class="mb-4">Web Development Course</h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-star text-primary me-2"></i>Advance</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>6-8 Months</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-award text-primary me-2"></i>Verified Certificate</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="public/img/popular2.jpg" alt="">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <a href="{{url('/nielit')}}" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                                <a href="{{url('/joinNow')}}" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Join Now</a>
                            </div>
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h3 class="mb-0">Rs. 15,000/- </h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <h5 class="mb-4">NIELIT Approved O'Level Course</h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-star text-primary me-2"></i>Advance</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>15 Months</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-award text-primary me-2"></i>Verified Certificate</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Courses End -->
    <!-- Team Start -->
      <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Instructors</h6>
                <h1 class="mb-5">Expert Instructors</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="public/img/amar photooo.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href="https://www.linkedin.com/in/amar-chauhan-7163011a5/" target="_blank"><i class="fab fa-linkedin"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href="https://twitter.com/AmarChauhan0" target="_blank"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href="https://www.facebook.com/amar.chauhan.3517563" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h4 class="mb-0">Amar Chauhan</h4>
                            <h5 class="mb-0">Founder/Director</h5>
                            <small>MCA-MMMUT(Software Engineer)</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="public/img/devanshi mam photo.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href="https://in.linkedin.com/in/astha-mishra-a7834319b?" target="_blank"><i class="fab fa-linkedin"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h4 class="mb-0">Devanshi Srivastava</h4>
                            <h5 class="mb-0">Co-Founder</h5>
                            <small>MCA-MMMUT(Software Engineer)</small>
                        </div>
                    </div>
                </div>
              <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="public/img/abhinay photo (1).jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h4 class="mb-0">Abhinay Singh</h4>
                            <h5 class="mb-0">Mentor</h5>
                            <small>MCA-MMMUT(Software Engineer)</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Testimonial</h6>
                <h1 class="mb-5">Our Students Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="public/img/garima.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Garima Singh</h5>
                    <p>DCA</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">The classes were excellent, and I greatly enjoyed them. The teachers offered fantastic support, and I would highly recommend this learning environment to other students. The support from the instructors was exceptional.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="public/img/vijay p.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Vijay Kumar</h5>
                    <p>BCC</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">#ExpertInstructors #PositiveLearningAtmosphere #ConsistentClassSessions #DiverseCourseSelection #FriendlyLearningCommunity.#ComprehensiveCurriculum #EngagingClassroomEnvironment.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="public/img/anushka.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Anushka Singh</h5>
                    <p>DCA</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">The facilities at the institute are excellent, I mean, truly outstanding. Both the teachers sir and ma'am are wonderful, and the quality of education is top-notch. It's hard to find words to express just how good everything is. It's simply the best of the best.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="public/img/vikram.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Vikram Singh</h5>
                    <p>DCA</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">The course played a pivotal role in fostering my confidence and providing invaluable experiences for my personal and professional development. Possessing high levels of skill and knowledge, significantly contributed to my learning journey.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="public/img/anupama.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Anupma Singh</h5>
                    <p>DCA</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">The institute excels with commendable male and female instructors. The pleasant environment and the availability of Wi-Fi contribute to its excellence, creating an overall exceptional educational experience.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="public/img/satya.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Satya Prakash</h5>
                    <p>ADCA</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">The teachers at Amar Computer Point are highly talented and kind-hearted, and their teaching methods are excellent. I would suggest everyone to take classes here. The facility here includes WIFI, inverter backup, time flexibility, etc.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
        

    @include('frontend/footer');  
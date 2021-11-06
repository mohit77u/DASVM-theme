<?php get_header(); ?> 

<section class="banner-caro">
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade"  data-ride="carousel" data-interval="3000">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?php echo get_template_directory_uri(); ?>/images/bann-1.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img src="<?php echo get_template_directory_uri(); ?>/images/bann-2.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
            <img src="<?php echo get_template_directory_uri(); ?>/images/bann-3.jpg" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>
</section>
<section class="about-us">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="about-content">
                    <h2>About DASVM Technologies</h2>
                    <p>Get a Chance to Trade with our Awesome for four live Training session</p>
                    <div class="line"></div>
                    <p class="para">“DASVM” is a leading training organization who caters the latest technology and innovation. We are also pioneers in providing training in diverse education fields like Virtualization, Storage, Cloud Computing, Google Cloud, Networking, Operating Systems, RPA,Programming Languages, Oracle, Information / Network Security RPA, and Soft-skills.</p>
                    <a href="/about" class="readbtn" >READ MORE</a>
                </div>
            </div>
            <div class="col-sm-4">
                <img src="<?php echo get_template_directory_uri(); ?>/images/about.jpg" alt="about">
            </div>
        </div>
    </div>
</section>
<section class="trending">
    <div class="container">
        <h2>Popular Courses</h2>
        <div class="line-center">
            <div class="line"></div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="card-header green">
                                    <h5 class="card-title">Data Science with Python</h5>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">Python is the most popular programming language for Data Science as on Today. Python is powerful , easy to learn and flexible tool for coding Data Science and Machine Learning algorithms.</p>
                                    <a class="readbtn" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="card-header blue">
                                    <h5 class="card-title">Cyber Security Training Program</h5>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">There are many career opportunities for IT and cybersecurity professionals. If you’re wondering where to start to help fill this gap, start with the CompTIA Security+ SY0-501 certification.</p>
                                    <a class="readbtn" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="card-header red">
                                    <h5 class="card-title">Machine Learning</h5>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">Machine learning is the science of getting computers to act without being explicitly programmed. In the past decade, machine learning has given us self-driving cars, practical speech recognition, effective web search, and a vastly improved understanding of the human genome.</p>
                                    <a class="readbtn" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="card-header dark-blue">
                                    <h5 class="card-title">Azure Data Engineer</h5>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">This Learning Path is designed to help you and your team prepare for Microsoft's DP-200 Implementing an Azure Data Solution exam. Even if you don't plan to take the exam.</p>
                                    <a class="readbtn" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="card-header purple">
                                    <h5 class="card-title">AWS Advanced Networking Specialist</h5>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">The AWS Certified Advanced Networking – Specialty (ANS-C00) examination is intended for individuals who perform complex networking tasks. This examination validates advanced technical skills and experience in designing and implementing AWS.</p>
                                    <a class="readbtn" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="card-header orange">
                                    <h5 class="card-title">Artificial Intelligence</h5>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">This Introduction to AI provides an overview of AI concepts and workflows, machine learning, deep learning, and performance metrics. You’ll learn the difference between supervised.</p>
                                    <a class="readbtn" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
        <div class="text-center"><a href="/courses"><button class="btn">View all courses</button></a></div>
    </div>
</section>
<section class="how">
    <div class="container text-center">
        <h2>How Our Classes Work</h2>
        <div class="line-center">
            <div class="line"></div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <div class="ser-details">
                    <i class="fa fa-user"></i>
                    <div class="ser-content">
                        <h4>Get Enrolled</h4>
                        <p>Our expert capability building solutions prepare you for the challenges ahead with a focus.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="ser-details">
                    <i class="fa fa-question"></i>
                    <div class="ser-content">
                        <h4>Get Training</h4>
                        <p>We would impart top-notch classroom / Virtual training to Aspiring Professionals.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="ser-details">
                    <i class="fa fa-file"></i>
                    <div class="ser-content">
                        <h4>Get Virtual Live Experience</h4>
                        <p>Get Virtual Live Experience with us to becoming a professional by taking our variety of courses.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="ser-details">
                    <i class="fa fa-thumbs-up"></i>
                    <div class="ser-content">
                        <h4>Get Placement</h4>
                        <p>We working and coordinating with the companies exclusively to get placed.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="learn-best">
    <div class="container">
        <h2>Learn from the Best</h2>
        <div class="line-center">
            <div class="line"></div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <div class="learn-box">
                    <i class="fa fa-trophy"></i>
                    <div class="learn-details">
                        <h5>Online Courses</h5>
                        <a href="/courses" class="viewbtn">View More</a>
                    </div>

                </div>
            </div>
            <div class="col-sm-3">
                <div class="learn-box">
                    <i class="fa fa-desktop"></i>
                    <div class="learn-details">
                        <h5>Combo Courses</h5>
                        <a href="/combo-courses" class="viewbtn">View More</a>
                    </div>

                </div>
            </div>
            <div class="col-sm-3">
                <div class="learn-box">
                    <i class="fa fa-book"></i>
                    <div class="learn-details">
                        <h5>Our Trainers</h5>
                        <a href="/our-trainer" class="viewbtn">View More</a>
                    </div>

                </div>
            </div>
            <div class="col-sm-3">
                <div class="learn-box">
                    <i class="fa fa-id-card"></i>
                    <div class="learn-details">
                        <h5>Certification</h5>
                        <a href="/certification" class="viewbtn">View More</a>
                    </div>

                </div>
            </div>
        </div>
        <div class="text-center">
            <a href="/training-schedules" class="readbtn" >Upcoming Batch Schedules</a>
        </div>
    </div>
</section>
<section class="features">
    <div class="container text-center">
        <h2>Our Key Features</h2>
        <div class="line-center">
            <div class="line"></div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="ser-details">
                    <i class="fa fa-laptop"></i>
                    <div class="ser-content">
                        <h4>Lab Facility</h4>
                        <p>Transform your life through education by taking courses with DASVM Technologies and improve principles and practices specialization. Astonishing lab facilities succulently pave the path for successful career growth.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="ser-details">
                    <i class="fa fa-clock-o"></i>
                    <div class="ser-content">
                        <h4>Flexible Timings</h4>
                        <p>We let our students choose the most appropriate timing in accordance with their availability to excel in the skills they are really interested in. The flexible timing catalyzes professional growth and industrial exposer at best.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="ser-details">
                    <i class="fa fa-user"></i>
                    <div class="ser-content">
                        <h4>One to One Training</h4>
                        <p>If any of our students want to opt for a one-to-one session, DASVM Technologies is fully supportive and our experts help you learn the best way they can.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="ser-details">
                    <i class="fa fa-file"></i>
                    <div class="ser-content">
                        <h4>Real Time Projects</h4>
                        <p>Our Students work with real-time industrial projects which not only enhances their skill but let them gain an internship with a remarkable experience. We make sure that a fresher is no more a fresher.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="ser-details">
                    <i class="fa fa-inr"></i>
                    <div class="ser-content">
                        <h4>Affordable Price</h4>
                        <p>Multiple options to excel in your career growth at the most affordable prices. We help you reach out to the experienced working professionals and experts at each step to guide.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="ser-details">
                    <i class="fa fa-phone"></i>
                    <div class="ser-content">
                        <h4>24/7 Support</h4>
                        <p>Constant and best professional support from our experts is provided to our students 24*7. We help our students brush their knowledge and procure growth instead of any other confusion or doubts.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="trending">
    <div class="container">
        <h2>Master Courses</h2>
        <div class="line-center">
            <div class="line"></div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="card-header green">
                                    <h5 class="card-title">Data Science with Python</h5>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">Python is the most popular programming language for Data Science as on Today. Python is powerful , easy to learn and flexible tool for coding Data Science and Machine Learning algorithms.</p>
                                    <a class="readbtn" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="card-header blue">
                                    <h5 class="card-title">Cyber Security Training Program</h5>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">There are many career opportunities for IT and cybersecurity professionals. If you’re wondering where to start to help fill this gap, start with the CompTIA Security+ SY0-501 certification.</p>
                                    <a class="readbtn" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="card-header red">
                                    <h5 class="card-title">Machine Learning</h5>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">Machine learning is the science of getting computers to act without being explicitly programmed. In the past decade, machine learning has given us self-driving cars, practical speech recognition, effective web search, and a vastly improved understanding of the human genome.</p>
                                    <a class="readbtn" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="card-header dark-blue">
                                    <h5 class="card-title">Azure Data Engineer</h5>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">This Learning Path is designed to help you and your team prepare for Microsoft's DP-200 Implementing an Azure Data Solution exam. Even if you don't plan to take the exam.</p>
                                    <a class="readbtn" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="card-header purple">
                                    <h5 class="card-title">AWS Advanced Networking Specialist</h5>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">The AWS Certified Advanced Networking – Specialty (ANS-C00) examination is intended for individuals who perform complex networking tasks. This examination validates advanced technical skills and experience in designing and implementing AWS.</p>
                                    <a class="readbtn" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="card-header orange">
                                    <h5 class="card-title">Artificial Intelligence</h5>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">This Introduction to AI provides an overview of AI concepts and workflows, machine learning, deep learning, and performance metrics. You’ll learn the difference between supervised.</p>
                                    <a class="readbtn" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
        <div class="text-center"><a href="/courses"><button class="btn">View all courses</button></a></div>
    </div>
</section>
<section class="provide">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="view">
                    <div>
                        <div class="pr-details">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/pr.png" alt="provide">
                            <div>
                                <h2>New Student Join Every Week</h2>
                                <p>New courses, interesting posts, popular books and much more</p>
                            </div>
                        </div>
                    </div>
                    <a href="/courses"><button class="cbtn">View course</button></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="test-best">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h2>Happy Students Say</h2>
                <div class="line"></div>
                <div id="carouselExampleControls" class="carousel slide carousel-fade " data-ride="carousel"  data-interval="3000">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <p class="desc">Trent from punchy rollie grab us a waggin school. Flat out like a bludger where he hasn’t got a damper. As stands out like brass razoo heaps it’ll be relo. As busy as a paddock.</p>
                            <h3>David Mose</h3>
                            <p>Senior Leader</p>
                            <div class="image">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/david.jpg" alt="david">
                            </div>
                        </div>
                        <div class="carousel-item">
                            <p class="desc">Trent from punchy rollie grab us a waggin school. Flat out like a bludger where he hasn’t got a damper. As stands out like brass razoo heaps it’ll be relo. As busy as a paddock.</p>
                            <h3>Nether Doct</h3>
                            <p>Developer</p>
                            <div class="image">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/nethor.jpg" alt="test">
                            </div> 
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-sm-6">
                <h2>Why DASVM Technologies Best?</h2>
                <div class="line"></div>
                <div id="accordion" class="accordion">
                    <div class="card mb-0">
                        <div class="card-header collapsed" data-toggle="collapse" href="#collapseOne">
                            <a class="card-title">Learn From Best</a>
                        </div>
                        <div id="collapseOne" class="card-body collapse show" data-parent="#accordion" >
                            <p>DASVM strives to impart top notch classroom training to aspiring professionals with broad spectrum of latest technologies and courses.</p>
                        </div>
                        <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                            <a class="card-title">From Fresher’s- Professional</a>
                        </div>
                        <div id="collapseTwo" class="card-body collapse" data-parent="#accordion" >
                            <p>We create training programmers, unique methodology of training for fresher’s to professionals with placement opportunities and career growth.</p>
                        </div>
                        <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                            <a class="card-title">Real Time Projects</a>
                        </div>
                        <div id="collapseThree" class="card-body collapse" data-parent="#accordion" >
                            <p>We provide synchronous or real time projects as a case study in building the career of the aspirants.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="why-title">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="text-center">Why we are best & Choose Us</h2>
            </div>
        </div>
    </div>
</section>
<section class="why">
    <div class="container numbers">
      <div class="row">
        <div class="number-item">
            <h3><span class="value">500</span><span class="plus"> + </span></h3>
            <h6>TRAINERS</h6>
        </div>
        <div class="number-item">
            <h3><span class="value">1200</span><span class="plus"> + </span></h3>
            <h6>PLACED CANDIDATES</h6>
        </div>
        <div class="number-item">
            <h3><span class="value">10000</span><span class="plus"> + </span></h3>
            <h6>TRAINED CANDIDATES</h6>
        </div>
        <div class="number-item">
            <h3><span class="value">100</span><span class="plus"> + </span></h3>
            <h6>TIE-UPS</h6>
        </div>
      </div>
    </div>
</section>
<section class="enroll-now">
    <div class="container">
        <div class="row">
            <div class="col-sm-5">
                <div class="on-off-form">
                    <h5>Request for Class Room & Online Training Quotation</h5>
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#online" role="tab" aria-controls="pills-home" aria-selected="true"><i class="fa fa-laptop"></i>Online Classes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#classroom" role="tab" aria-controls="pills-profile" aria-selected="false"><i class="fa fa-file"></i>Classroom Classes</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="online" role="tabpanel" aria-labelledby="pills-home-tab">
                            <?php echo do_shortcode( '[contact-form-7 id="23" title="online classes"]' ); ?>
                        </div>
                        <div class="tab-pane fade" id="classroom" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <?php echo do_shortcode( '[contact-form-7 id="22" title="classroom classes"]' ); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-1"></div>
            <div class="col-sm-6">
                <div class="enroll">
                    <h2>Register Now</h2>
                    <div class="line"></div>
                    <p>Register Now Proin ac lobortis arcu, a vestibulum augue. Vivamus ipsum, facilisis vel mollis vitae, mollis nec ante. Quisque aliquam dictum.</p>
                    <a href="https://rzp.io/l/g9q0nnYf" target="blank"><button class="enrollbtn">Enroll now</button></a>
                </div>
                <!-- <form><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_H1D36wz3VlO5UI" async> </script> </form> -->
            </div>
        </div>
    </div>
</section>
<section class="blog">
    <div class="container">
        <h2>You also may like</h2>
        <div class="row">
            <div class="col-sm-9">
                    <div class="row">
                        <?php    
                            $args3 =array(
                                'type'              => 'posts',
                                'posts_per_page'    => 3,
                            );
                            include('blogListLoop.php');
                        ?>
                    </div>
            </div>
            <div class="col-sm-3">
                <h4>Blog Posts</h4>
                <p>Check out our blog posts for free insights and updates on your field.</p>
                <a href="/blog"><button class="showbtn">Show me</button></a>
            </div>
        </div>
    </div>
</section>
<section class="last-icons">
    <div class="container">
    <h2>Trusted Partners</h2>
    <div class="line-center">
        <div class="line"></div>
    </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="swiper-container-icons">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/wipro.jpg" alt="wipro">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/hcl.jpg" alt="hcl">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/ibm.png" alt="ibm">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/oracle.png" alt="oracle">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/dell.png" alt="dell">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/ms.png" alt="ms">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/cognizant.png" alt="cognizant">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/walmart.png" alt="walmart">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/walles.png" alt="walles">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
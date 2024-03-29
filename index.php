<?php require_once'includes/header.php'?>

<body>

    <?php
$active_page = basename($_SERVER['PHP_SELF'], ".php");
?>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a href="index.php" style="display: inline-block; border-radius: 50%;">
                <img src="images/yai-logo.jpg" alt="" style="max-height: 70px; max-width: 70px; border-radius: 50%;">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item <?php if($active_page == 'home') echo 'active'; ?>"><a href="index.php"
                            class="nav-link">Home</a></li>
                    <li class="nav-item <?php if($active_page == 'about') echo 'active'; ?>"><a href="about.php"
                            class="nav-link">About</a></li>
                    <li class="nav-item <?php if($active_page == 'activity') echo 'active'; ?>"><a href="activity.php"
                            class="nav-link">Activity</a></li>
                    <li class="nav-item <?php if($active_page == 'volenteer') echo 'active'; ?>"><a href="volenteer.php"
                            class="nav-link">Volunteer</a></li>
                    <li class="nav-item <?php if($active_page == 'internship') echo 'active'; ?>"><a
                            href="internship.php" class="nav-link">Internship</a></li>
                    <li class="nav-item <?php if($active_page == 'donate') echo 'active'; ?>"><a href="donate.php"
                            class="nav-link">Donate</a></li>

                    <!-- Dropdown Menu Start -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            More
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="blog.php">Blog</a>
                            <a class="dropdown-item" href="gallery.php">Gallery</a>
                            <a class="dropdown-item" href="event.php">Events</a>
                            <a class="dropdown-item" href="location.php">Locations</a>
                            <a class="dropdown-item" href="testimonial.php">Testimonial</a>
                        </div>
                    </li>
                    <!-- Dropdown Menu End -->

                    <li class="nav-item <?php if($active_page == 'contact') echo 'active'; ?>"><a href="contact.php"
                            class="nav-link">Contact</a></li>
                    <li class="nav-item <?php if($active_page == 'login') echo 'active'; ?>"><a href="login.php"
                            class="nav-link">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="hero-wrap"
        style="background-image: url('https://images.unsplash.com/photo-1542810634-71277d95dcbb?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center"
                data-scrollax-parent="true">
                <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Doing Nothing is
                        Not An Option of Our Life</h1>
                    <p class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Created by <a
                            href="#">YAI</a></p>

                    <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><a
                            href="https://www.youtube.com/watch?v=bv_gDBubpxQ"
                            class="btn btn-white btn-outline-white px-4 py-3 popup-vimeo"><span
                                class="icon-play mr-2"></span>Watch Video</a></p>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-counter ftco-intro" id="section-counter">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-5 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 color-1 align-items-stretch">
                        <div class="text">
                            <span>Educate Over</span>
                            <strong class="number" data-number="1000"></strong>
                            <span>Children in Bikaner</span>
                        </div>
                    </div>
                </div>
                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 color-2 align-items-stretch">
                        <div class="text">
                            <h3 class="mb-4">Donate Something</h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts.</p>
                            <p><a href="donate.php" class="btn btn-white px-3 py-2 mt-2">Donate Now</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 color-3 align-items-stretch">
                        <div class="text">
                            <h3 class="mb-4">Be a Volunteer</h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts.</p>
                            <p><a href="volenteer.php" class="btn btn-white px-3 py-2 mt-2">Be A Volunteer</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <h2 class="mb-4">DAILY DRIVES</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                        live the blind texts.</p>
                </div>
            </div>
            <div class="row d-flex">
                <div class="col-md-4 ftco-animate">
                    <div class="cause-entry">
                        <a href="#" class="img" style="background-image: url(images/cause-1.jpg);"></a>
                        <div class="text p-3 p-md-4 d-flex flex-column justify-content-between">
                            <h6>
                                <span class="mr-2"><i class="bi bi-calendar"></i></span><a>01-01-2024</a>
                            </h6>
                            <span class="mr-2"><i class="bi bi-geo-alt"></i> BIKANER</span>
                            <div class="d-flex justify-content-center mt-4">
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target=".bd-example-modal-lg">SEE DETAILS</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="cause-entry">
                        <a href="#" class="img" style="background-image: url(images/cause-1.jpg);"></a>
                        <div class="text p-3 p-md-4 d-flex flex-column justify-content-between">
                            <h6>
                                <span class="mr-2"><i class="bi bi-calendar"></i></span><a>01-01-2024</a>
                            </h6>
                            <span class="mr-2"><i class="bi bi-geo-alt"></i> BIKANER</span>
                            <div class="d-flex justify-content-center mt-4">
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target=".bd-example-modal-lg">SEE DETAILS</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="cause-entry">
                        <a href="#" class="img" style="background-image: url(images/cause-1.jpg);"></a>
                        <div class="text p-3 p-md-4 d-flex flex-column justify-content-between">
                            <h6>
                                <span class="mr-2"><i class="bi bi-calendar"></i></span><a>01-01-2024</a>
                            </h6>
                            <span class="mr-2"><i class="bi bi-geo-alt"></i> BIKANER</span>
                            <div class="d-flex justify-content-center mt-4">
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target=".bd-example-modal-lg">SEE DETAILS</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 text-center mt-5">
                    <p><a href="activity.php" class="btn btn-white px-3 py-2 mt-2">SEE ALL</a></p>
                </div>
            </div>
        </div>
    </section>




    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <h2 class="mb-4">VOLENTEER TESTIMONIALS</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                        live the blind texts.</p>
                </div>
            </div>

            <!-- First Row -->
            <div class="carousel-item active">
                <div class="row">
                    <div class="col-md-4">
                        <iframe width="328" height="583" src="https://www.youtube.com/embed/xtOaQKamtgo"
                            title="Suraj,He is one of the most connected volunteers to students as a strict and frank  teacher.#shorts"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>

                    <div class="col-md-4">
                        <iframe width="328" height="583" src="https://www.youtube.com/embed/8DddCdq5BF4"
                            title="Vishakha is one of those volunteers who gets attached to students like a friend #motivation #shorts"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                    <div class="col-md-4">
                        <iframe width="328" height="583" src="https://www.youtube.com/embed/5QBGRd0g0AA"
                            title="Ritika is one of those volunteers, who truly believes in growth of kids through education only.#yai"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-12 text-center mt-5">
            <p><a href="testimonial.php" class="btn btn-white px-3 py-2 mt-2">SEE ALL</a></p>
        </div>
    </section>


    <section class="ftco-gallery">
        <div class="d-md-flex">
            <a href="images/cause-2.jpg"
                class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate"
                style="background-image: url(images/cause-2.jpg);">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="icon-search"></span>
                </div>
            </a>
            <a href="images/cause-3.jpg"
                class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate"
                style="background-image: url(images/cause-3.jpg);">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="icon-search"></span>
                </div>
            </a>
            <a href="images/cause-4.jpg"
                class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate"
                style="background-image: url(images/cause-4.jpg);">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="icon-search"></span>
                </div>
            </a>
            <a href="images/cause-5.jpg"
                class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate"
                style="background-image: url(images/cause-5.jpg);">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="icon-search"></span>
                </div>
            </a>
        </div>
        <div class="d-md-flex">
            <a href="images/cause-6.jpg"
                class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate"
                style="background-image: url(images/cause-6.jpg);">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="icon-search"></span>
                </div>
            </a>
            <a href="images/image_3.jpg"
                class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate"
                style="background-image: url(images/image_3.jpg);">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="icon-search"></span>
                </div>
            </a>
            <a href="images/image_1.jpg"
                class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate"
                style="background-image: url(images/image_1.jpg);">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="icon-search"></span>
                </div>
            </a>
            <a href="images/image_2.jpg"
                class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate"
                style="background-image: url(images/image_2.jpg);">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="icon-search"></span>
                </div>
            </a>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <h2 class="mb-4">RECENT FROM BLOG</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                        live the blind texts.</p>
                </div>
            </div>
            <div class="row d-flex">
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="blog-single.php" class="block-20"
                            style="background-image: url('images/image_1.jpg');"></a>
                        <div class="text p-4 d-block">
                            <div class="meta mb-3">
                                <div><a href="#">Sept 10, 2018</a></div>
                                <div><a href="#">Admin</a></div>

                            </div>
                            <h3 class="heading mt-3"><a href="single-blog.php">Hurricane Irma has devastated Florida</a>
                            </h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary
                                regelialia.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="blog-single.php" class="block-20"
                            style="background-image: url('images/image_2.jpg');"></a>
                        <div class="text p-4 d-block">
                            <div class="meta mb-3">
                                <div><a href="#">Sept 10, 2018</a></div>
                                <div><a href="#">Admin</a></div>

                            </div>
                            <h3 class="heading mt-3"><a href="single-blog.php">Hurricane Irma has devastated Florida</a>
                            </h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary
                                regelialia.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="blog-single.php" class="block-20"
                            style="background-image: url('images/image_3.jpg');"></a>
                        <div class="text p-4 d-block">
                            <div class="meta mb-3">
                                <div><a href="#">Sept 10, 2018</a></div>
                                <div><a href="#">Admin</a></div>

                            </div>
                            <h3 class="heading mt-3"><a href="single-blog.php">Hurricane Irma has devastated Florida</a>
                            </h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary
                                regelialia.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 text-center">
                    <p><a href="blog.php" class="btn btn-white px-3 py-2 mt-2">SEE ALL</a></p>
                </div>
            </div>
        </div>
    </section>



    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <h2 class="mb-4">RECENT EVENT</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                        live the blind texts.</p>
                </div>
            </div>
            <div class="row d-flex">
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="blog-single.php" class="block-20" style="background-image: url('images/event-1.jpg');">
                        </a>
                        <div class="text p-4 d-block">
                            <div class="meta mb-3">
                                <div><a>Sep. 10, 2018</a></div>
                                <div><a>Admin</a></div>
                            </div>
                            <h3 class="heading mb-4"><a>Fun day</a></h3>
                            <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i> 10:30AM-03:30PM</span>
                                <span><i class="icon-map-o"></i> Venue Main Campus</span>
                            </p>
                            <p>A small river named Duden flows by their place and supplies it with the necessary
                                regelialia.</p>
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#exampleModalCenter">
                                See Datails
                            </button>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="blog-single.php" class="block-20" style="background-image: url('images/event-1.jpg');">
                        </a>
                        <div class="text p-4 d-block">
                            <div class="meta mb-3">
                                <div><a>Sep. 10, 2018</a></div>
                                <div><a>Admin</a></div>
                            </div>
                            <h3 class="heading mb-4"><a>Fun day</a></h3>
                            <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i> 10:30AM-03:30PM</span>
                                <span><i class="icon-map-o"></i> Venue Main Campus</span>
                            </p>
                            <p>A small river named Duden flows by their place and supplies it with the necessary
                                regelialia.</p>
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#exampleModalCenter">
                                See Datails
                            </button>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="blog-single.php" class="block-20" style="background-image: url('images/event-1.jpg');">
                        </a>
                        <div class="text p-4 d-block">
                            <div class="meta mb-3">
                                <div><a>Sep. 10, 2018</a></div>
                                <div><a>Admin</a></div>
                            </div>
                            <h3 class="heading mb-4"><a>Fun day</a></h3>
                            <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i> 10:30AM-03:30PM</span>
                                <span><i class="icon-map-o"></i> Venue Main Campus</span>
                            </p>
                            <p>A small river named Duden flows by their place and supplies it with the necessary
                                regelialia.</p>
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#exampleModalCenter">
                                See Datails
                            </button>

                        </div>
                    </div>
                </div>
                <div class="col-md-12 text-center">
                    <p><a href="event.php" class="btn btn-white px-3 py-2 mt-2">SEE ALL</a></p>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section-3 img" style="background-image: url(images/bg_3.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row d-md-flex justify-content-center">
                <div class="col-md-6 volunteer pl-md-5 ftco-animate d-flex justify-content-center align-items-center">
                    <!-- Modified "Be a Volunteer" button with increased padding -->
                    <a href="volenteer.php" class="btn btn-primary btn-lg">Be a Volunteer</a>
                </div>
            </div>
        </div>
    </section>



    <?php require_once 'includes/footer.php' ?>
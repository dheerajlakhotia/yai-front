<?php require_once'includes/header.php'?>

<body>
    <?php
$active_page = basename($_SERVER['PHP_SELF'], ".php");
?>

    <nav class="navbar navbar-expand-lg navbar-light bg-white ftco_navbar single-nav" id="ftco-navbar">
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


    <main id="main">
        <section class="ftco-section">


            <div class="container">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Pills Tabs</h5>

                        <!-- Pills Tabs -->
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                    aria-selected="true">Home</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-profile" type="button" role="tab"
                                    aria-controls="pills-profile" aria-selected="false">Profile</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-contact" type="button" role="tab"
                                    aria-controls="pills-contact" aria-selected="false">Contact</button>
                            </li>
                        </ul>
                        <div class="tab-content pt-2" id="myTabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                aria-labelledby="home-tab">
                                Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora
                                libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem
                                eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="profile-tab">
                                Nesciunt totam et. Consequuntur magnam aliquid eos nulla dolor iure eos quia.
                                Accusantium distinctio omnis et atque fugiat. Itaque doloremque aliquid sint quasi
                                quia distinctio similique. Voluptate nihil recusandae mollitia dolores. Ut
                                laboriosam voluptatum dicta.
                            </div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="contact-tab">
                                Saepe animi et soluta ad odit soluta sunt. Nihil quos omnis animi debitis cumque.
                                Accusantium quibusdam perspiciatis qui qui omnis magnam. Officiis accusamus impedit
                                molestias nostrum veniam. Qui amet ipsum iure. Dignissimos fuga tempore dolor.
                            </div>
                        </div><!-- End Pills Tabs -->

                    </div>
                </div>
            </div>
        </section>
    </main>



    <?php require_once 'includes/footer.php' ?>
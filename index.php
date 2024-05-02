<?php require_once'includes/header.php'?>

<body>

    <?php
$active_page = basename($_SERVER['PHP_SELF'], ".php");
// Fetch the logo image path from the database
$sql = "SELECT logo FROM image";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $logoPath = $row['logo'];
} else {
    // Handle case where no data is found
    $logoPath = "images/default-logo.jpg"; // Path to a default logo image
}
?>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a href="index.php" style="display: inline-block; border-radius: 50%;">
                <img src="<?php echo $logoPath; ?>" alt=""
                    style="max-height: 70px; max-width: 70px; border-radius: 50%;">
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
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
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

    <?php
// Assuming you have already established a connection to your MySQL database

// Fetch the link from the aboutvideo table
$sql = "SELECT link FROM aboutvideo";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // Fetch the first row only as per the provided HTML structure
    $row = mysqli_fetch_assoc($result);
    $youtubeLink = $row["link"];
} else {
    // If no record exists, set a default link or handle as per your requirement
    $youtubeLink = "#"; // You can set a default link or handle accordingly
}


?>

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

                    <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                        <a href="<?php echo htmlspecialchars($youtubeLink); ?>"
                            class="btn btn-white btn-outline-white px-4 py-3 popup-vimeo">
                            <span class="icon-play mr-2"></span>Watch Video
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title mb-4">Daily Drive - <?php echo date("Y-m-d"); ?></h5>
                    <div class="row">
                        <div class="col-12">
                            <div class="list-group list-group-horizontal" id="list-tab" role="tablist">
                                <?php
                            // Fetch unique locations from the activities table for the current date
                            $current_date = date("Y-m-d");
                            $sql = "SELECT DISTINCT location FROM activities WHERE DATE(created_at) = '$current_date'";
                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    // Display each location as a list item
                                    echo '<a class="list-group-item list-group-item-action" id="list-' . str_replace(' ', '-', strtolower($row['location'])) . '-list" data-bs-toggle="list" href="#list-' . str_replace(' ', '-', strtolower($row['location'])) . '" role="tab" aria-controls="list-' . str_replace(' ', '-', strtolower($row['location'])) . '">' . $row['location'] . '</a>';
                                }
                            } else {
                                echo "<p class='text-muted'>No activities found for today.</p>";
                            }
                            ?>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-12">
                            <div class="tab-content" id="nav-tabContent">
                                <?php
                            // Reset locations result set pointer
                            mysqli_data_seek($result, 0);

                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    // Fetch activities for the current location and date
                                    $location = $row['location'];
                                    $activities_query = "SELECT * FROM activities WHERE location = '$location' AND DATE(created_at) = '$current_date'";
                                    $activities_result = mysqli_query($conn, $activities_query);
                                    ?>
                                <!-- Display activity details for each location -->
                                <div class="tab-pane fade show"
                                    id="list-<?php echo str_replace(' ', '-', strtolower($location)); ?>"
                                    role="tabpanel"
                                    aria-labelledby="list-<?php echo str_replace(' ', '-', strtolower($location)); ?>-list">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr class="text-dark">
                                                    <th scope="col">User</th>
                                                    <th scope="col">Time</th>
                                                    <th scope="col">Description</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                            // Display activities for the current location and date
                                            while ($activity_row = mysqli_fetch_assoc($activities_result)) {
                                                // Fetch user's name from yai_users table
                                                $user_id = $activity_row['user_id'];
                                                $user_query = "SELECT name FROM yai_users WHERE id = '$user_id'";
                                                $user_result = mysqli_query($conn, $user_query);
                                                $user_data = mysqli_fetch_assoc($user_result);

                                                // Format start time and end time
                                                $start_time = date('h:i A', strtotime($activity_row['start_time']));
                                                $end_time = date('h:i A', strtotime($activity_row['end_time']));

                                                echo '<tr>
                                                        <td>' . $user_data['name'] . '</td>
                                                        <td>' . $start_time . ' - ' . $end_time . '</td>
                                                        <td>' . $activity_row['description'] . '</td>
                                                    </tr>';
                                            }
                                            ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <?php
                                }
                            }
                            ?>
                            </div>
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
            <?php
        // Fetch image URLs from the activities table
        $sql = "SELECT images FROM activities WHERE images IS NOT NULL";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                // Separate multiple images and display them individually
                $images = explode(',', $row['images']);
                foreach ($images as $image) {
                    echo '<a href="../uploads/' . htmlspecialchars($image) . '" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(\'../uploads/' . htmlspecialchars($image) . '\');">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="icon-search"></span>
                            </div>
                        </a>';
                }
            }
        } else {
            echo "<p>No images found.</p>";
        }
        ?>
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
                        <a href="single-blog.php" class="block-20"
                            style="background-image: url('images/image_1.jpg');"></a>
                        <div class="text p-4 d-block">
                            <div class="meta mb-3">
                                <div>Sept 10, 2018</div>
                                <div>Admin</div>

                            </div>
                            <h3 class="heading mt-3"><a href="single-blog.php">Hurricane Irma has devastated Florida</a>
                            </h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary
                                regelialia.</p><a href="single-blog.php">Read more <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="single-blog.php" class="block-20"
                            style="background-image: url('images/image_2.jpg');"></a>
                        <div class="text p-4 d-block">
                            <div class="meta mb-3">
                                <div>Sept 10, 2018</div>
                                <div>Admin</div>

                            </div>
                            <h3 class="heading mt-3"><a href="single-blog.php">Hurricane Irma has devastated Florida</a>
                            </h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary
                                regelialia.</p><a href="single-blog.php">Read more <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="single-blog.php" class="block-20"
                            style="background-image: url('images/image_3.jpg');"></a>
                        <div class="text p-4 d-block">
                            <div class="meta mb-3">
                                <div>Sept 10, 2018</div>
                                <div>Admin</div>

                            </div>
                            <h3 class="heading mt-3"><a href="single-blog.php">Hurricane Irma has devastated Florida</a>
                            </h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary
                                regelialia.</p><a href="single-blog.php">Read more <i class="bi bi-arrow-right"></i></a>
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
                        <a class="block-20" style="background-image: url('images/event-1.jpg');">
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
                        <a class="block-20" style="background-image: url('images/event-1.jpg');">
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
                        <a class="block-20" style="background-image: url('images/event-1.jpg');">
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

        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Event Details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p><strong>Event Name:</strong> Fun day</p>
                        <p><strong>Description:</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Cumque, possimus!</p>
                        <p><strong>Venue:</strong> jail road,bikaner</p>
                        <p><strong>Date:</strong> 01-01-2024</p>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
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
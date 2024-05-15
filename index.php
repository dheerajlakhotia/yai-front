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


    <?php

// Fetch the image URL from the database
$result = $conn->query("SELECT image_name FROM bannerimage LIMIT 1");
$imageURL = "";
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $imageURL = $row["image_name"];
}


?>

    <div class="hero-wrap" style="background-image: url('<?php echo htmlspecialchars($imageURL); ?>');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center"
                data-scrollax-parent="true">
                <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Doing Nothing is
                        Not
                        An Option of Our Life</h1>
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
                    <h2 class="mb-4">Volunteer Testimonials</h2>
                    <p>Discover the power of firsthand experiences on our Testimonial Page. Here, you'll find stories of
                        hope, resilience, and transformation shared by members of our community.</p>
                </div>
            </div>
            <div class="row">
                <?php
            // Fetch latest 3 YouTube Short links from database
            $testimonials_query = "SELECT youtube_link FROM testimonials ORDER BY id DESC LIMIT 3";
            $testimonials_result = mysqli_query($conn, $testimonials_query);

            while ($row = mysqli_fetch_assoc($testimonials_result)) {
                $youtube_link = $row["youtube_link"];

                // Extract video ID from the YouTube short link
                $video_id = substr($youtube_link, strpos($youtube_link, "shorts/") + 7);

                // Construct embed URL using YouTube Embedded Player API
                $embed_url = "https://www.youtube.com/embed/{$video_id}";

                // Embed the video using iframe
                echo "<div class='col-md-4'><iframe width='328' height='583' src='{$embed_url}' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe></div>";
            }
            ?>
            </div>
            <div class="col-md-12 text-center">
                <p><a href="testimonial.php" class="btn btn-white px-3 py-2 mt-5">SEE ALL</a></p>
            </div>
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




    <?php
// Fetch data from event table, selecting only the latest 3 events
$sql = "SELECT * FROM events ORDER BY event_date DESC LIMIT 3";
$result = $conn->query($sql);
?>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <h2 class="mb-4">RECENT EVENT</h2>
                    <p>Mark your calendars and be part of the change. Together, let's create unforgettable moments and
                        meaningful impact in our communities.</p>
                </div>
            </div>
            <div class="row d-flex">
                <?php 
            if ($result->num_rows > 0) {
                // Output data of each row
                while($row = $result->fetch_assoc()) {
                    echo '<div class="col-md-4 d-flex ftco-animate">';
                    echo '<div class="blog-entry align-self-stretch">';
                    echo '<div class="block-20" style="background-image: url(' . $row["image"] . ');"></div>';
                    echo '<div class="text p-4 d-block">';
                    echo '<div class="meta mb-3">';
                    echo '<div><a>' . $row["event_date"] . '</a></div>';
                    echo '<div><a>' . $row["venue"] . '</a></div>';
                    echo '</div>';
                    echo '<h3 class="heading mb-4"><a>' . $row["event_name"] . '</a></h3>';
                    echo '<p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i> ' . $row["event_date"] . '</span>';
                    echo '<span><i class="icon-map-o"></i> Venue ' . $row["venue"] . '</span></p>';
                    echo '<p>' . $row["description"] . '</p>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo "0 results";
            }
            ?>
            </div>
            <div class="col-md-12 text-center">
                <p><a href="event.php" class="btn btn-white px-3 py-2 mt-2">SEE ALL</a></p>
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
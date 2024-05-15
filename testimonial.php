<?php require_once 'includes/header.php'?>

<body>
    <?php require_once 'includes/navbar.php'?>

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
                // Pagination settings
                $limit = 6; // Testimonials per page
                $page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1; // Current page
                $start = ($page - 1) * $limit; // Starting testimonial for this page

                // Fetch latest testimonials from the database
                $testimonials_query = "SELECT youtube_link FROM testimonials ORDER BY id DESC LIMIT $start, $limit";
                $testimonials_result = mysqli_query($conn, $testimonials_query);

                // Display testimonials
                $testimonial_count = 0; // Counter for testimonials displayed
                while ($row = mysqli_fetch_assoc($testimonials_result)) {
                    $youtube_link = $row["youtube_link"];

                    // Extract video ID from the YouTube short link
                    $video_id = substr($youtube_link, strpos($youtube_link, "shorts/") + 7);

                    // Construct embed URL using YouTube Embedded Player API
                    $embed_url = "https://www.youtube.com/embed/{$video_id}";

                    // Embed the video using iframe
                    if ($testimonial_count % 3 == 0) {
                        if ($testimonial_count != 0) {
                            echo "</div>"; // Close previous row
                        }
                        echo "<div class='row mt-4'>"; // Start new row
                    }
                    echo "<div class='col-md-4 ml-2'><iframe width='328' height='583' src='{$embed_url}' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe></div>";
                    $testimonial_count++;
                }

                // Close last row if the total testimonials are not divisible by 3
                if ($testimonial_count % 3 != 0) {
                    echo "</div>";
                }
                ?>
            </div>
            <!-- Pagination -->
            <div class="row mt-5">
                <div class="col text-center">
                    <div class="block-27">
                        <ul>
                            <?php
                            // Count total testimonials
                            $total_query = "SELECT COUNT(*) AS total FROM testimonials";
                            $total_result = mysqli_query($conn, $total_query);
                            $total_row = mysqli_fetch_assoc($total_result);
                            $total = $total_row['total'];

                            // Calculate total pages
                            $pages = ceil($total / $limit);

                            // Generate pagination links
                            for ($i = 1; $i <= $pages; $i++) {
                                echo "<li" . ($page == $i ? " class='active'" : "") . "><a href='?page=$i'>$i</a></li>";
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php require_once 'includes/footer.php' ?>
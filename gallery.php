<?php require_once 'includes/header.php'?>

<body>

    <?php require_once 'includes/navbar.php'?>

    <section class="ftco-gallery">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <h2 class="mb-4">GALLERY</h2>
                    <p>Welcome to the Gallery page of YAI. Here, you'll discover a visual journey showcasing the
                        impactful moments, heartfelt interactions, and transformative experiences that define our
                        mission.</p>
                </div>
            </div>
            <div class="d-md-flex">
                <?php
            // Define the limit for pagination
            $limit = 4;

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

            <!-- Pagination Links -->
            <div class="row mt-5">
                <div class="col text-center">
                    <div class="block-27">
                        <ul>
                            <?php
                        // Get total number of pages
                        $sql = "SELECT COUNT(id) AS total FROM activities WHERE images IS NOT NULL";
                        $result = $conn->query($sql);
                        $row = $result->fetch_assoc();
                        $total_pages = ceil($row["total"] / $limit);

                        // Display pagination links
                        for ($i = 1; $i <= $total_pages; $i++) {
                            echo "<li><a href='gallery.php?page=" . $i . "'>" . $i . "</a></li>";
                        }
                        ?>
                        </ul>
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
                    <a href="volunteer.php" class="btn btn-primary btn-lg">Be a Volunteer</a>
                </div>
            </div>
        </div>
    </section>

    <?php require_once 'includes/footer.php' ?>
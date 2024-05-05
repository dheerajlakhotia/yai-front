<?php require_once 'includes/header.php'?>

<body>

    <?php require_once 'includes/navbar.php'?>

    <section class="ftco-section ftco-gallery">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <h2 class="mb-4">GALLERY</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                        live the blind texts.</p>
                </div>
            </div>
            <div class="d-md-flex">
                <?php
               

                // Pagination
                $limit = 4; // Number of images per page
                $page = isset($_GET['page']) ? $_GET['page'] : 1; // Get the current page number
                $start = ($page - 1) * $limit; // Calculate starting index for fetching images

                // Fetch data from the activities table with pagination
               $sql = "SELECT images FROM activities WHERE images IS NOT NULL AND images <> '' LIMIT $start, $limit";

                $result = $conn->query($sql);

                // Output images dynamically
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        // Check if the image path is not null
                        if ($row['images'] != null) {
                            echo '<a href="' . $row["images"] . '" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(' . $row["images"] . ');">';
                            echo '<div class="icon d-flex justify-content-center align-items-center">';
                            echo '<span class="icon-search"></span>';
                            echo '</div>';
                            echo '</a>';
                        }
                    }
                } else {
                    echo "0 results";
                }

             
                ?>
            </div>
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
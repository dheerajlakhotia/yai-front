<?php require_once 'includes/header.php'?>



<?php require_once 'includes/navbar.php'?>

<?php
    // Fetch data from events table
    $eventsPerPage = 6; // Number of events per page
    $page = isset($_GET['page']) ? $_GET['page'] : 1; // Current page number, default to 1
    $offset = ($page - 1) * $eventsPerPage; // Offset for pagination

    // Modify SQL query to order events by event date in descending order
    $sql = "SELECT * FROM events ORDER BY event_date DESC LIMIT $offset, $eventsPerPage";
    $result = $conn->query($sql);
    ?>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <h2 class="mb-4">EVENTS</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                    live the blind texts.</p>
            </div>
        </div>
        <div class="row">
            <?php 
                if ($result->num_rows > 0) {
                    // Output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo '<div class="col-md-4 d-flex ftco-animate">';
                        echo '<div class="blog-entry align-self-stretch">';
                        echo '<a href="blog-single.php" class="block-20" style="background-image: url(' . $row["image"] . ');"></a>';
                        echo '<div class="text p-4 d-block">';
                        echo '<div class="meta mb-3">';
                        
                       
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
                    echo "No events found.";
                }
                ?>
        </div>
        <?php
            // Pagination
            $sql = "SELECT COUNT(*) AS total FROM events";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            $totalPages = ceil($row['total'] / $eventsPerPage);

            echo '<div class="row mt-5">';
            echo '<div class="col text-center">';
            echo '<div class="block-27">';
            echo '<ul>';
            if ($page > 1) {
                echo '<li><a href="?page='.($page-1).'">&lt;</a></li>';
            }
            for ($i = 1; $i <= $totalPages; $i++) {
                echo '<li '.($page == $i ? 'class="active"' : '').'><a href="?page='.$i.'">'.$i.'</a></li>';
            }
            if ($page < $totalPages) {
                echo '<li><a href="?page='.($page+1).'">&gt;</a></li>';
            }
            echo '</ul>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            ?>
    </div>
</section>

<?php require_once 'includes/footer.php'?>
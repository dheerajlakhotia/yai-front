<?php require_once 'includes/header.php' ?>



<?php require_once 'includes/navbar.php' ?>
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-1 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <h2 class="mb-4">OUR DAILY ACTIVITY</h2>
                <p>Welcome to the heart of our community - the Activity Page. Here, you can witness the daily impact of
                    our collective efforts in real-time.</p>
            </div>
        </div>

    </div>
</section>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <form method="GET" action="">
                    <div class="mb-3">
                        <label for="month" class="form-label">Select Month:</label>
                        <select class="form-select" id="month" name="month">
                            <option value="">Select</option>
                            <option value="01">January</option>
                            <option value="02">February</option>
                            <option value="03">March</option>
                            <option value="04">April</option>
                            <option value="05">May</option>
                            <option value="06">June</option>
                            <option value="07">July</option>
                            <option value="08">August</option>
                            <option value="09">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary mb-5">Filter</button>
                </form>
            </div>
        </div>

        <?php
            // Pagination
            $results_per_page = 5;
            if (!isset($_GET['page'])) {
                $page = 1;
            } else {
                $page = $_GET['page'];
            }
            $offset = ($page - 1) * $results_per_page;

            // Set the default month to the current month if not specified
            $selected_month = isset($_GET['month']) ? $_GET['month'] : date('m');

            // Fetch unique dates from the activities table for the selected month
            $sql = "SELECT DISTINCT DATE(created_at) AS activity_date FROM activities WHERE MONTH(created_at) = '$selected_month' ORDER BY activity_date DESC LIMIT $offset, $results_per_page";
            $result_dates = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result_dates) > 0) {
                while ($row_date = mysqli_fetch_assoc($result_dates)) {
                    $activity_date = $row_date['activity_date'];
            ?>
        <div class="card shadow-sm mb-4">
            <div class="card-body">
                <h5 class="card-title mb-4">Daily Drive - <?php echo $activity_date; ?></h5>
                <div class="row">
                    <div class="col-12">
                        <div class="list-group list-group-horizontal" id="list-tab" role="tablist">
                            <?php
                                        // Fetch unique locations for the current date
                                        $sql_locations = "SELECT DISTINCT location FROM activities WHERE DATE(created_at) = '$activity_date'";
                                        $result_locations = mysqli_query($conn, $sql_locations);

                                        if (mysqli_num_rows($result_locations) > 0) {
                                            while ($row_location = mysqli_fetch_assoc($result_locations)) {
                                                // Display each location as a list item
                                                $location = $row_location['location'];
                                                echo '<a class="list-group-item list-group-item-action" id="list-' . str_replace(' ', '-', strtolower($location)) . '-list" data-bs-toggle="list" href="#list-' . str_replace(' ', '-', strtolower($location)) . '" role="tab" aria-controls="list-' . str_replace(' ', '-', strtolower($location)) . '">' . $location . '</a>';
                                            }
                                        } else {
                                            echo "<p class='text-muted'>No activities found for this date.</p>";
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
                                        mysqli_data_seek($result_locations, 0);

                                        while ($row_location = mysqli_fetch_assoc($result_locations)) {
                                            // Fetch activities for the current location and date
                                            $location = $row_location['location'];
                                            $sql_activities = "SELECT * FROM activities WHERE location = '$location' AND DATE(created_at) = '$activity_date'";
                                            $result_activities = mysqli_query($conn, $sql_activities);
                                        ?>
                            <!-- Display activity details for each location -->
                            <div class="tab-pane fade show"
                                id="list-<?php echo str_replace(' ', '-', strtolower($location)); ?>" role="tabpanel"
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
                                                            while ($activity_row = mysqli_fetch_assoc($result_activities)) {
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
                                        ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
                }
            } else {
                echo "<p class='text-muted'>No activities found.</p>";
            }

            // Pagination links
            $sql = "SELECT COUNT(DISTINCT DATE(created_at)) AS total_dates FROM activities WHERE MONTH(created_at) = '$selected_month'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            $total_pages = ceil($row['total_dates'] / $results_per_page);

            echo "<div class='row mb-5'>";
            echo "<div class='col text-center'>";
            echo "<div class='block-27'>";
            echo "<ul>";
            for ($i = 1; $i <= $total_pages; $i++) {
                echo "<li><a href='?page=" . $i . "&month=$selected_month'>" . $i . "</a></li>";
            }
            echo "</ul>";
            echo "</div>";
            echo "</div>";
            echo "</div>";

            ?>
    </div>
</section>

</div>

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
<?php require_once'includes/header.php'?>

<body>

    <?php require_once'includes/navbar.php'?>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-1 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <h2 class="mb-4">OUR DAILY ACTIVITY</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                        live the blind texts.</p>
                </div>
            </div>

        </div>
    </section>


    <section class="ftco-section bg-light">
        <div class="container">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title mb-4">Daily Drive - <?php echo date("Y-m-d"); ?></h5>
                    <div class="row">
                        <div class="col-12">
                            <div class="list-group list-group-horizontal" id="list-tab" role="tablist">
                                <?php
                            // Fetch unique locations from the activities table
                            $sql = "SELECT DISTINCT location FROM activities";
                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    // Display each location as a list item
                                    echo '<a class="list-group-item list-group-item-action" id="list-' . str_replace(' ', '-', strtolower($row['location'])) . '-list" data-bs-toggle="list" href="#list-' . str_replace(' ', '-', strtolower($row['location'])) . '" role="tab" aria-controls="list-' . str_replace(' ', '-', strtolower($row['location'])) . '">' . $row['location'] . '</a>';
                                }
                            } else {
                                echo "<p class='text-muted'>No activities found.</p>";
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
                                    // Fetch activities for the current location
                                    $location = $row['location'];
                                    $activities_query = "SELECT * FROM activities WHERE location = '$location'";
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
                                            // Display activities for the current location
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


    </div>

    <div class="row mb-5">
        <div class="col text-center">
            <div class="block-27">
                <ul>
                    <li><a href="#">&lt;</a></li>
                    <li class="active"><span>1</span></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">&gt;</a></li>
                </ul>
            </div>
        </div>
    </div>

    </div>

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
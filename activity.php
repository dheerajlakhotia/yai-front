<?php require_once'includes/header.php'?>

<body>

    <?php require_once'includes/navbar.php'?>

    <div class="hero-wrap"
        style="background-image: url('https://images.unsplash.com/photo-1622659097972-68f1d8c1829f?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center"
                data-scrollax-parent="true">
                <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span
                            class="mr-2"><a href="index.php">Home</a></span> <span>activity</span></p>
                    <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Activity</h1>
                </div>
            </div>
        </div>
    </div>

    <!-- Filtering Options Section -->
    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center">
                    <h2 class="mb-4">Filter Options</h2>
                    <form action="#" method="GET">
                        <div class="form-group">
                            <label for="city">Select City:</label>
                            <select class="form-control" id="city" name="city">
                                <option value="bikaner">Bikaner</option>
                                <option value="jaipur">Jaipur</option>
                                <option value="jodhpur">Jodhpur</option>
                                <!-- Add more cities as needed -->
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="date">Select Date:</label>
                            <input type="date" class="form-control" id="date" name="date">
                        </div>
                        <button type="submit" class="btn btn-primary">Apply Filters</button>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 ftco-animate mb-3">
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
                <div class="col-md-4 ftco-animate mb-3">
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
                <div class="col-md-4 ftco-animate mb-3">
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
                <div class="col-md-4 ftco-animate mb-3">
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
                <div class="col-md-4 ftco-animate mb-3">
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
                <div class="col-md-4 ftco-animate mb-3">
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

            </div>

        </div>
    </section>
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="card my-5">
                    <div class="card-body">
                        <!-- Recent Activity -->
                        <div class="card">
                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">Recent Activity <span>| Today</span></h5>

                                <div class="activity">

                                    <div class="activity-item d-flex">
                                        <div class="activite-label">32 min</div>
                                        <i class='bi bi-circle-fill'></i>
                                        <div class="activity-content">
                                            Quia quae rerum <a href="#" class="fw-bold text-dark">explicabo officiis</a>
                                            beatae
                                        </div>
                                    </div><!-- End activity item-->

                                    <!-- Add more activity items as needed -->

                                </div>

                            </div>
                        </div><!-- End Recent Activity -->
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>

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
<?php require_once'includes/header.php'?>

<body>

    <?php require_once'includes/navbar.php'?>
    <div class="hero-wrap"
        style="background-image: url('https://images.unsplash.com/photo-1619468129361-605ebea04b44?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center"
                data-scrollax-parent="true">
                <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span
                            class="mr-2"><a href="index.php">Home</a></span> <span>location</span></p>
                    <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">location
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <section class="ftco-section">
        <div class="container">
            <div class="row mx-auto">
                <div class="col-md-6">
                    <div class="card mb-4" style="width: 18rem;">
                        <!-- Card content here -->
                        <img class="card-img-top"
                            src="https://images.unsplash.com/photo-1518219051733-d8d4fbbf9797?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8N3x8dmlsbGFnZXxlbnwwfHwwfHx8MA%3D%3D"
                            alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#exampleModalCenter">
                                See details
                            </button>
                        </div>
                    </div>
                    <div class="card mb-4" style="width: 18rem;">
                        <!-- Card content here -->
                        <img class="card-img-top"
                            src="https://images.unsplash.com/photo-1518219051733-d8d4fbbf9797?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8N3x8dmlsbGFnZXxlbnwwfHwwfHx8MA%3D%3D"
                            alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#exampleModalCenter">
                                See details
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-4" style="width: 18rem;">
                        <!-- Card content here -->
                        <img class="card-img-top"
                            src="https://images.unsplash.com/photo-1518219051733-d8d4fbbf9797?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8N3x8dmlsbGFnZXxlbnwwfHwwfHx8MA%3D%3D"
                            alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#exampleModalCenter">
                                See details
                            </button>
                        </div>
                    </div>
                    <div class="card mb-4" style="width: 18rem;">
                        <!-- Card content here -->
                        <img class="card-img-top"
                            src="https://images.unsplash.com/photo-1518219051733-d8d4fbbf9797?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8N3x8dmlsbGFnZXxlbnwwfHwwfHx8MA%3D%3D"
                            alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#exampleModalCenter">
                                See details
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary">close</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <?php require_once 'includes/footer.php' ?>
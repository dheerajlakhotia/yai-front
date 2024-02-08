<?php require_once'includes/header.php'?>

<body>

    <?php require_once'includes/navbar.php'?>
    <div class="hero-wrap" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center"
                data-scrollax-parent="true">
                <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span
                            class="mr-2"><a href="index.php">Home</a></span> <span>Activity details</span></p>
                    <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Activity
                        details</h1>
                </div>
            </div>
        </div>
    </div>

    <main id="main">
        <section class="ftco-section">


            <div class="container">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Pills Tabs</h5>

                        <!-- Pills Tabs -->
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                    aria-selected="true">Home</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-profile" type="button" role="tab"
                                    aria-controls="pills-profile" aria-selected="false">Profile</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-contact" type="button" role="tab"
                                    aria-controls="pills-contact" aria-selected="false">Contact</button>
                            </li>
                        </ul>
                        <div class="tab-content pt-2" id="myTabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                aria-labelledby="home-tab">
                                Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora
                                libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem
                                eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="profile-tab">
                                Nesciunt totam et. Consequuntur magnam aliquid eos nulla dolor iure eos quia.
                                Accusantium distinctio omnis et atque fugiat. Itaque doloremque aliquid sint quasi
                                quia distinctio similique. Voluptate nihil recusandae mollitia dolores. Ut
                                laboriosam voluptatum dicta.
                            </div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="contact-tab">
                                Saepe animi et soluta ad odit soluta sunt. Nihil quos omnis animi debitis cumque.
                                Accusantium quibusdam perspiciatis qui qui omnis magnam. Officiis accusamus impedit
                                molestias nostrum veniam. Qui amet ipsum iure. Dignissimos fuga tempore dolor.
                            </div>
                        </div><!-- End Pills Tabs -->

                    </div>
                </div>
            </div>
        </section>
    </main>



    <?php require_once 'includes/footer.php' ?>
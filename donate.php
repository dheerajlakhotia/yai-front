<?php require_once'includes/header.php'?>

<body>

    <?php require_once'includes/navbar.php'?>

    <div class="hero-wrap"
        style="background-image: url('https://images.unsplash.com/photo-1591522810850-58128c5fb089?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center"
                data-scrollax-parent="true">
                <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span
                            class="mr-2"><a href="index.php">Home</a></span> <span>Donate</span></p>
                    <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Donations
                    </h1>
                </div>
            </div>
        </div>
    </div>


    <div class="container my-5">
        <h2 class="text-center mb-4">Donate to Our NGO</h2>
        <form action="request_call.php" method="post">

            <div class="form-group">
                <label for="donationType">Select Donation Type <span style="color: red;">*</span></label>
                <select class="form-control" id="donationType" name="donationType">
                    <option value="" selected>Choose...</option>
                    <option value="food">Food</option>
                    <option value="clothes">Clothes</option>
                    <option value="stationery">Stationery</option>
                </select>
            </div>

            <!-- For Food, No Quantity Needed -->

            <div class="form-group">
                <label for="description">Description <span style="color: red;">*</span></label>
                <textarea class="form-control" id="description" name="description" rows="3"
                    placeholder="Provide a brief description of the donation"></textarea>
            </div>

            <div class="form-group">
                <label for="contactName">Contact Name <span style="color: red;">*</span></label>
                <input type="text" class="form-control" id="contactName" name="contactName"
                    placeholder="Enter contact name">
            </div>

            <div class="form-group">
                <label for="contactEmail">Contact Email <span style="color: red;">*</span></label>
                <input type="email" class="form-control" id="contactEmail" name="contactEmail"
                    placeholder="Enter contact email">
            </div>

            <div class="form-group">
                <label for="contactPhone">Contact Phone <span style="color: red;">*</span></label>
                <input type="tel" class="form-control" id="contactPhone" name="contactPhone"
                    placeholder="Enter contact phone number">
            </div>

            <div class="form-group">
                <label for="address">Address <span style="color: red;">*</span></label>
                <textarea class="form-control" id="address" name="address" rows="3"
                    placeholder="Enter your address"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Request Call</button>
        </form>
    </div>

    <?php require_once 'includes/footer.php' ?>
<?php require_once'includes/header.php'?>

<body>

    <?php require_once'includes/navbar.php'?>




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
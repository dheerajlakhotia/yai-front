<?php require_once 'includes/header.php' ?>

<body>
    <?php require_once 'includes/navbar.php' ?>
    <?php
    // Handle form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $donationType = $_POST['donationType'];
        $description = $_POST['description'];
        $name = $_POST['contactName'];
        $email = $_POST['contactEmail'];
        $mobile = $_POST['contactPhone'];
        $address = $_POST['address'];

        // Set default status
        $status = 0;

        // Insert data into database
        $sql = "INSERT INTO donation_requests (donation_type, description, name, email, mobile, address, status) 
                VALUES ('$donationType', '$description', '$name', '$email', '$mobile', '$address', '$status')";

       if ($conn->query($sql) === TRUE) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
              Donation request submitted successfully
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
} else {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
              Error: ' . $sql . '<br>' . $conn->error . '
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
}

        // Close database connection
        $conn->close();
    }
    ?>

    <div class="container my-5">
        <h2 class="text-center mb-4">Donate to Our NGO</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

            <div class="form-group">
                <label for="donationType">Select Donation Type <span style="color: red;">*</span></label>
                <select class="form-control" id="donationType" name="donationType">
                    <option value="" selected>Choose...</option>
                    <option value="food">Food</option>
                    <option value="clothes">Clothes</option>
                    <option value="stationery">Stationery</option>
                </select>
                <span>we don't accept money as donation</span>
            </div>

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
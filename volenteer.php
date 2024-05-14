<?php
require_once 'includes/dbconfig.php'; // Assuming dbconfig.php is located in a folder shared by front and admin

// Function to validate email
function isValidEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

// Function to validate mobile number
function isValidMobile($mobile) {
    // Check if mobile number starts with a digit between 6 and 9 and has exactly 10 digits
    return preg_match('/^[6-9]\d{9}$/', $mobile);
}

// Function to validate password
function isValidPassword($password) {
    // Password length should be at least 6 characters
    return strlen($password) >= 6;
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Define the uploads directory path
    $uploadsDirectory = '../uploads';

    // Create the uploads directory if it doesn't exist
    if (!is_dir($uploadsDirectory)) {
        mkdir($uploadsDirectory, 0777, true); // Set appropriate permissions
    }

    // Retrieve form data
    $name = $_POST["full_name"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $address = $_POST["address"];
    $mobile = $_POST["mobile"];
    $dob = $_POST["dob"];
    $occupation = $_POST["occupation"];
    $idType = $_POST["idType"];
    $hobbies = $_POST["hobbies"];
    $password = $_POST["password"];
    $status = 0; // Status 0 indicates inactive

    // Assign role ID based on the role (Volunteer)
    $roleId = 3; // Volunteer role ID

    // Check if email already exists
    $sql_check_email = "SELECT COUNT(*) FROM yai_users WHERE email = ?";
    $stmt_check_email = $conn->prepare($sql_check_email);
    $stmt_check_email->bind_param("s", $email);
    $stmt_check_email->execute();
    $stmt_check_email->bind_result($email_count);
    $stmt_check_email->fetch();
    $stmt_check_email->close();

    // Check if mobile number already exists
    $sql_check_mobile = "SELECT COUNT(*) FROM yai_users WHERE mobile = ?";
    $stmt_check_mobile = $conn->prepare($sql_check_mobile);
    $stmt_check_mobile->bind_param("s", $mobile);
    $stmt_check_mobile->execute();
    $stmt_check_mobile->bind_result($mobile_count);
    $stmt_check_mobile->fetch();
    $stmt_check_mobile->close();

    // Validate form inputs
    $errors = [];
    if ($email_count > 0) {
        $errors[] = "Email already exists";
    }
    if ($mobile_count > 0) {
        $errors[] = "Mobile number already exists";
    }
    if (empty($name)) {
        $errors[] = "Name is required";
    }
    if (!isValidEmail($email)) {
        $errors[] = "Invalid email format";
    }
    if (empty($password) || !isValidPassword($password)) {
        $errors[] = "Password is required and must be at least 6 characters long";
    }
    if (empty($address)) {
        $errors[] = "Address is required";
    }
    if (!isValidMobile($mobile)) {
        $errors[] = "Invalid mobile number";
    }
    if (empty($dob)) {
        $errors[] = "Date of birth is required";
    }
    if (empty($occupation)) {
        $errors[] = "Occupation is required";
    }
    if (empty($idType)) {
        $errors[] = "Identification type is required";
    }
    if (empty($_FILES["image"]["name"])) {
        $errors[] = "Image is required";
    }
    if (empty($_FILES["idProof"]["name"])) {
        $errors[] = "ID proof is required";
    }

    // If there are no errors, proceed with insertion
    if (empty($errors)) {
        // Handle image upload
        $image_tmp = $_FILES["image"]["tmp_name"];
        $image_extension = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
        $image_path = $uploadsDirectory . '/' . uniqid() . '.' . $image_extension;

        if (move_uploaded_file($image_tmp, $image_path)) {
            // Image uploaded successfully
        } else {
            // Failed to upload image
            $errors[] = "Failed to upload image";
        }

        // Handle ID image upload
        $idImage_tmp = $_FILES["idProof"]["tmp_name"];
        $idImage_extension = pathinfo($_FILES["idProof"]["name"], PATHINFO_EXTENSION);
        $idImage_path = $uploadsDirectory . '/' . uniqid() . '.' . $idImage_extension;

        if (move_uploaded_file($idImage_tmp, $idImage_path)) {
            // ID image uploaded successfully
        } else {
            // Failed to upload ID image
            $errors[] = "Failed to upload ID proof image";
        }

        // Proceed only if both images are uploaded successfully
        if (empty($errors)) {
            // Hash the password
            $password = password_hash($password, PASSWORD_DEFAULT);

            // Insert data into the database
            $sql = "INSERT INTO yai_users (name, email, gender, address, mobile, dob, occupation, id_type, hobbies, password, role_id, status, image, id_image) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssssssssssisss", $name, $email, $gender, $address, $mobile, $dob, $occupation, $idType, $hobbies, $password, $roleId, $status, $image_path, $idImage_path);

            if ($stmt->execute()) {
                // Registration successful
                echo '<div class="alert alert-success" role="alert">Registration successful!</div>';
            } else {
                // Registration failed
                echo '<div class="alert alert-danger" role="alert">Error: ' . $stmt->error . '</div>';
            }

            $stmt->close();
        } else {
            // Display validation errors
            echo '<div class="alert alert-danger" role="alert">';
            foreach ($errors as $error) {
                echo $error . '<br>';
            }
            echo '</div>';
        }
    } else {
        // Display validation errors
        echo '<div class="alert alert-danger" role="alert">';
        foreach ($errors as $error) {
            echo $error . '<br>';
        }
        echo '</div>';
    }

    $conn->close();
}
?>






<?php require_once'includes/header.php'?>

<body>

    <?php require_once'includes/navbar.php'?>

    <div class="container my-5">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <h2 class="mb-4">BE A PART OF OUR FAMILY</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                    live the blind texts.</p>
            </div>
        </div>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"
            enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleInputname">Full Name <span style="color: red;">*</span></label>
                <input type="text" class="form-control" id="exampleInputname" name="full_name"
                    placeholder="Enter your full name" required>
                <?php if(isset($errors['name'])) { ?>
                <small class="form-text text-danger"><?php echo $errors['name']; ?></small>
                <?php } ?>
            </div>
            <div class="form-group">
                <label for="exampleInputImage">Upload Image <span style="color: red;">*</span></label>
                <input type="file" class="form-control-file" id="exampleInputImage" name="image"
                    accept=".jpg, .jpeg, .png" required>
                <?php if(isset($errors['image'])) { ?>
                <small class="form-text text-danger"><?php echo $errors['image']; ?></small>
                <?php } ?>
                <small class="form-text text-muted">Please upload a JPG, JPEG, or PNG image.</small>
            </div>
            <div class="form-group">
                <label>Gender <span style="color: red;">*</span></label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Male" required>
                    <label class="form-check-label" for="inlineRadio1">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Female">
                    <label class="form-check-label" for="inlineRadio2">Female</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio3" value="Other">
                    <label class="form-check-label" for="inlineRadio3">Other</label>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address <span style="color: red;">*</span></label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter email"
                    required>
                <?php if(isset($errors['email'])) { ?>
                <small class="form-text text-danger"><?php echo $errors['email']; ?></small>
                <?php } ?>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password <span style="color: red;">*</span></label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password"
                    placeholder="Password" required>
                <?php if(isset($errors['password'])) { ?>
                <small class="form-text text-danger"><?php echo $errors['password']; ?></small>
                <?php } ?>
            </div>
            <div class="form-group">
                <label for="exampleInputAddress">Address <span style="color: red;">*</span></label>
                <input type="text" class="form-control" id="exampleInputAddress" name="address"
                    placeholder="Enter your address" required>
                <?php if(isset($errors['address'])) { ?>
                <small class="form-text text-danger"><?php echo $errors['address']; ?></small>
                <?php } ?>
            </div>
            <div class="form-group">
                <label for="exampleInputMobile">Contact Number <span style="color: red;">*</span></label>
                <input type="text" class="form-control" id="exampleInputMobile" name="mobile"
                    placeholder="Enter your Mobile Number" required>
                <?php if(isset($errors['mobile'])) { ?>
                <small class="form-text text-danger"><?php echo $errors['mobile']; ?></small>
                <?php } ?>
            </div>
            <div class="form-group">
                <label for="dob">Date of Birth <span style="color: red;">*</span></label>
                <input type="date" class="form-control" id="dob" name="dob" required>
                <?php if(isset($errors['dob'])) { ?>
                <small class="form-text text-danger"><?php echo $errors['dob']; ?></small>
                <?php } ?>
            </div>
            <div class="form-group">
                <label for="occupation">Occupation <span style="color: red;">*</span></label>
                <select class="form-control" id="occupation" name="occupation" required>
                    <option value="" selected>Choose...</option>
                    <option value="Student">Student</option>
                    <option value="Teacher">Teacher</option>
                    <option value="Engineer">Engineer</option>
                    <option value="Doctor">Doctor</option>
                    <option value="Artist">Artist</option>
                    <option value="Business">Business</option>
                </select>
                <?php if(isset($errors['occupation'])) { ?>
                <small class="form-text text-danger"><?php echo $errors['occupation']; ?></small>
                <?php } ?>
            </div>
            <div class="form-group">
                <label for="idType">Select Identification Type <span style="color: red;">*</span></label>
                <select class="form-control" id="idType" name="idType" required>
                    <option value="" selected>Choose...</option>
                    <option value="Passport">Passport</option>
                    <option value="DriverLicense">Driver's License</option>
                    <option value="NationalId">National ID</option>
                    <option value="Other">Other</option>
                </select>
                <?php if(isset($errors['idType'])) { ?>
                <small class="form-text text-danger"><?php echo $errors['idType']; ?></small>
                <?php } ?>
            </div>
            <div class="form-group">
                <label for="idProof">Upload ID Proof <span style="color: red;">*</span></label>
                <input type="file" class="form-control-file" id="idProof" name="idProof" required>
                <small class="form-text text-muted">Please upload a valid ID proof (e.g., Passport, Driver's License,
                    National ID).</small>
            </div>
            <div class="form-group">
                <label for="exampleInputHobbies">Hobbies/skills</label>
                <input type="text" class="form-control" id="exampleInputHobbies" name="hobbies"
                    placeholder="Enter your hobbies or skills">
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                <label class="form-check-label" for="exampleCheck1"><a href="images/YAI_RULES.pdf"
                        target="_blank">Accept YAI terms</a><span style="color: red;">*</span></label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>




    <?php require_once 'includes/footer.php' ?>
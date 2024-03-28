<?php require_once'includes/header.php'?>

<body>

    <?php require_once'includes/navbar.php'?>
    <div class="hero-wrap"
        style="background-image: url('https://plus.unsplash.com/premium_photo-1661783433420-ddc45d35004a?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center"
                data-scrollax-parent="true">
                <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span
                            class="mr-2"><a href="index.php">Home</a></span> <span>INTERNSHIP</span></p>
                    <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Be a
                        Intern
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <form>
            <div class="form-group">
                <label for="exampleInputname">Full Names <span style="color: red;">*</span></label>
                <input type="text" class="form-control" id="exampleInputname" placeholder="Enter your full name">
            </div>

            <div class="form-group">
                <label>Gender <span style="color: red;">*</span></label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                        value="option1">
                    <label class="form-check-label" for="inlineRadio1">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                        value="option2">
                    <label class="form-check-label" for="inlineRadio2">Female</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3"
                        value="option3">
                    <label class="form-check-label" for="inlineRadio3">Other</label>
                </div>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Email address <span style="color: red;">*</span></label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Password <span style="color: red;">*</span></label>
                <input type="password" class="form-control" id="exampleInputEmail1" placeholder="xyz@123">
            </div>

            <div class="form-group">
                <label for="exampleInputAddress">Address <span style="color: red;">*</span></label>
                <input type="text" class="form-control" id="exampleInputAddress" placeholder="Enter your address">
            </div>

            <div class="form-group">
                <label for="exampleInputMobile">Contact Number <span style="color: red;">*</span></label>
                <input type="text" class="form-control" id="exampleInputMobile" placeholder="Enter your Mobile Number">
            </div>

            <div class="form-group">
                <label for="dob">Date of Birth <span style="color: red;">*</span></label>
                <input type="date" class="form-control" id="dob" name="dob">
            </div>

            <div class="form-group">
                <label for="occupation">Occupation <span style="color: red;">*</span></label>
                <select class="form-control" id="occupation" name="occupation">
                    <option value="" selected>Choose...</option>
                    <option value="student">Student</option>
                    <option value="teacher">Teacher</option>
                    <option value="engineer">Engineer</option>
                    <option value="doctor">Doctor</option>
                    <option value="artist">Artist</option>
                    <option value="business">Business</option>
                </select>
            </div>

            <div class="form-group">
                <label for="idType">Select Identification Type <span style="color: red;">*</span></label>
                <select class="form-control" id="idType" name="idType">
                    <option value="" selected>Choose...</option>
                    <option value="passport">Passport</option>
                    <option value="driverLicense">Driver's License</option>
                    <option value="nationalId">National ID</option>
                    <option value="other">Other</option>
                </select>
            </div>

            <div class="form-group">
                <label for="idProof">Upload ID Proof <span style="color: red;">*</span></label>
                <input type="file" class="form-control-file" id="idProof" name="idProof">
                <small class="form-text text-muted">Please upload a valid ID proof (e.g., Passport, Driver's License,
                    National ID).</small>
            </div>

            <div class="form-group">
                <label for="exampleInputHobbies">Hobbies/skills</label>
                <input type="text" class="form-control" id="exampleInputHobbies"
                    placeholder="Enter your hobbies or skills">
            </div>

            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1"><a href="images/YAI_RULES.pdf"
                        target="_blank">Accept YAI terms</a><span style="color: red;">*</span></label>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>




    <?php require_once 'includes/footer.php' ?>
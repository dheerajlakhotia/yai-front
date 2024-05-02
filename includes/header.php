<!DOCTYPE html>
<html lang="en">

<?php require 'includes/dbconfig.php'?>

<head>
    <?php
    // Get the current page file name
    $current_page = basename($_SERVER['PHP_SELF']);
    
    // Define an array to map page file names to their corresponding titles
    $page_titles = array(
        'index.php' => 'YAI',
        'about.php' => 'About-YAI',
        'activity.php' => 'Activity-YAI',
        'volenteer.php' => 'Become Volunteer-YAI',
        'donate.php' => 'Donate-YAI',
        'blog.php' => 'Blog-YAI',
        'gallery.php' => 'Gallery-YAI',
        'event.php' => 'Events-YAI',
        'location.php' => 'Locations-YAI',
        'contact.php' => 'Contact-YAI',
        'login.php' => 'Login-YAI',
        'testimonial.php' => 'Testimonial-YAI',
        'internship.php' => 'Internship-YAI'
    );

    // Set the page title based on the current page file name
    $title = isset($page_titles[$current_page]) ? $page_titles[$current_page] : 'YAI-YOUTH AGAINST ILLITERACY';
    ?>

    <?php
    // Fetch meta description and meta keywords from the database
    $sql = "SELECT meta_description, meta_tags FROM general_details";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $meta_description = $row["meta_description"];
        $meta_keywords = $row["meta_tags"];
    } else {
        // If no settings found in the database, set default values
        $meta_description = 'Default meta description';
        $meta_keywords = 'default, keywords';
    }

    // Fetch favicon path from the database
    $sql_favicon = "SELECT favicon FROM image LIMIT 1"; // Assuming there's only one row in the image table
    $result_favicon = mysqli_query($conn, $sql_favicon);

    if (mysqli_num_rows($result_favicon) > 0) {
        $row_favicon = mysqli_fetch_assoc($result_favicon);
        $faviconPath = $row_favicon['favicon'];
    } else {
        // If no favicon path found in the database, set a default path
        $faviconPath = "images/default-favicon.ico"; // Path to a default favicon image
    }
    ?>

    <title><?php echo $title; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta Description -->
    <meta name="description" content="<?php echo htmlspecialchars($meta_description); ?>">

    <!-- Meta Keywords -->
    <meta name="keywords" content="<?php echo htmlspecialchars($meta_keywords); ?>">



    <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Overpass:300,400,400i,600,700" rel="stylesheet">
    <link rel="stylesheet" href="node_modules/icons">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">


    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?php echo $faviconPath; ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
</head>
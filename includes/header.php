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

    <title><?php echo $title; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
    <!-- Add your favicon link -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
</head>
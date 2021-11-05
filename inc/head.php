<?php
$script = explode('/', $_SERVER['SCRIPT_NAME']);
$checkFileName = end($script);
$isIndex = strpos($_SERVER['SCRIPT_NAME'], 'index');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Private pages(such as files) should be noindex. Remove on public pages -->
    <meta name="robots" content="noindex">
    <meta name="googlebot" content="noindex">

    <title>Nursecome.az</title>

    

    <!--Font awesome icons-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" 
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!--Google Font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">

    <!--Selectric-->
    <link rel="stylesheet" href="css/vendor/selectric.css">

    <!--Micromodal plugin-->
    <link rel="stylesheet" href="css/vendor/micromodal.min.css">

    <!--Bootstrap Grid-->
    <link rel="stylesheet" href="css/vendor/bootstrap-grid.css">

    <!--Style css-->
    <link rel="stylesheet" href="css/style.css">

    
    
</head>
<body>
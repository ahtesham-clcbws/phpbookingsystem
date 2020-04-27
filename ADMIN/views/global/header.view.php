<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title><?=$pagetitle.' - '. $sitetitle;?></title>
    <!-- Favicon-->
    <link rel="icon" href="../../assets/images/favicon.ico" type="image/x-icon">
    <!-- Plugins Core Css -->
    <link href="../../assets/css/app.min.css" rel="stylesheet">
    <!-- Custom Css -->
    <link href="../../assets/css/style.css" rel="stylesheet" />
    <!-- You can choose a theme from css/styles instead of get all themes -->
    <link href="../../assets/css/styles/all-themes.css" rel="stylesheet" />

    <?php if(isset($pagestyles)){
        echo $pagestyles;
    }?>

</head>
<body class="light">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30">
                <img class="loading-img-spin" src="../../assets/images/loading.png" width="20" height="20" alt="admin">
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <?php require 'topbar.view.php'; ?>
    <div>
        <?php
        require 'leftsidebar.view.php';
        require 'rightsidebar.view.php';
        ?>
    </div>
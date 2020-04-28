<!DOCTYPE html>
<html lang="en" mode="ios" ng-app="ionicApp">

<head>    
    <meta charset="UTF-8" />
    <title>The Hill Stay</title>
    <meta name="theme-color" content="#fff"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name=description content="<?=$app['config']['site']['description'];?>">

    <link href="https://fonts.googleapis.com/css2?family=Quicksand" rel="stylesheet">
    <link rel="stylesheet" href="/assets/ionic/css/ionic.bundle.min.css" />
    <script type="module" src="/assets/ionic/dist/ionic/ionic.esm.js"></script>
    <script nomodule src="/assets/ionic/dist/ionic/ionic.js"></script>

    <script type="module">
        import { loadingController } from '/assets/ionic/dist/ionic/index.esm.js';
        window.loadingController = loadingController;
    </script>
    <script>
        async function preloader() {
        const loading = await loadingController.create({
            message: 'Please wait...',
            duration: 1000
            });
            await loading.present();
        }
    </script>



</head>

<body>
<!-- <body onload="preloader()"> -->

    <ion-app>
        <ion-content>
            <?php require 'topheader.view.php'; ?>
            <main>
                <?php require 'navbar.view.php'; ?>
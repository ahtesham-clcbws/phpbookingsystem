<!DOCTYPE html>
<html lang="en" mode="ios" ng-app="ionicApp">

<head>    
    <meta charset="UTF-8" />
    <title>The Hill Stay</title>
    <meta name="theme-color" content="#fff"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name=description content="<?=$app['config']['site']['description'];?>">

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

<script type="module" src="/assets/ionic/dist/ionic/ionic.esm.js"></script>


</head>

<body>
<!-- <body onload="preloader()"> -->

    <ion-app>
        <ion-content>
            <?php require 'topheader.view.php'; ?>
            <main>
                <?php require 'navbar.view.php'; ?>
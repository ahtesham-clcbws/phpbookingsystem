<ion-toolbar class="ion-padding-vertical ion-padding-top ion-margin-horizontal">
    <ion-grid>
        <ion-row class="ion-justify-content-between">

            <ion-col class="ion-text-start" size="12" size-md="3" size-lg="3" size-xl="3">
                <h3>The Hill Stay</h3>
            </ion-col>
            <ion-col></ion-col>
            <ion-col></ion-col>
            <ion-col class="ion-text-end">
                <ion-buttons class="ion-padding">
                    <ion-button>
                        <ion-button href="#" size="small" color="dark">Host your home</ion-button>
                    </ion-button>
                    <?php if (isset($_SESSION['login']) == '1') { ?>
                        <ion-button>
                            <ion-button href="/hosting" size="small" color="dark">Switch to hosting</ion-button>
                        </ion-button>

                        <ion-chip id="accountpopup" outline="true">
                            <ion-label><?= $_SESSION['firstName']; ?></ion-label>
                            <ion-avatar>
                                <img src="https://a0.muscache.com/defaults/user_pic-50x50.png?v=3">
                            </ion-avatar>
                            <ion-badge>9</ion-badge>
                        </ion-chip>

                    <?php } else { ?>
                        <ion-button>
                            <ion-button id="loginwindow" size="small" color="dark">Log In</ion-button>
                        </ion-button>
                        <ion-button>
                            <ion-button id="registerwindow" fill="outline">Sign Up</ion-button>
                        </ion-button>
                    <?php } ?>
                </ion-buttons>
            </ion-col>
        </ion-row>
    </ion-grid>
</ion-toolbar>
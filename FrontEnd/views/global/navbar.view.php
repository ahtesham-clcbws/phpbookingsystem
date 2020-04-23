<ion-toolbar class="ion-padding ion-margin-horizontal">
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
                    <ion-button>
                        <ion-button size="small" color="dark">Log In</ion-button>
                    </ion-button>
                    <ion-button>
                        <ion-button uk-toggle="target: #my-id" fill="outline">Sign Up</ion-button>
                    </ion-button>
                </ion-buttons>
            </ion-col>
        </ion-row>
    </ion-grid>
</ion-toolbar>
<div id="my-id" uk-modal class="uk-flex-top sc-ion-modal-ios-h sc-ion-modal-ios-s ios uk-padding-remove">
    <div class="uk-modal-dialog uk-modal-body uk-padding-remove uk-margin-auto-vertical">
        <ion-header translucent class="ion-no-padding">
            <ion-toolbar class="ion-padding">
                <ion-title>Log in</ion-title>
                <ion-buttons slot="end">
                    <button class="uk-modal-close" uk-close></button>
                </ion-buttons>
            </ion-toolbar>
        </ion-header>
        <ion-grid class="ion-padding" id="loginformgrid">
            <form id="loginform">
                <ion-row class="ion-padding">
                    <ion-col size="12" size-sm="12" size-md="6" size-lg="6" size-xl="6">
                        <ion-item>
                            <ion-label position="floating">Your Email</ion-label>
                            <ion-input type="email"></ion-input>
                        </ion-item>
                    </ion-col>
                    <ion-col size="12" size-sm="12" size-md="6" size-lg="6" size-xl="6">
                        <ion-item>
                            <ion-label position="floating">Your Password</ion-label>
                            <ion-input type="password"></ion-input>
                        </ion-item>
                    </ion-col>
                </ion-row>
                <ion-row class="ion-padding">
                    <ion-col>
                        <ion-button shape="round" expand="full" fill="outline" color="dark">Sign In</ion-button>
                    </ion-col>
                </ion-row>
            </form>
            <ion-row class="ion-text-center ion-padding-horizontal">
                <ion-col>
                    <ion-text>OR</ion-text>
                </ion-col>
            </ion-row>
            <ion-row class="ion-text-center ion-padding-horizontal">
                <ion-col size="12">
                    <ion-button shape="round" expand="full" color="danger">
                        <ion-icon name="logo-google"></ion-icon>&nbsp;&nbsp; Continue with Google
                    </ion-button>
                </ion-col>
                <ion-col size="12">
                    <ion-button shape="round" expand="full" color="primary">
                        <ion-icon name="logo-facebook"></ion-icon>&nbsp;&nbsp; Continue with Facebook
                    </ion-button>
                </ion-col>
            </ion-row>
        </ion-grid>
    </div>
</div>
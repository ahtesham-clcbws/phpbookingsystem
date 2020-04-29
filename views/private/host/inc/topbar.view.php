<ion-header translucent="true" id="hostingheader">
    <ion-toolbar>
        <ion-buttons slot="secondary">
            <ion-avatar class="ion-margin-horizontal">
                <img src="/assets/images/icon.png">
            </ion-avatar>
            <div id="accountTopNav">
                <ion-button color="dark" href="/hosting"><b>Home</b></ion-button>
                <ion-button color="dark" href="/hosting/inbox"><b>Inbox</b></ion-button>
                <ion-button color="dark" href="/hosting/reservations"><b>Reservations</b></ion-button>
                <ion-button color="dark" href="/hosting/calendar"><b>Calendar</b></ion-button>
                <ion-button color="dark" href="/hosting/listings"><b>Listings</b></ion-button>
                <ion-button color="dark" href="/hosting/stats"><b>Progress</b></ion-button>
                <ion-button color="dark" href="/hosting/help"><b>Help</b></ion-button>
            </div>
        </ion-buttons>
        <ion-buttons slot="primary">
            <ion-button color="danger" fill="outline">Create new listing</ion-button>
            <ion-avatar class="ion-margin-horizontal">
                <img onclick="openFirst()" src="https://a0.muscache.com/defaults/user_pic-50x50.png?v=3">
            </ion-avatar>
        </ion-buttons>
    </ion-toolbar>
</ion-header>
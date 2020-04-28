<ion-grid fixed>
    <ion-row>
        <ion-col class="ion-padding-vertical">
            <h2><strong>Dashboard</strong></h2>
        </ion-col>
    </ion-row>
    <ion-row>
        <ion-col size="12" size-md="8" size-lg="8" size-xl="8">
            <ion-card>
                <ion-card-header>
                    <ion-card-title>Requests</ion-card-title>
                </ion-card-header>

                <ion-card-content>
                    Nothing you need to do right now – you're all set!
                </ion-card-content>
            </ion-card>
            <ion-card>
                <ion-card-header>
                    <ion-card-title>Reservations</ion-card-title>
                </ion-card-header>

                <ion-card-content>
                    No upcoming reservations
                </ion-card-content>
            </ion-card>
        </ion-col>
        <ion-col size="12" size-md="4" size-lg="4" size-xl="4">
            <ion-card id="hostingalerts">
                <ion-card-header>
                    <ion-card-title>Notifications</ion-card-title>
                </ion-card-header>
                <ion-list lines="none">
                    <ion-item class="ion-no-padding">
                        <ion-icon name="close-outline" slot="end"></ion-icon>
                        <ion-card-content>
                            This is content, without any paragraph or header tags,
                            within an ion-card-content element.
                            <ion-card-subtitle>Apr 20</ion-card-subtitle>
                        </ion-card-content>
                    </ion-item>
                    <ion-item class="ion-no-padding">
                        <ion-icon name="close-outline" slot="end"></ion-icon>
                        <ion-card-content>
                            This is content, without any paragraph or header tags,
                            within an ion-card-content element.
                            <ion-card-subtitle>Apr 20</ion-card-subtitle>
                        </ion-card-content>
                    </ion-item>

                </ion-list>
            </ion-card>
        </ion-col>
    </ion-row>
</ion-grid>
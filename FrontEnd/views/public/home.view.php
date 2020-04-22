<ion-grid class="ion-padding" id="searcharea">
    <form id="homesearch">
        <ion-card>
            <ion-row>
                <ion-col>
                    <ion-item>
                        <ion-label position="floating">Floating Label</ion-label>
                        <ion-input placeholder="Enter Input"></ion-input>
                    </ion-item>
                </ion-col>
                <ion-col>
                    <ion-item>
                        <ion-label position="floating">Floating Label</ion-label>
                        <ion-input>
                            <ion-datetime value="2019-10-01T15:43:40.394Z" display-timezone="utc">
                            </ion-datetime>
                        </ion-input>
                    </ion-item>

                </ion-col>
                <ion-col>

                    <ion-item>
                        <ion-label position="floating">Floating Label</ion-label>
                        <ion-select multiple="true" cancelText="Nah" okText="Okay!">
                            <ion-select-option value="bacon">Bacon</ion-select-option>
                            <ion-select-option value="olives">Black Olives</ion-select-option>
                            <ion-select-option value="xcheese">Extra Cheese</ion-select-option>
                            <ion-select-option value="peppers">Green Peppers</ion-select-option>
                            <ion-select-option value="mushrooms">Mushrooms</ion-select-option>
                            <ion-select-option value="onions">Onions</ion-select-option>
                            <ion-select-option value="pepperoni">Pepperoni</ion-select-option>
                            <ion-select-option value="pineapple">Pineapple</ion-select-option>
                            <ion-select-option value="sausage">Sausage</ion-select-option>
                            <ion-select-option value="Spinach">Spinach</ion-select-option>
                        </ion-select>
                    </ion-item>
                </ion-col>
                <ion-col>
                    <ion-button color="primary" expand="block" size="large" class="ion-margin-top">Primary
                    </ion-button>
                </ion-col>
            </ion-row>
        </ion-card>
    </form>
</ion-grid>
<ion-grid>
    <ion-row>
        <ion-col>
            <div class="ion-text-center">
                <ion-text color="danger">
                    <h1><strong>Our Popular Accommodations</strong></h1>
                </ion-text>
                <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
            </div>
        </ion-col>
    </ion-row>
    <ion-row class="ion-padding" id="popular-accomodations">
        <?php foreach ($data as $place) :
            // $a = json_decode($place->images);
            $images = seperateData($place->images);
            $amenities = json_decode($place->amenities);
        ?>

            <ion-col size="12" size-sm="6" size-md="6" size-lg="4" size-xl="4">
                <ion-card>
                    <img src="public/uploads/places/<?= $place->id; ?>/<?= $images[0]; ?>">
                    <ion-card-header>
                        <span>
                            <ion-icon name="star" color="warning"></ion-icon>
                        </span>
                        <span>
                            <ion-icon name="star" color="warning"></ion-icon>
                        </span>
                        <span>
                            <ion-icon name="star" color="warning"></ion-icon>
                        </span>
                        <span>
                            <ion-icon name="star" color="warning"></ion-icon>
                        </span>
                        <span>
                            <ion-icon name="star"></ion-icon>
                        </span>
                        <span class="ion-float-right">
                            <ion-button fill="solid" color="danger">
                                8.9
                            </ion-button>
                        </span>
                        <ion-text color="dark">
                            <a href="#">
                                <h4><strong><?= $place->title; ?></strong></h4>
                            </a>
                        </ion-text>
                    </ion-card-header>
                    <ion-card-content>
                        <p><?= $place->placekind; ?> <?= $place->property_type; ?> in <?= $place->cityname; ?></p>
                        <p>Guests <?= $place->guests; ?>, Bedrooms <?= $place->bedrooms; ?>, Bathrooms <?= $place->bathrooms; ?></p>
                        <p><?=$amenities->basic[0]->name;?></p>
                            <p class="ion-padding-top">Rs <ion-text color="primary"><?= $place->price; ?></ion-text> per night</p>
                    </ion-card-content>
                    <ion-footer>
                        <ion-toolbar class="ion-align-self-center">

                            <ion-buttons slot="secondary">
                                <ion-button>
                                    164 Views
                                </ion-button>
                            </ion-buttons>
                            <ion-buttons slot="primary">
                                <ion-button>
                                    350 Reviews
                                </ion-button>
                            </ion-buttons>
                        </ion-toolbar>
                    </ion-footer>
                </ion-card>
            </ion-col>
        <?php endforeach; ?>

    </ion-row>
    <ion-row class="ion-justify-content-center">
        <ion-button shape="round" color="primary" id="loadaccomodations">Load More</ion-button>
    </ion-row>
</ion-grid>
<ion-grid class="ion-padding">
    <ion-row>
        <ion-progress-bar id="progressbar1" value="0"></ion-progress-bar>
        <ion-col size="12" offset-md="1" size-md="6" offset-md="2" size-lg="6" offset-md="2" size-xl="6" class="ion-padding">
            <form id="regForm" action="" class="ion-padding">
                <!-- One "tab" for each step in the form: -->
                <div class="tab">
                    <ion-item lines="none">
                        <h3>What kind of place are you listing?</h3>
                    </ion-item>
                    <ion-item>
                        <ion-label position="stacked">First, let's narrow things down</ion-label>
                        <ion-select name="placekind" value="Flat" ok-text="Okay" cancel-text="cancel">
                            <ion-select-option value="Flat">Flat</ion-select-option>
                            <ion-select-option value="House">House</ion-select-option>
                            <ion-select-option value="SecondaryUnit">SecondaryUnit</ion-select-option>
                            <ion-select-option value="UniqueSpace">UniqueSpace</ion-select-option>
                        </ion-select>
                    </ion-item>
                    <ion-item>
                        <ion-label position="stacked">Now choose a property type</ion-label>
                        <ion-select name="propertytype" value="Flat" ok-text="Okay" cancel-text="cancel">
                            <ion-select-option value="Flat">Flat</ion-select-option>
                            <ion-select-option value="condominium">condominium</ion-select-option>
                            <ion-select-option value="cuba">Cuba</ion-select-option>
                            <ion-select-option value="loft">Loft</ion-select-option>
                        </ion-select>
                    </ion-item>
                    <ion-item lines="none" class="ion-padding-top">
                        <ion-radio-group value="1" name="placetype">
                            <ion-list-header>
                                <h4>What will guests have?</h4>
                            </ion-list-header>

                            <ion-item>
                                <ion-label class="ion-text-wrap">
                                    Entire place
                                    <p>Guests have the whole place to themselves. This usually includes a bedroom, a bathroom, and a kitchen.</p>
                                </ion-label>
                                <ion-radio slot="start" value="1"></ion-radio>
                            </ion-item>

                            <ion-item>
                                <ion-label class="ion-text-wrap">
                                    Private room
                                    <p>Guests have thier own private room for sleeping. Other areas could be shared.</p>
                                </ion-label>
                                <ion-radio slot="start" value="2"></ion-radio>
                            </ion-item>

                            <ion-item lines="none">
                                <ion-label class="ion-text-wrap">
                                    Shared room
                                    <p>Guests sleep in a bedroom or a common area that could be shared with others.</p>
                                </ion-label>
                                <ion-radio slot="start" value="3"></ion-radio>
                            </ion-item>

                        </ion-radio-group>
                    </ion-item>
                    <ion-item lines="none" class="ion-padding-top">
                        <ion-radio-group value="0" name="guestsdedicated">
                            <ion-list-header>
                                <h4>Is this set up as a dedicated guest space?</h4>
                            </ion-list-header>

                            <ion-item>
                                <ion-label class="ion-text-wrap">
                                    Yes it's primarily set up for guests
                                </ion-label>
                                <ion-radio slot="start" value="1"></ion-radio>
                            </ion-item>
                            <ion-item>
                                <ion-label class="ion-text-wrap">
                                    No, I keep my personal belongings here
                                </ion-label>
                                <ion-radio slot="start" value="0"></ion-radio>
                            </ion-item>
                        </ion-radio-group>
                    </ion-item>
                    <ion-item lines="none" class="ion-padding-top">
                        <ion-radio-group value="0" name="usercomapany">
                            <ion-list-header>
                                <h4>Are you listing on airbnb as part of a company?</h4>
                            </ion-list-header>

                            <ion-item>
                                <ion-label class="ion-text-wrap">
                                    Yes, I work for or run a business
                                </ion-label>
                                <ion-radio slot="start" value="1"></ion-radio>
                            </ion-item>
                            <ion-item>
                                <ion-label class="ion-text-wrap">
                                    No, that doesn't sound like me
                                </ion-label>
                                <ion-radio slot="start" value="0"></ion-radio>
                            </ion-item>
                            <ion-item lines="none" class="ion-padding-top">
                                <ion-text>This helps you get the right features for how you host -it won't show up to guests or affect how you show up in search.</ion-text>
                            </ion-item>
                        </ion-radio-group>
                    </ion-item>
                </div>

                <div class="tab">
                    <ion-item lines="none">
                        <p>
                            <h3><strong>How many guests can your place accomodate?</strong></h3>
                        </p>
                    </ion-item>
                    <ion-item lines="none">
                        <ion-text class="ion-text-wrap">
                            Check that you have enough beds to accomodate all your guests comfortably.
                        </ion-text>
                    </ion-item>

                    <div id="maxguests">
                        <ion-item lines="none" class="ion-padding-top">
                            <ion-label class="ion-padding-vertical">
                                <ion-text>
                                    <strong>Guests</strong>
                                </ion-text>
                                <ion-text class="ion-float-right">
                                    <span class="value-button decreasevalue" onclick="decreaseGuest()" value="Decrease Value">
                                        <ion-icon name="remove-circle-outline"></ion-icon>
                                    </span>
                                    <input type="number" name="guests" value="0" min="1" max="16" />
                                    <span class="value-button increasevalue" onclick="increaseGuest()" value="Increase Value">
                                        <ion-icon name="add-circle-outline"></ion-icon>
                                    </span>
                                </ion-text>
                            </ion-label>
                        </ion-item>
                    </div>

                    <div id="bedroomsnumbers">
                        <ion-item lines="none">
                            <p>
                                <ion-label position="stacked">How many bedrooms can guests use?</ion-label>
                            </p>
                            <ion-select name="selectbedrooms" id="selectbedrooms" placeholder="Select Bedrooms" ok-text="Okay" cancel-text="cancel">
                                <ion-select-option value="1">1 Bedroom</ion-select-option>
                                <ion-select-option value="2">2 Bedroom</ion-select-option>
                                <ion-select-option value="3">3 Bedroom</ion-select-option>
                                <ion-select-option value="4">4 Bedroom</ion-select-option>
                                <ion-select-option value="5">5 Bedroom</ion-select-option>
                                <ion-select-option value="6">6 Bedroom</ion-select-option>
                                <ion-select-option value="7">7 Bedroom</ion-select-option>
                                <ion-select-option value="8">8 Bedroom</ion-select-option>
                                <ion-select-option value="9">9 Bedroom</ion-select-option>
                                <ion-select-option value="10">10 Bedroom</ion-select-option>
                                <ion-select-option value="11">11 Bedroom</ion-select-option>
                                <ion-select-option value="12">12 Bedroom</ion-select-option>
                                <ion-select-option value="13">13 Bedroom</ion-select-option>
                                <ion-select-option value="14">14 Bedroom</ion-select-option>
                                <ion-select-option value="15">15 Bedroom</ion-select-option>
                                <ion-select-option value="16">16 Bedroom</ion-select-option>
                                <ion-select-option value="17">17 Bedroom</ion-select-option>
                                <ion-select-option value="18">18 Bedroom</ion-select-option>
                                <ion-select-option value="19">19 Bedroom</ion-select-option>
                                <ion-select-option value="20">20 Bedroom</ion-select-option>
                            </ion-select>
                        </ion-item>
                    </div>

                    <div id="bedsuse">
                        <ion-item lines="none" class="ion-padding-top">
                            <ion-label position="stacked" class="ion-text-nowrap">How many beds can guests use?</ion-label>
                            <ion-label class="ion-padding-vertical" style="width:100%;padding-top:5px;margin-top:1px;">
                                <ion-text>
                                    <strong>Beds</strong>
                                </ion-text>
                                <ion-text class="ion-float-right">
                                    <span class="value-button decreasevalue" onclick="decreaseGuest()" value="Decrease Value">
                                        <ion-icon name="remove-circle-outline"></ion-icon>
                                    </span>
                                    <input type="number" name="guests" value="0" min="1" max="16" />
                                    <span class="value-button increasevalue" onclick="increaseGuest()" value="Increase Value">
                                        <ion-icon name="add-circle-outline"></ion-icon>
                                    </span>
                                </ion-text>
                            </ion-label>
                        </ion-item>
                    </div>

                    <div id="sleepingarrangements">
                        <ion-item lines="none" class="ion-padding-top">
                            <h3>Sleeping Arrangements</h3>
                        </ion-item>
                        <ion-item>
                            <ion-text class="ion-text-wrap ion-padding-bottom">
                                Sharing the types of beds in each room can help people understand the sleeping arrangements.
                            </ion-text>
                        </ion-item>

                        <div id="bedrooms">
                            <div id="bedroomz">
                            </div>
                            <ion-item id="commonspace">
                                <div style="width:100%;">
                                    <ion-item-group class="">
                                        <ion-item lines="none">
                                            <ion-label>
                                                <ion-text class="ion-float-left">
                                                    <strong>Common spaces</strong></br><span>0</span>beds
                                                </ion-text>
                                                <ion-text class="ion-float-right">
                                                    <ion-button size="medium" onclick="addbedz('common1')">Add beds</ion-button>
                                                </ion-text>
                                            </ion-label>
                                        </ion-item>
                                        <ion-list lines="none" class="beds" id="common1">
                                            <ion-item>
                                                <ion-label class="ion-no-padding" style="max-width:300px;">
                                                    <ion-text>
                                                        <strong>Sofa bed</strong>
                                                    </ion-text>
                                                    <ion-text class="ion-float-right">
                                                        <span class="value-button decreasevalue" onclick="decreaseGuest()" value="Decrease Value">
                                                            <ion-icon name="remove-circle-outline"></ion-icon>
                                                        </span>
                                                        <input type="number" name="guests" value="0" min="1" max="16" />
                                                        <span class="value-button increasevalue" onclick="increaseGuest()" value="Increase Value">
                                                            <ion-icon name="add-circle-outline"></ion-icon>
                                                        </span>
                                                    </ion-text>
                                                </ion-label>
                                            </ion-item>
                                            <ion-item>
                                                <ion-label class="ion-no-padding" style="max-width:300px;">
                                                    <ion-text>
                                                        <strong>Sofa</strong>
                                                    </ion-text>
                                                    <ion-text class="ion-float-right">
                                                        <span class="value-button decreasevalue" onclick="decreaseGuest()" value="Decrease Value">
                                                            <ion-icon name="remove-circle-outline"></ion-icon>
                                                        </span>
                                                        <input type="number" name="guests" value="0" min="1" max="16" />
                                                        <span class="value-button increasevalue" onclick="increaseGuest()" value="Increase Value">
                                                            <ion-icon name="add-circle-outline"></ion-icon>
                                                        </span>
                                                    </ion-text>
                                                </ion-label>
                                            </ion-item>
                                            <ion-item>
                                                <ion-label class="ion-no-padding" style="max-width:300px;">
                                                    <ion-text>
                                                        <strong>Floor mattress</strong>
                                                    </ion-text>
                                                    <ion-text class="ion-float-right">
                                                        <span class="value-button decreasevalue" onclick="decreaseGuest()" value="Decrease Value">
                                                            <ion-icon name="remove-circle-outline"></ion-icon>
                                                        </span>
                                                        <input type="number" name="guests" value="0" min="1" max="16" />
                                                        <span class="value-button increasevalue" onclick="increaseGuest()" value="Increase Value">
                                                            <ion-icon name="add-circle-outline"></ion-icon>
                                                        </span>
                                                    </ion-text>
                                                </ion-label>
                                            </ion-item>
                                            <div class="anothercommonspace"></div>
                                            <ion-item>
                                                <div class="ion-no-padding">
                                                    <ion-select style="max-width:300px;" name="bedrooms" value="0" ok-text="Okay" cancel-text="cancel">
                                                        <ion-select-option value="0">Add another bed</ion-select-option>
                                                        <ion-select-option value="aaaaaa">BedType</ion-select-option>
                                                        <ion-select-option value="aaaaaa">BedType</ion-select-option>
                                                        <ion-select-option value="aaaaaa">BedType</ion-select-option>
                                                        <ion-select-option value="aaaaaa">BedType</ion-select-option>
                                                    </ion-select>
                                                </div>
                                            </ion-item>
                                        </ion-list>
                                    </ion-item-group>
                                </div>
                            </ion-item>
                        </div>
                    </div>

                </div>

                <div class="tab">
                    <ion-item>
                        <ion-label position="floating">Date of Birth</ion-label>
                        <ion-input type="date"></ion-input>
                    </ion-item>
                    <ion-item>
                        <ion-label position="floating">Place of Birth</ion-label>
                        <ion-input type="text"></ion-input>
                    </ion-item>
                </div>

                <div class="tab">
                    <ion-item>
                        <ion-label position="floating">Username</ion-label>
                        <ion-input type="text"></ion-input>
                    </ion-item>
                    <ion-item>
                        <ion-label position="floating">Password</ion-label>
                        <ion-input type="password"></ion-input>
                    </ion-item>
                </div>

                <ion-footer class="ion-padding ion-margin">
                    <div class="ion-padding-horizontal ion-margin-horizontal">
                        <ion-button color="success" class="ion-float-left" id="prevBtn" onclick="nextPrev(-1)">Back</ion-button>
                        <ion-button color="success" class="ion-float-right" id="nextBtn" onclick="nextPrev(1)">Next</ion-button>
                    </div>
                </ion-footer>

            </form>
        </ion-col>
    </ion-row>
</ion-grid>
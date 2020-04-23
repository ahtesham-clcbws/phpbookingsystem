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
                        <ion-label position="floating">First, let's narrow things down</ion-label>
                        <ion-select name="placekind" value="" ok-text="Okay" cancel-text="cancel">
                            <ion-select-option value="Flat">Flat</ion-select-option>
                            <ion-select-option value="House">House</ion-select-option>
                            <ion-select-option value="SecondaryUnit">SecondaryUnit</ion-select-option>
                            <ion-select-option value="UniqueSpace">UniqueSpace</ion-select-option>
                        </ion-select>
                    </ion-item>
                    <ion-item>
                        <ion-label position="floating">Now choose a property type</ion-label>
                        <ion-select name="propertytype" value="" ok-text="Okay" cancel-text="cancel">
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
                        <ion-radio-group value="" name="guestsdedicated">
                            <ion-list-header>
                                <h4>Is this set up as a dedicated guest space?</h4>
                            </ion-list-header>

                            <ion-item>
                                <ion-label class="ion-text-wrap">
                                    Yes it's primarily set up for guests
                                </ion-label>
                                <ion-radio slot="start" value="yes"></ion-radio>
                            </ion-item>
                            <ion-item>
                                <ion-label class="ion-text-wrap">
                                    No, I keep my personal belongings here
                                </ion-label>
                                <ion-radio slot="start" value="no"></ion-radio>
                            </ion-item>
                        </ion-radio-group>
                    </ion-item>
                    <ion-item lines="none" class="ion-padding-top">
                        <ion-radio-group value="" name="usercomapany">
                            <ion-list-header>
                                <h4>Are you listing on airbnb as part of a company?</h4>
                            </ion-list-header>

                            <ion-item>
                                <ion-label class="ion-text-wrap">
                                    Yes, I work for or run a business
                                </ion-label>
                                <ion-radio slot="start" value="yes"></ion-radio>
                            </ion-item>
                            <ion-item>
                                <ion-label class="ion-text-wrap">
                                    No, that doesn't sound like me
                                </ion-label>
                                <ion-radio slot="start" value="no"></ion-radio>
                            </ion-item>
                            <ion-item lines="none" class="ion-padding-top">
                                <ion-text>This helps you get the right features for how you host -it won't show up to guests or affect how you show up in search.</ion-text>
                            </ion-item>
                        </ion-radio-group>
                    </ion-item>
                </div>

                <div class="tab">
                    <ion-item lines="none">
                        <h3>How many guests ca your place accomodate?</h3>
                    </ion-item>
                    <ion-item>
                        <ion-label>Check that you have enough beds to accomodate all your suests comfortably.</ion-label>
                    </ion-item>
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

                <ion-footer>
                    <div>
                        <ion-button type="button" class="ion-float-left" id="prevBtn" onclick="nextPrev(-1)">Back</ion-button>
                        <ion-button type="button" class="ion-float-right" id="nextBtn" onclick="nextPrev(1)">Next</ion-button>
                    </div>
                </ion-footer>

            </form>
        </ion-col>
    </ion-row>
</ion-grid>
// FORM WIZARD CODE
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
    // This function will display the specified tab of the form ...
    var x = document.getElementsByClassName("tab");
    x[n].style.display = "block";
    // ... and fix the Previous/Next buttons:
    if (n == 0) {
        document.getElementById("prevBtn").style.display = "none";
    } else {
        document.getElementById("prevBtn").style.display = "inherit";
    }
    if (n == (x.length - 1)) {
        document.getElementById("nextBtn").innerHTML = "Submit";
    } else {
        document.getElementById("nextBtn").innerHTML = "Next";
    }
}

var totaltab = document.querySelectorAll('#regForm .tab').length;

var tabs = 1 / totaltab;

function myFunction() {
    var a = document.getElementById("progressbar1").value;
    // var b = ++a;
    var b = a;
    var c = document.getElementById("progressbar1").value = b + tabs;
    console.log(c);
}

document.getElementById("prevBtn").addEventListener("click", myFunctionback);

function myFunctionback() {
    var a = document.getElementById("progressbar1").value;
    // var b = ++a;
    var b = a;
    var c = document.getElementById("progressbar1").value = b - tabs;
    console.log(c);
}
function nextPrev(n) {
    // This function will figure out which tab to display
    var x = document.getElementsByClassName("tab");
    // Exit the function if any field in the current tab is invalid:
    if (n == 1 && !validateForm()) return false;
    // Hide the current tab:
    x[currentTab].style.display = "none";
    // Increase or decrease the current tab by 1:
    currentTab = currentTab + n;
    // if you have reached the end of the form... :
    if (currentTab >= x.length) {
        //...the form gets submitted:
        document.getElementById("regForm").submit();
        return false;
    }
    // Otherwise, display the correct tab:
    showTab(currentTab);
}

function validateForm() {
    // This function deals with validation of the form fields
    var x, y, i, valid = true;
    x = document.getElementsByClassName("tab");
    y = x[currentTab].getElementsByTagName("input");
    // A loop that checks every input field in the current tab:
    for (i = 0; i < y.length; i++) {
        // If a field is empty...
        if (y[i].value == "") {
            // and set the current valid status to false:
            valid = false;
        }
    }
    if (valid) {

        document.getElementById("nextBtn").addEventListener("click", myFunction);
    }
    return valid; // return the valid status
}

// HOW MANY BEDROOMS

let bedroomsArray = [];

let divsize = document.getElementsByClassName("bedroom").length;


document.getElementById("selectbedrooms").addEventListener("ionChange", displayBedrooms);

function addbedz(id) {
    // console.log(id);
    document.getElementById(id).style.display = "block";
}

function displayBedrooms() {
    let len = document.getElementById("selectbedrooms").value;
    if (len < 1) {
        document.getElementById("bedroomz").innerHTML = '';
    } else if (divsize > len) {
        // CONVERT DIVs in ARRAY & SPLICE EXTRA CONTENT (divsize - len)
        var total = divsize - len;
        for (i = 0; i < total; i++) {
            var selectEle = document.getElementsByClassName("bedroom");
            var removingEle = selectEle[selectEle.length - 1];
            removingEle.parentNode.removeChild(removingEle);
        }
    } else if (divsize < len) {
        // PUSH EXTRA DIVs into ARRAY INSERT (len - divsize)
        var total = len - divsize;
        for (i = divsize; i < len; i++) {
            var sn = i + 1;
            document.getElementById("bedroomz").innerHTML += `<ion-item class="bedroom">
            <div style="width:100%;">
                <ion-item-group>
                    <ion-item lines="none">
                        <ion-label>
                            <ion-text class="ion-float-left">
                                <strong>Bedroom <span class="bedroomsn">`+ sn +`</span></strong></br>0 beds
                            </ion-text>
                            <ion-text class="ion-float-right">
                                <ion-button class="addbedz" onclick="addbedz('bedroom`+sn+`')" size="medium">Add beds</ion-button>
                            </ion-text>
                        </ion-label>
                    </ion-item>
                    <ion-list lines="none" class="beds" id="bedroom`+sn+`">
                        <ion-item>
                            <ion-label class="ion-no-padding" style="max-width:300px;">
                                <ion-text>
                                    <strong>Double</strong>
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
                                    <strong>Queen</strong>
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
                                    <strong>Single</strong>
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
                        <div class="anotherbedroomspace"></div>
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
        </ion-item>`;
        }
    }
    divsize = document.getElementsByClassName("bedroom").length;
}

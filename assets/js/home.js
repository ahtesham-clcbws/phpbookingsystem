let adults;
let children;
let infants;

// calendar js
document.getElementsByName("daterange").flatpickr({
	mode: "range",
	minDate: "today"
});

// Guest Select popup STARTS
let currentPopover2 = null;

const buttons = document.querySelectorAll('ion-input[name="show-guests"]');
for (var i = 0; i < buttons.length; i++) {
	buttons[i].addEventListener('click', handleButtonClick);
}

async function handleButtonClick(ev) {
	popover = await popoverController.create({
		component: 'popover-example-page',
		event: ev,
		translucent: true
	});
	currentPopover2 = popover;
	return popover.present();
}

function dismissPopover() {
	if (currentPopover2) {
		currentPopover2.dismiss().then(() => { currentPopover2 = null; });
	}
}

customElements.define('popover-example-page', class ModalContent extends HTMLElement {
	connectedCallback() {
		this.innerHTML = `
          <ion-item-group>
            <ion-item class="popoverform">
              <ion-label class="ion-padding-vertical">
                <ion-text>
                  <span class="value-button decreasevalue" onclick="decreaseGuest()" value="Decrease Value">-</span>
                    <input type="number" name="guests" value="0" min="1" max="16"/>
                  <span class="value-button increasevalue" onclick="increaseGuest()" value="Increase Value">+</span>
                </ion-text>
                <ion-text class="ion-float-right">
                  <strong>Adults</strong>
                  <p>Ages 13+</p>
                </ion-text>
              </ion-label>
            </ion-item>
          
            <ion-item id="popoverform">
              <ion-label class="ion-padding-vertical">
                <ion-text>
                  <span class="value-button decreasevalue" onclick="decreaseChildren()" value="Decrease Value">-</span>
                    <input type="number" name="children" value="0" min="0" max="5" />
                  <span class="value-button increasevalue" onclick="increaseChildren()" value="Increase Value">+</span>
                </ion-text>
                <ion-text class="ion-float-right">
                  <strong>Children</strong>
                  <p>Ages 2 - 12</p>
                </ion-text>
              </ion-label>
            </ion-item>
          
            <ion-item id="popoverform">
              <ion-label class="ion-padding-vertical">
              <ion-text>
                <span class="value-button decreasevalue" onclick="decreaseInfants()" value="Decrease Value">-</span>
                  <input type="number" name="infants" value="0" min="0" max="5"/>
                <span class="value-button increasevalue" onclick="increaseInfants()" value="Increase Value">+</span>
              </ion-text>
                <ion-text class="ion-float-right">
                  <strong>Infants</strong>
                  <p>Under 2</p>
                </ion-text>
              </ion-label>
            </ion-item>

            <ion-item lines="none" detail="false" button onClick="dismissPopover()">Done</ion-item>
		  </ion-list>
		  <style>.popover-content{width: 260px !important;}</style>
        `;
	}
});

// Guests select popup ENDS

// Guests/Children/Infants increase/decrease STARTS

	// GUESTS FUNCTION

	function increaseGuest() {
		var value = parseInt(document.getElementsByName('guests')[0].value, 10);
		value = isNaN(value) ? 0 : value;
		if(value >= 16){
			document.getElementsByName('guests').disabled = true;
		}else{
			value++;
		}
		document.getElementsByName('guests')[0].value = value;
		setTotalValue()
	}

	function decreaseGuest() {
		var value = parseInt(document.getElementsByName('guests')[0].value, 10);
		value = isNaN(value) ? 0 : value;
		value < 1 ? value = 1 : '';
		value--;
		document.getElementsByName('guests')[0].value = value;
		setTotalValue()
	}

	// CHILDREN FUNCTION

	function increaseChildren() {
		var value = parseInt(document.getElementsByName('children')[0].value, 10);
		value = isNaN(value) ? 0 : value;
		if(value >= 5){
			document.getElementsByName('children').disabled = true;
		}else{
			value++;
		}
		document.getElementsByName('children')[0].value = value;
		setTotalValue()
	}

	function decreaseChildren() {
		var value = parseInt(document.getElementsByName('children')[0].value, 10);
		value = isNaN(value) ? 0 : value;
		value < 1 ? value = 1 : '';
		value--;
		document.getElementsByName('children')[0].value = value;
		setTotalValue()
	}

	// INFANNTS FUNCTION

	function increaseInfants() {
		var value = parseInt(document.getElementsByName('infants')[0].value, 10);
		value = isNaN(value) ? 0 : value;
		if(value >= 5){
			document.getElementsByName('infants').disabled = true;
		}else{
			value++;
		}
		document.getElementsByName('infants')[0].value = value;
		setTotalValue()
	}

	function decreaseInfants() {
		var value = parseInt(document.getElementsByName('infants')[0].value, 10);
		value = isNaN(value) ? 0 : value;
		value < 1 ? value = 1 : '';
		value--;
		document.getElementsByName('infants')[0].value = value;
		setTotalValue()
	}

// Guests/Children/Infants increase/decrease ENDS

// value increase decrease by upper functions

function setTotalValue() {
	adults = parseInt(document.getElementsByName('guests')[0].value, 10);
	children = parseInt(document.getElementsByName('children')[0].value, 10);
	infants = parseInt(document.getElementsByName('infants')[0].value, 10);

	var guests = adults + children;
	var totalguests = adults + children + infants;

	document.getElementsByName("persons['adults']")[0].value = adults;
	document.getElementsByName("persons['children']")[0].value = children;
	document.getElementsByName("persons['infants']")[0].value = infants;
	document.getElementsByName("persons['guests']")[0].value = guests;
	document.getElementsByName("persons['totalguests']")[0].value = totalguests;

	var show = "guests " + guests + ", infants " + infants;

	document.getElementsByName('show-guests')[0].value = show;
}

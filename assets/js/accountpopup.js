
// Guest Select popup STARTS
let accountDropdown = null;


customElements.define('account-popover', class ModalContent extends HTMLElement {
	connectedCallback() {
		this.innerHTML = `
        <ion-list>      
            <ion-item lines="none" href="/inbox">
                <ion-label>Messages</ion-label>
            </ion-item>
            <ion-item lines="none" href="/alerts">
                <ion-label>Notifications</ion-label>
            </ion-item>
            <ion-item lines="none" href="/trips">
                <ion-label>Trips</ion-label>
            </ion-item>
            <ion-item href="/wishlist">
                <ion-label>Saved</ion-label>
            </ion-item>
        </ion-list>
        <ion-list>
            <ion-item lines="none" href="/hosting">
                <ion-label>Manage Places</ion-label>
            </ion-item>
            <ion-item href="/account/setting">
                <ion-label>Account</ion-label>
            </ion-item>
        </ion-list>
        <ion-list lines="none">
            <ion-item href="/help">
                <ion-label>Help</ion-label>
            </ion-item>
            <ion-item href="/logout">
                <ion-label>Logout</ion-label>
            </ion-item>
        </ion-list>
        `;
	}
});

const buttonAccount = document.querySelectorAll('#accountpopup');
for (var i = 0; i < buttons.length; i++) {
	buttonAccount[i].addEventListener('click', handleButtonClick);
}

async function handleButtonClick(ev) {
	popover = await popoverController.create({
		component: 'account-popover',
		event: ev,
		translucent: true
	});
	accountDropdown = popover;
	return popover.present();
}


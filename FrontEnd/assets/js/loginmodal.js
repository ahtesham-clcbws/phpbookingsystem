customElements.define('modal-content', class ModalContent extends HTMLElement {
	connectedCallback() {
		this.innerHTML = `
		<ion-header translucent>
			<ion-toolbar class="ion-padding">
				<ion-title>Log in</ion-title>
				<ion-buttons slot="end">
					<ion-button onclick="dismissModal()">Close</ion-button>
				</ion-buttons>
			</ion-toolbar>
		</ion-header>
		<ion-content>
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
						<ion-button shape="round" expand="full" color="danger"><ion-icon name="logo-google"></ion-icon>&nbsp;&nbsp; Continue with Google</ion-button>
					</ion-col>
					<ion-col size="12">
						<ion-button shape="round" expand="full" color="primary"><ion-icon name="logo-facebook"></ion-icon>&nbsp;&nbsp; Continue with Facebook</ion-button>
					</ion-col>
				</ion-row>
			</ion-grid>
		</ion-content>
	`;
	}
});
let currentModal = null;
const button = document.querySelector('#loginmodal');
button.addEventListener('click', createModal);

async function createModal() {
	const modal = await modalController.create({
		component: 'modal-content'
	});

	await modal.present();
	currentModal = modal;
}

function dismissModal() {
	if (currentModal) {
		currentModal.dismiss().then(() => {
			currentModal = null;
		});
	}
}
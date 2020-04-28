// LOGIN MODAL
customElements.define('modal-content', class ModalContent extends HTMLElement {
	connectedCallback() {
	  this.innerHTML = `
	  <ion-header translucent class="ion-no-padding">
	  <ion-toolbar class="ion-padding">
		  <ion-title>Log in</ion-title>
		  <ion-buttons slot="end">
			  <button class="uk-modal-close" uk-close></button>
		  </ion-buttons>
	  </ion-toolbar>
  </ion-header>
  <ion-grid class="ion-padding" id="loginformgrid">
	  <form id="loginform" action="/userlogin" method="POST">
		  <ion-row class="ion-padding">
			  <ion-col size="12" size-sm="12" size-md="6" size-lg="6" size-xl="6">
				  <ion-item>
					  <ion-label position="floating" for="loginemail">Your Email</ion-label>
					  <ion-input name="loginemail" id="loginemail" type="email"></ion-input>
				  </ion-item>
			  </ion-col>
			  <ion-col size="12" size-sm="12" size-md="6" size-lg="6" size-xl="6">
				  <ion-item>
					  <ion-label position="floating" for="loginpassword">Your Password</ion-label>
					  <ion-input name="loginpassword" id="loginpassword" type="password"></ion-input>
				  </ion-item>
			  </ion-col>
		  </ion-row>
		  <ion-row class="ion-padding">
			  <ion-col>
                    <ion-button type="submit" name="submit" shape="round" expand="full" fill="outline" color="dark">
                        Sign In
					</ion-button>
					<ion-input name="login" value="loginprocess" type="submit" hidden></ion-input>
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
	  `;
	}
  });

  let loginModal = null;
  const loginbutton = document.querySelector('#loginwindow');
  loginbutton.addEventListener('click', createModal);

  async function createModal() {
	const modal = await modalController.create({
	  component: 'modal-content'
	});

	await modal.present();
	loginModal = modal;
  }

  function dismissModal() {
	if (loginModal) {
		loginModal.dismiss().then(() => { loginModal = null; });
	}
  }


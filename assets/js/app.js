
    customElements.define('modal-content', class ModalContent extends HTMLElement {
        connectedCallback() {
          this.innerHTML = `
            <ion-header translucent>
              <ion-toolbar>
                <ion-title>Modal Content</ion-title>
                <ion-buttons slot="end">
                  <ion-button onclick="dismissModal()">Close</ion-button>
                </ion-buttons>
              </ion-toolbar>
            </ion-header>
            <ion-content fullscreen>
              <ion-list>
                <ion-item>
                  <ion-avatar slot="start">
                    <ion-img src="./avatar-gollum.jpg"/>
                  </ion-avatar>
                  <ion-label>
                    <h2>Gollum</h2>
                    <p>Sneaky little hobbitses!</p>
                  </ion-label>
                </ion-item>
                <ion-item>
                  <ion-avatar slot="start">
                    <ion-img src="./avatar-frodo.jpg"/>
                  </ion-avatar>
                  <ion-label>
                    <h2>Frodo</h2>
                    <p>Go back, Sam! I'm going to Mordor alone!</p>
                  </ion-label>
                </ion-item>
                <ion-item>
                  <ion-avatar slot="start">
                    <ion-img src="./avatar-samwise.jpg"/>
                  </ion-avatar>
                  <ion-label>
                    <h2>Samwise</h2>
                    <p>What we need is a few good taters.</p>
                  </ion-label>
                </ion-item>
              </ion-list>
            </ion-content>
          `;
        }
      });
  
      let currentModal = null;
      const button = document.querySelector('#showmodal');
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
          currentModal.dismiss().then(() => { currentModal = null; });
        }
      }
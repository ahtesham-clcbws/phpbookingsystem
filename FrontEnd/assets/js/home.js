
    let currentPopover2 = null;

    const buttons = document.querySelectorAll('ion-input[name="select-guests"]');
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
          <ion-list>
            <ion-list-header>Ionic</ion-list-header>
            <ion-item button>Learn Ionic</ion-item>
            <ion-item button>Documentation</ion-item>
            <ion-item button>Showcase</ion-item>
            <ion-item button>GitHub Repo</ion-item>
            <ion-item lines="none" detail="false" button onClick="dismissPopover()">Close</ion-item>
          </ion-list>
        `;
      }
	});
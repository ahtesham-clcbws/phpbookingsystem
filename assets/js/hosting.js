function setActive() {
	linkObj = document.getElementById('accountTopNav').getElementsByTagName('ion-button');
	for (i = 0; i < linkObj.length; i++) {
		if (document.location.href.indexOf(linkObj[i].href) >= 0) {
			linkObj[i].classList.add("is-active");
		}
	}
}
window.onload = setActive;



function openFirst() {
    menuController.enable(true, 'first');
    menuController.open('first');
  }
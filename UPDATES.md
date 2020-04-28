# UPDATES

> April 29 2020:-
* Hosting dashboard path change to (/hosting)
* Added calendar (fullcalendar.io) at (/hosting/calendar)
* Seperate hosting and main styles. scripts, header, footer and Menu.

> April 28 2020:-
* Hosting Dashboard Added
* Hosting dashboard access (/account/hosting)
* Convert flatpickr calender from jQuery to VanillaJS.

* FrontEnd user login modal.
* FrontEnd user login process done with API.
* FrontEnd navbar buttons turns conditional.
* FrontEnd login modal and functions only loaded in backend if not logged in.
* FrontEnd screenshot updated.
* FrontEnd script and styles loads conditionaly:-
    * Some scripts and style loaded only for non-logged-in users.
    * Some scripts and style loaded only for logged-in users.
    * Some scripts and style only loaded for if user is a host.


* > IN PROGRESS
    * Hosting Dashboard
    * Host profile setup
    * Host add place form
    * Host Reservations
    * Host Calendar
    * Host Listings
    * Host Statistics


> April 27 2020:-
* Hosting place form added at (/account/hostplace)
    * Start php server and see it in action (localhost/account/hostplace)
* Minimum 20 steps needed on Hosting form.
* Every step need to validate before going to next step.
* Form validation will be done lastly.
* Fist step complete.
* Second in progress.

* Removed Plugins (es6, jquery, momentjs).
* Removed unused code from css (ionic.bundle.css).
* Minify CSS & JS (ionic.bundle.min.css, ionic.js, swiper.js, swiper.bundle.js)
* Removed global style & script of flatpickr calender
* Include flatpickr only with home for now.

* Include [.htaccess](./.htaccess) for code optimizations.
* Include one php [Optimizer.php](./core/private/Optimizer.php) file in core for whitespace optimization
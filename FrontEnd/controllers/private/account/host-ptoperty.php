<?php

// $data = getPlacesList($api);

require 'views/global/header.view.php';
require 'views/private/host/addplace.view.php';
require 'views/global/footer.view.php';
?>
<style>
    /* Hide all steps by default: */
    .tab {
        display: none;
    }
</style>
<script>
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
</script>
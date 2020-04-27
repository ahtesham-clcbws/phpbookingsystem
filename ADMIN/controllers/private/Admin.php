<?php

if (!isset($_SESSION['login'])) {
    echo '<script>window.location="/login";</script>';
}
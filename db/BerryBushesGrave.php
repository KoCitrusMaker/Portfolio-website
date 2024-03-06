<?php
require_once 'includes/header.php';
?>

<?php

    if (isset($_SESSION['sessionId'])) {
        echo 'You found a book of some sorts, open it?';
        echo '<p><a href="diary.php">Y</a>/<a href="LEAVE.php">N</a></p>';
        
    } else {
        echo '<h1 align="center">Leave</h1>';
    }

?>

<?php
require_once 'includes/footer.php';
?>


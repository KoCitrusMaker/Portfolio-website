<?php
require_once 'includes/header.php';
?>

<div>
    

    <form action="includes/register-inc.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <input type="password" name="confirmPassword" placeholder="Confirm password">
        <button type="submit" name="submit">REGISTRER</button>
    </form>
</div>

<?php
require_once 'includes/footer.php';
?>


<?php require_once "../config.php"; ?>
<!DOCTYPE html>
<html>

<head>
    <?php require_once SITEROOT."/templates/top.php"; ?>
</head>

<body>

    <?php require_once SITEROOT."/templates/top_menu.php"; ?>

    <!--// Page title -->
    <h3>Not Authorized</h3>

    <div class="well well-lg">
            <p style="color:red">You are not authorized to view that content.</p>
        <ul>
            <li>Try to <a href="./sign_in.php">Sign in</a> if you already have an account;</li>
            <li>or <a href="./sign_up.php">Sign up</a> if this is your first visit.</li>
        </ul>
    </div>

    <?php require_once SITEROOT."/templates/bottom.php"; ?>

</body>
</html>
<?php

session_start();


?>

<body>
    <form action="t.php" method="post">
        <input type="text" name="email" id="email">
        <p><?php echo isset($_SESSION['error_email']) ?  $_SESSION['error_email'] : '';
            unset($_SESSION['error_email']) ?> </p>
        <button name="submit" type="submit">submit</button>
    </form>
</body>
<?php
session_start();
session_unset();
session_destroy();
header("Location: /real-estate-app/templates/login.php");
exit();
?>

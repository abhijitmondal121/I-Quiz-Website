<?php
session_start();
echo"logging you out please wait";
session_destroy();
header("Location:/all_quiz/index.php");
?>

<?php
session_start();
session_destroy();
echo ("Deslogando...");
echo ('<meta http-equiv="refresh" content="1; url=index.php">');
?>
<?php
unset($_SESSION['userid']);
session_destroy();
header('Refresh: 0; URL = index.php?site=loginbs');
?>
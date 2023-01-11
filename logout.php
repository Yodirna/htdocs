<?php

unset($_SESSION['userid']);
session_destroy();
$message = 'Successfully logged out.';
echo "<script>alert('$message')</script>"; 
echo "<meta http-equiv='refresh' content='0; URL=http://localhost/index.php'>"
?>
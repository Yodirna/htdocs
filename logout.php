<?php
unset($_SESSION['userid']);
session_destroy();
$message = 'Successfully logged out.';
echo "<script>alert('$message')</script>"; 
?>
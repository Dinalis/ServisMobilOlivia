<?php 
session_start();
session_unset();
/*session_unset($_SESSION['nama']);
session_unset($_SESSION['id']);
session_unset($_SESSION['level']);
print_r($_SESSION['login_username']);*/
?>
<script>
document.location.href= "index.php";
</script>
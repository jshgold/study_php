<?php
unlink("data/".$_POST['id']);
header("Location:  /home.php");
?>
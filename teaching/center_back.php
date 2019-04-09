<?php
session_start();
session_destroy();
echo "<script>window.parent.location.href='home.html'</script>";
?>
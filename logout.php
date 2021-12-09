<?php
session_start();
include('config.php');
session_destroy();
echo "<script>
alert('User Logged Out');
window.location = 'index.php'
</script>"
?>
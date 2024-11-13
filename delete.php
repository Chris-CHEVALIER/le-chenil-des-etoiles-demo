<?php
require("header.php");
$dogController->delete($_GET["id"]);
echo "<script>window.location.href='./index.php'</script>";

<?php
include_once "attributes.php";
$object = new attribute();
$object->delete($_GET["ID"]);
header('location:attribute.php');
?>
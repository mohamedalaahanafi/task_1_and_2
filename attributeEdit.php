<?php
include_once "attributes.php";
$object = new attribute();
$object->update($_GET["ID"],$_POST["attributeName"],$_POST["attributeDType"]);
header('location:attribute.php');
?>
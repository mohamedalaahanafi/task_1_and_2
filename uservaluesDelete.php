<?php
include_once "userValuesClass.php";
$object = new userVal();
$object->delete($_GET["ID"]);

header('location:uservalues.php');

?>
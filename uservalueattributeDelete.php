<?php
include_once "userTypeAttrClass.php";
$object = new userTypeAttr();
$object->DELETE($_GET["ID"],);

header('location:uservalueattribute.php');

?>
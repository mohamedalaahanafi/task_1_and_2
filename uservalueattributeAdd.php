<?php
include_once "userTypeAttrClass.php";
$object = new userTypeAttr();
$object->add($_POST["typeId"],$_POST["attributeId"]);
echo $_POST["typeId"],$_POST["attributeId"];
header('location:uservalueattribute.php');

?>
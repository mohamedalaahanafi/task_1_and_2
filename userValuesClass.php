<?php 
/**
  * 
  */
 class userVal
 {
 	
 	static function add($attrId,$value,$userid)
 	{	$connect= new mysqli("localhost", "root", "", "se");
 		$sql="INSERT INTO uservalues (`uniqueUserAttributeID`,`value`,`userID`) VALUES ('$attrId','$value','$userid') ";
 		$result = mysqli_query($connect, $sql);
 		echo $sql;

 	}
 	function delete($id){
 		$connect= new mysqli("localhost", "root", "", "se");
 		$sql="DELETE FROM uservalues where ID=".$id;
 		$result = mysqli_query($connect, $sql);
 		echo "delete done";

 	}
 	function read($id){
 		$connect= new mysqli("localhost", "root", "", "se");
 		$sql="SELECT * FROM uservalues where userID=".$id;
 		$result = mysqli_query($connect, $sql);
 		 while($Row = mysqli_fetch_array($result))
	{
		echo $Row['value']."<br>";
 	}}
 	function update($id,$attrid,$value){

 		$connect= new mysqli("localhost", "root", "", "se");
 		$sql="UPDATE uservalues SET uniqueUserAttributeID='$attrid',value='$value' WHERE ID=".$id;
 		$result = mysqli_query($connect, $sql);
 		echo "update done";
 	}
 } ?>
<?php 

class userTypeAttr
 {
 	
 	function add($typeID,$attrID)
 	{	$connect= new mysqli("localhost", "root", "", "se");

 		$sql="INSERT INTO usertypeattributes(userTypeID, attributeID) VALUES ('$typeID','$attrID') ";
 		$result = mysqli_query($connect, $sql);
 		echo $sql;

 	}

 	//DELETE BY ROW ID
 	function delete($id){
 		$connect= new mysqli("localhost", "root", "", "se");
 		$sql="DELETE FROM usertypeattributes where ID=".$id;
 		$result = mysqli_query($connect, $sql);
 		echo "delete done";

 	}
 	//READ BY TYPE ID
 	function read($id){
 		$connect= new mysqli("localhost", "root", "", "se");
 		$sql="SELECT * FROM usertypeattributes where userTypeID=".$id;
 		$result = mysqli_query($connect, $sql);
 		 while($Row = mysqli_fetch_array($result))
	{
		echo $Row['attributeID']."<br>";
 	}}
 	//UPDATE BY ROW ID
 	function update($id,$typeid,$attrid){

 		$connect= new mysqli("localhost", "root", "", "se");
 		$sql="UPDATE usertypeattributes SET userTypeID='$typeid',attributeID=$attrid WHERE ID=".$id;
 		$result = mysqli_query($connect, $sql);
 		echo "update done";
 	}
 }
 ?>
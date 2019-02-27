<?php 


/**
  * 
  */
 class attribute
 {

 	
 	static function add($name,$type)
 	{	$connect= new mysqli("localhost", "root", "", "se");
 		$sql="INSERT INTO attribute (attributeName, type) VALUES ('$name', '$type') ";
 		$result = mysqli_query($connect, $sql);
 		echo "insert done";
 }
 	function delete($id){
 		$connect= new mysqli("localhost", "root", "", "se");
 		$sql="DELETE FROM attribute where ID=".$id;
 		$result = mysqli_query($connect, $sql);
 		echo $sql;

 	}
 	function read(){
 		$connect= new mysqli("localhost", "root", "", "se");
 		$sql="SELECT * FROM attribute";
 		$result = mysqli_query($connect, $sql);
 		 while($Row = mysqli_fetch_array($result))
	{
		echo $Row['attributeName']."<br>";
 	}}
 	function update($id,$name,$type){

 		$connect= new mysqli("localhost", "root", "", "se");
 		$sql="UPDATE attribute SET attributeName='$name',type='$type' WHERE ID=".$id;
 		$result = mysqli_query($connect, $sql);
 		echo "update done";
 	}
  }?>
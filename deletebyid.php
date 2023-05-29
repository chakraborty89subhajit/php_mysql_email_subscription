<?php
include 'db.php';

if(isset($_GET['id'])){
$id=$_GET['id'];
	echo "user id=".$id;

$stmt=$db->prepare("delete from userinfo where id=".$id);
if($stmt->execute()){
	echo "user deleted successfully<br>";
}else{

	echo "record can not be deleted<br>";
}
?>
                      <a href="deleteuser.php">back to userlist</a>";
                     <?php

}
else{
	echo"can not recive user id<br>";
}
?>
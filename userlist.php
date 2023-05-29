<?php

include'db.php';

//get the data from userlist.html
if(isset($_POST['submit'])){
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email=$_POST['email'];

//echo $first_name." ".$last_name." ".$email."<br>";
try{
$stmt=$db->prepare("insert into userinfo(first_name,last_name,email) values(?,?,?)");
$stmt->bindparam(1,$first_name);
$stmt->bindparam(2,$last_name);
$stmt->bindparam(3,$email);

if($stmt->execute()){
echo "user added successfully<br>";

}else{
	echo "unable to add user<br>";
}
}catch(Exception $e){

	echo $e->getMessage();
}
}else{
	echo "problem in submission<br>";
}


?>
<?php
include 'db.php';
?>
<p>pls. select the email address that you want to delete<br></p>
<form method="post" action="<?php $_SERVER['PHP_SELF']?>">

<?php



$stmt=$db->prepare("select * from userinfo");
$result=$stmt->execute();
while($row=$stmt->fetch()){

	?>

		<table border="1"> 
             		<tr>
             			<td><?php if(isset($row['id'])){print($row['id']);}?></td>
             			<td><?php if(isset($row['first_name'])){print($row['first_name']);}?></td>
             			<td><?php if(isset($row['last_name'])){print($row['last_name']);}?></td>
             			<td><?php if(isset($row['email'])){print($row['email']);}?></td>
             			<td><a href="">modify</a></td>
             			<td><a href="deletebyid.php?id=<?php echo $row['id'];?>">delete</a></td>
             		</tr>

                   
         </table>

	<?php
	
/
}

?>
<input type="submit" name="submit" value="remove"/>
</form>
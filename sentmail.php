<?php
include 'db.php';

//get data form html

$subject=$_POST['subject_of_email'];
$body=$_POST['body_of_email'];
$output_form= false;
//echo $subject." ".$body."<br>";
$to="belinosagro@gmail.com";
$from="chakraborty.subhajit89@gmail.com";


if(empty($subject) && empty($body)){
	echo"you forget to enter email body and subject<br>";
	$output_form= true;
}
elseif(!empty($subject) && empty($body)){
	echo"you forget to enter email body<br>";
	$output_form=true;
}
elseif(empty($subject) && !empty($body)){
	echo"you forget to enter email subject<br>";
	$output_form=true;
}
else{

$mail=mail($to, $subject, $body);

echo"<pre>";
print_r($mail);
	if($mail){
		echo"success<br>";
		echo"send another email<br>";
		include 'sendmail.html';
}
	else{
		echo"failed to send email<br>";
		echo"try again<br>";
		include'sendmail.html';
	}
}
if($output_form){
	//include 'sendmail.html';
	?>
	<head></head>
<body>
	<div>

          <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                <table border="1">
                	<tr>
                		<td>subject of email:</td>
                		<td><input type="text" name="subject_of_email" size="60" value="<?php echo $subject ?>" /></td>
                	</tr>
                	
                	<tr>
                		<td>body of email:</td>
                		<td><textarea name="body_of_email" rows="8" cols="80" ><?php echo $body ?></textarea></td>
                	</tr>
                	<tr>
                		
                		<td><button type="submit" name="submit" value="submit">submit</button></td>
                	</tr>
                </table>
          </form>
		</div>
</body>


	<?php
}
?>
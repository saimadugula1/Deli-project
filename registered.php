<html>
<body>
<?php 
		$link = mysqli_connect('localhost','root', '', 'gardenmini'  );
			if (!$link) {
				die('Connect Error (' . mysqli_connect_errno() . ') '
				. mysqli_connect_error());
				}
			echo 'Success... ' . mysqli_get_host_info($link) . "\n";
		?>
		<p>
		<?php
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$username=$_POST['username'];
		$mail=$_POST['mail'];
		$repd=$_POST['repd'];
		$bdaytime=$_POST['bdaytime'];
			$sql = "INSERT INTO signup (firstName, lastName, username,mail,repd,bdaytime )
			VALUES ('{$firstname}', '{$lastname}', '{$username}', '{$mail}','{$repd}','{$bdaytime}')";
			//echo $sql;
			if($result = mysqli_query($link, $sql)){
			echo "Kishore is very bad boy ";
}
mysqli_close($link);
?>

</body>
</html> 
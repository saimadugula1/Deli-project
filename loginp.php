<html>
<head>
<style>
p {
	 color:red;
	 text-align:center;
	 font-size:550%;
}
</style>
</head>
<body>


<?php 
		$link = mysqli_connect('localhost','root', '', 'gardenmini'  );
			if (!$link) {
				die('Connect Error (' . mysqli_connect_errno() . ') '
				. mysqli_connect_error());
				}
			
		?>
		<p>
		<?php
		
		$mail=$_POST['mail'];
		$repd=$_POST['repd'];
		
			
			$one=mysqli_query($link,"Select * from signup where mail='$mail' and repd='$repd'");
			$result=mysqli_num_rows($one);
			if($result==0)
			{
				echo "<a href=login.html> Entered Email and Password is not correct ,please click here to login with correct usernama ena ansd </a>";
			}
			else {
				echo "matched";
			
               }
mysqli_close($link);
?>

</body>
</html> 
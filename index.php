<?php 

	$conexion=mysqli_connect('localhost','root','','tecmedia');

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>mostrar datos</title>
</head>
<body>

<br>

	<table border="1" >
		<tr>
			<td>serie</td>
			<td>temp</td>
				
		</tr>

		<?php 
		$sql="SELECT * from datos";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['serie'] ?></td>
			<td><?php echo $mostrar['temperatura'] ?></td>
			
		</tr>
	<?php 
	}
	 ?>
	</table>

</body>
</html>
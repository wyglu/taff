<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>


<table border="1" cellspacing="0" width="700" align="center">
	<tr align="center" style="background-color: blue;color: white;">
		<td>ID</td><td>NOM</td><td>PRENOM</td><td>SEXE</td><td>DATE</td><td>EMAIL</td><td>DIPLOME</td><td>PHOTO</td><td>ATTESTATION DE BAC</td>
	</tr>

<?php 

$connection =new PDO("mysql:host=localhost;dbname=correctionasur","root","");


$recup=$connection->query("SELECT * FROM etudiant");

   


while ($trouve=$recup->fetch()) {


	 ?>
	  <tr align="center">
		<td><?php echo $trouve['id'];?></td><td><?php echo $trouve['nom'];?></td><td><?php echo $trouve['prenom'];?></td><td><?php echo $trouve['sexe'];?></td><td><?php echo $trouve['date'];?></td><td><?php echo $trouve['email'];?></td><td><?php echo $trouve['diplome'];?></td> <td> <img src="photo/<?php echo $trouve['photo'] ?>" width="50" height="50"> </td> <td><iframe src="pdf/<?php echo $trouve['pdf'] ?>"></iframe></td>
		</tr>

<?php 

}




 ?>
		
</table>
</body>
</html>
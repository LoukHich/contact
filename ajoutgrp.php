<?php 
$objetPDO=new PDO('mysql:host=localhost;dbname=contact','root','');
$PDOstat=$objetPDO->prepare('SELECT * FROM groupe ORDER BY name ASC');
$executeisok=$PDOstat->execute();
$groupes=$PDOstat->fetchAll();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>document</title>
<link
	href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css"
	rel="stylesheet"
	integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0"
	crossorigin="anonymous">
	<style>
	table, th, td {
  border: 1px solid black;
  border-collapse: collapse;}
</style>
</head>
<body>
<h1>Liste des contactes</h1>
<?php if(isset($_GET['success'])){ ?>
<p style="color:green;font-weight:700;font-size:20px">Utilisateur ajoute au groupe avec succes</p>
<?php }?>
<table class="table table-striped">
<tr><th>photo</th><th>name</th><th>action</th>

<?php 
foreach($groupes as $groupe){?>


<tr><td>
<img src="uploadimg/<?= $groupe['icon']?>" width=100px height=100px/></td> <td><?= $groupe['name']?></td><td><a href="ajoute.php?idgrp=<?= $groupe['id']?>&iduser=<?=$_GET['id'] ?>">ajouter</a></tr>
<?php }?>
</table>

</body>
</html>

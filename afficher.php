<?php 
$objetPDO=new PDO('mysql:host=localhost;dbname=contact','root','');
$PDOstat=$objetPDO->prepare('SELECT*FROM contact ORDER BY firstName ASC');
$executeisok=$PDOstat->execute();
$contacts=$PDOstat->fetchall();
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
<table class="table table-striped">

<tr><th>photo</th><th>firstname</th><th>lastname</th><th>number phone 1</th><th>number phone 2</th><th>adress</th><th>personal mail</th><th>professionnal mail</th><th>gender</th><th>supprimer</th><th>modifier</th><th colspan="2" style="text-align: center">Groupes</th></tr>

<?php 
foreach($contacts as $contact):?>


<tr><td>
<img src="uploadimg/<?= $contact['photo']?>" width=100px height=100px/></td>
<td><?= $contact['firstName']?></td><td> <?= $contact['lastName']?></td><td><?= $contact['phone1']?></td><td><?= $contact['phone2']?></td><td><?= $contact['adress']?></td><td><?= $contact['perEmail']?></td><td><?= $contact['proEmail']?></td><td><?= $contact['gender']?></td>
<td><a href="supprimer.php?id=<?= $contact['id']?>">delete</a></td><td><a href="listemodifier.php?id=<?= $contact['id']?>">modifier</a></td><td><a href="ajoutgrp.php?id=<?= $contact['id']?>">ajouter au groupe</a><td><a href="voirgrp.php?id=<?= $contact['id']?>">voir le groupe</a></tr>
<?php endforeach ;?>

<table class="table table-striped">


<a href="MENU.php">page precedente</a>
</body>
</html>








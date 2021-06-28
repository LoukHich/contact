<?php
$objetPDO=new PDO('mysql:host=localhost;dbname=contact','root','');
$PDOstat=$objetPDO->prepare('DELETE FROM contact WHERE id=:id LIMIT 1');
$PDOstat->bindvalue(':id',$_GET['id'],PDO::PARAM_INT);
$executeisok=$PDOstat->execute();
if($executeisok)
{$message ='le contact a ete suppreme avec succes';
}else{$message='echec de suppression';}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Application de gestion des contactes</title>
<link
	href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css"
	rel="stylesheet"
	integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0"
	crossorigin="anonymous">

</head>
<body>
<h1>suppression des contactes </h1>
<p><?= $message  ?> </p>
<a href="afficher.php">page precedente</a>
</body>
</html>

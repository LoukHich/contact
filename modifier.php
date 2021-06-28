<?php
$objetPDO=new PDO('mysql:host=localhost;dbname=contact','root','');
if ($_FILES['avatar']['name']!="") {
   
$PDOstat=$objetPDO->prepare('UPDATE contact SET firstName=:nom,lastName=:prenom,photo=:photo,phone1=:tel1,phone2=:tel2,adress=:adresse,perEmail=:emailper,proEmail=:emailpro,gender=:genre where id=:id');
$nomPhoto="default.png";

    $errors = array();
    $file_name = $_FILES['avatar']['name'];
    $file_size = $_FILES['avatar']['size'];
    $file_tmp = $_FILES['avatar']['tmp_name'];
    $file_type = $_FILES['avatar']['type'];
    
    $ext = explode('.', $file_name);
    $file_ext = strtolower(end($ext));
    $extensions = array("jpeg", "jpg", "png");
    
    if (in_array($file_ext, $extensions) === false) {
        $errors[] = "Cette extension n'est pas supportee.Veuillez choisir les extensions jpeg/jpg/png";
        
    }
    
    if ($file_size > 2097152) {
        $errors[] = 'Le fichier ne doit pas depasser 2M';
    }
    
    if (empty($errors) == true) {
        $newfilename = round(microtime(true)) . '.' . $file_ext;
        $nomPhoto=$newfilename;
        move_uploaded_file($file_tmp, "uploadimg/" . $newfilename);
        echo "Operation reussie";
    } else {
        print_r($errors);
    }

$PDOstat->bindvalue(':id',$_POST['id'],PDO::PARAM_STR);
$PDOstat->bindvalue(':nom',$_POST['nom'],PDO::PARAM_STR);
$PDOstat->bindvalue(':prenom',$_POST['prenom'],PDO::PARAM_STR);
$PDOstat->bindvalue(':photo',$nomPhoto,PDO::PARAM_STR);
$PDOstat->bindvalue(':tel1',$_POST['phone1'],PDO::PARAM_STR);
$PDOstat->bindvalue(':tel2',$_POST['phone2'],PDO::PARAM_STR);
$PDOstat->bindvalue(':adresse',$_POST['adresse'],PDO::PARAM_STR);
$PDOstat->bindvalue(':emailper',$_POST['emailPer'],PDO::PARAM_STR);
$PDOstat->bindvalue(':emailpro',$_POST['emailPro'],PDO::PARAM_STR);
$PDOstat->bindvalue(':genre',$_POST['sexe'],PDO::PARAM_STR);
$executeisok= $PDOstat->execute();
if($executeisok)
{$message ='le contact a ete modifie avec succes';
}else{$message='echec de modification';
}
}
else{

  $PDOstat = $objetPDO->prepare('UPDATE contact SET firstName=:nom,lastName=:prenom,phone1=:tel1,phone2=:tel2,adress=:adresse,perEmail=:emailper,proEmail=:emailpro,gender=:genre where id=:id');

  $PDOstat->bindvalue(':id', $_POST['id'], PDO::PARAM_STR);
  $PDOstat->bindvalue(':nom', $_POST['nom'], PDO::PARAM_STR);
  $PDOstat->bindvalue(':prenom', $_POST['prenom'], PDO::PARAM_STR);
  $PDOstat->bindvalue(':tel1', $_POST['phone1'], PDO::PARAM_STR);
  $PDOstat->bindvalue(':tel2', $_POST['phone2'], PDO::PARAM_STR);
  $PDOstat->bindvalue(':adresse', $_POST['adresse'], PDO::PARAM_STR);
  $PDOstat->bindvalue(':emailper', $_POST['emailPer'], PDO::PARAM_STR);
  $PDOstat->bindvalue(':emailpro', $_POST['emailPro'], PDO::PARAM_STR);
  $PDOstat->bindvalue(':genre', $_POST['sexe'], PDO::PARAM_STR);
  $executeisok = $PDOstat->execute();

  if ($executeisok) {

    $message = 'le contact a ete modifie avec succes';
    
  } else {
    $message = 'echec de modification';
  }



}?>
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
<h1>Modification des contactes </h1>
<p><?= $message  ?> </p>
<a href="afficher.php">la liste des contactes</a><br>
<a href="MENU.php">page principale</a>
</body>
</html>


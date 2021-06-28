<?php 

$objetPDO=new PDO('mysql:host=localhost;dbname=contact','root','');
$PDOstat=$objetPDO->prepare('INSERT INTO groupe(name,icon) VALUES(:name,:photo)');
 $nomPhoto="default.png";
if (isset($_FILES['avatar'])) {
            $errors = array();
            $file_name = $_FILES['image']['name'];
            $file_size = $_FILES['image']['size'];
            $file_tmp = $_FILES['image']['tmp_name'];
            $file_type = $_FILES['image']['type'];

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
        } 
$PDOstat->bindvalue(':name',$_POST['name'],PDO::PARAM_STR);
$PDOstat->bindvalue(':photo',$nomPhoto,PDO::PARAM_STR);
$insertisok= $PDOstat->execute();
if($insertisok)
{$message ='le groupe est cree';
}else{$message='echec de creation';}
        ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Application de gestion des contactes et groupes</title>
<link
	href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css"
	rel="stylesheet"
	integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0"
	crossorigin="anonymous">

</head>
<body>
<h1>creation de groupe </h1>
<p><?php  echo $message; ?><a href="afficher.php"> afficher liste des contactes</a> </p>
</body>
</html>
	
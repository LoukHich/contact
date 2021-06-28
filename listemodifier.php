<?php 

$objetPDO=new PDO('mysql:host=localhost;dbname=contact','root','');
$PDOstat=$objetPDO->prepare('SELECT * FROM contact where id=:num');
$PDOstat->bindvalue(':num',$_GET['id'],PDO::PARAM_INT);
$executeisok=$PDOstat->execute();
$contact=$PDOstat->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <title>Devoir Libre</title>
    <style> body
    {background-image: url(https://i.pinimg.com/originals/2b/2f/9c/2b2f9cea8b94babdbc522b3428536781.jpg);
    position:center;}
    h2{color:purple;
    font-family:lyrics;}
    input{background-color:pink;}
    </style>
</head>
<body>

<h2 style="color:red:center">modify a contact:</h2>
<form action="modifier.php" method="post" enctype="multipart/form-data">
<div class="form-group">
<input type="hidden" name="id" value="<?= $_GET['id'] ?>">
</div>
<div class="form-group">
  <label>last name</label>
  <input type="text" class="form-control" name="nom" placeholder="Entrer votre Nom" value="<?= $contact['firstName']?>" style="width: 350px;" required>
  <br>
</div>

<div class="form-group">
  <label>first name</label>
  <input type="text" class="form-control" name="prenom" placeholder="Entrer votre Prenom" value="<?= $contact['lastName']?>" style="width: 350px;" required>
  <br>
</div>

<div class="form-group">
  <label>Photo</label>
  <input type="file" class="form-control" name="image" accept="image*/" placeholder="choose a photo"  style="width: 350px;">
  <br>
</div>

<div class="form-group">
  <label>number ephone 1</label>
  <input type="tel" class="form-control" name="phone1" placeholder="Enter your number phone 1" value="<?= $contact['phone1']?>" style="width: 350px;" required>
  <br>
</div>

<div class="form-group">
  <label>number phone 2</label>
  <input type="tel" class="form-control" name="phone2" placeholder="Enter your number phone 2" value="<?= $contact['phone2']?>" style="width: 350px;" required>
  <br>
</div>

<div class="form-group">
  <label>Adress</label>
  <input type="text" class="form-control" name="adresse" placeholder="enter your address" value="<?= $contact['adress']?>" style="width: 350px;" required>
  <br>
</div>

<div class="form-group">
  <label>personal Email </label>
  <input type="email" class="form-control" name="emailPer" placeholder="Enter personel Email " value="<?= $contact['perEmail']?>" style="width: 350px;" required>
  <br>
</div>

<div class="form-group">
  <label>professional Email </label>
  <input type="email" class="form-control" name="emailPro" placeholder="Enter professional Email " value="<?= $contact['proEmail']?>" style="width: 350px;" required>
  <br>
</div>

<label>Gender</label>
<div class="form-group">
  <input type="radio" id="man" name="sexe" value="man">
  <label for="man">man</label>
  <input type="radio" id="woman" name="sexe" value="woman">
  <label for="woman">woman</label>
  <br>
</div>

<button type="submit" class="btn btn-primary">modify</button>
<button type="reset" class="btn btn-secondary">delete</button>
</form>
</body>
</html>
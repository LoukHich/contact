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
    {background: linear-gradient(#e66465, #9198e5););
    position:center;}
   
    font-family:lyrics;}
   
    </style>
</head>
<body>

<h2 style="color:red:center">Add a contact:</h2>
<form action="creergrp.php" method="POST" enctype="multipart/form-data">

<div class="form-group">
  <label>group name</label>
  <input type="text" class="form-control" name="name" placeholder="Entrer le nom du groupe" style="width: 350px;" required>
  <br>
</div>

<div class="form-group">
  <label>Photo</label>
  <input type="file" class="form-control" name="image" accept="image*/" placeholder="choose a photo" style="width: 350px;" >
  <br>
</div>
<button type="submit" class="btn btn-primary">Validate</button>
<button type="reset" class="btn btn-secondary">delete</button>
</form>
</body>
</html>
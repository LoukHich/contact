
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;

background-color:lightgrey;
}

.navbar {
  width: 100%;
  background-color: blue;
  overflow: auto;
}

.navbar a {
  float: left;
  padding: 12px;
  color: white;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background-color: #000;
}

.active {
  background-color: red;
}

@media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    display: block;
  }
}
</style>
<body>
<div class="navbar">
  <a class="active" href="afficher.php"><i class="fa fa-fw fa-home"></i> Home contact</a> 
  <a href="listrechercher.php">rechercher contact</a> 
  <a href="form.php"> creer Contact</a> 
  <a href="listegrp.php"> creer groupe</a>
  <a href="listrechercher.php">rechercher groupe</a> 

</div>
</body>
</html> 
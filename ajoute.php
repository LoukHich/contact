<?php 
$objetPDO=new PDO('mysql:host=localhost;dbname=contact','root','');
$PDOstat=$objetPDO->prepare('INSERT INTO groupecontact(idgrp,idcontact) VALUES(:id1,:id2)');
$id1=$_GET['idgrp'];
$id2=$_GET['iduser'];
if($PDOstat->execute(array(
    'id1'=>$id1,
    'id2'=>$id2
)))
{
    header("location:ajoutgrp.php?id=$id2 &success=1");
}
?>
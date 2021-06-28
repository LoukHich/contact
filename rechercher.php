<?php
$objetPDO=new PDO('mysql:host=localhost;dbname=contact','root','');
$PDOstat=$objetPDO->prepare('SELECT * FROM contact  where firstName=:query || phone1=:query || phone2=:query ');
$PDOstat->bindvalue(':query',$_POST['query'],PDO::PARAM_INT);
$executeisok=$PDOstat->execute();

$contacts=$PDOstat->fetchAll();


//Enregistrer les donnees dans la base de donnees :

if(!empty($contacts)){
    echo" <table border=1px>
    <tr>
    <th>firstName</th>
    <th>lastName</th>
    <th>phone number 1</th>
    <th>phone number 2</th>
    <th>Adress</th>
    <th>PersonalEmail </th>
    <th>prefessionnal Email </th>
    <th>gender</th>
    </tr>";
    foreach($contacts as $contact)
    {
        echo'<tr><td>' . $contact['firstName'] . '</td><td>' . $contact['lastName']  . '</td><td>'  . $contact['phone1'] . '</td><td>'  . $contact['phone2'] . '</td><td>' . $contact['adress'] .'</td><td>'. $contact['perEmail']  .'</td><td>'. $contact['proEmail'] .'</td><td>'. $contact['gender'] . '</td></tr>';
    }
    
    echo"</table>";
    
}
else
    echo "NO CONTACT FOUNDED";
?>
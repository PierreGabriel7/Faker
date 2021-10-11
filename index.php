<?php

require_once "./vendor/autoload.php";


use ISL\Manager\PersonneManager;
use ISL\Entity\Personne;



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Liste Personnes</title>
</head>

<body>

    <table class="table">
        <thead>
            <tr>
                <th>Prenom</th>
                <th>Adresse</th>
                <th>Pays</th>
                <th>Societe</th>
                <th>Code postal</th>
            </tr>
        </thead>

        <tbody>
            <?php


                $persons = PersonneManager::create(15);
                foreach($persons as $Key => $val){
                    echo "<tr>";
                    foreach($val as $value){
                        echo "<td>".$value."</td>";
                    }
                    echo "</tr>";
                }
                $connexion = new PDO('mysql:host=localhost;dbname=poo_php', 'root', '');
                $topush=new PersonneManager($connexion);
                $topush->push();

            ?>
        </tbody>
    </table>

</body>

</html>
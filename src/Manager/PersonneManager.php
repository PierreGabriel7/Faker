<?php

namespace ISL\Manager;
use ISL\Entity\Personne;
use Faker\Factory;

class PersonneManager {
    public $faker;

    function __construct(){
       $this-> faker= Factory::create();
    }

    function showPersonne($nbre){
        $personneListe=[];

        for ($i = 0; $i <= $nbre-1; $i++) {
            $personne=new Personne($this-> faker->name, $this-> faker->address, $this-> faker->country, $this-> faker->company, $this-> faker->postcode);

            echo "<tr>";
            echo "<td>".$personne->getPrenom()."</td>";
            echo "<td>".$personne->getAdresse()."</td>";
            echo "<td>".$personne->getPays()."</td>";
            echo "<td>".$personne->getCp()."</td>";
            echo "<td>".$personne->getSociete()."</td>";
            echo "</tr>";
        }
    }
}

?>
<?php

namespace ISL\Manager;
use ISL\Entity\Personne;
use Faker\Factory;

class PersonneManager {
    public $faker;



    static function create($nbre){
        $faker= Factory::create();
        $personneArray= [];

        for ($i = 0; $i <= $nbre-1; $i++) {
            $singlePersonne= [];
            array_push($singlePersonne, $faker->name, $faker->address, $faker->country, $faker->company, $faker->postcode);
            array_push($personneArray, $singlePersonne);
        }
        
        return $personneArray;        

    }
}
?>

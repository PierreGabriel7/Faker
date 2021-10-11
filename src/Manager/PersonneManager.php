<?php

namespace ISL\Manager;

use ISL\Entity\Personne;
use Faker\Factory;

class PersonneManager
{
    private $faker = [];
    private $db;

    function __construct($db)
    {
        $this->setDB($db);
    }

    public function push()
    {
        // // Create our SQL query.
        // $data = [
        //     ["oui", "oudddi", "ouddi", "osqdui", "ouqsdsqdi"],
        // ];
        // $sql = "INSERT INTO
        //  `address` (name, adress, country, postcode, company) VALUES(?, ?, ?, ?, ?)";

        // // Prepare Statement.
        // $stmt = $this->getDB()->prepare($sql);

        // // Execute.

        // try {
        //     $this->db = beginTransaction();
        //     foreach ($data as $row) {
        //         $stmt->execute($row);
        //     }
        //     $pdo->commit();
        // } catch (Exception $e) {
        //     $pdo->rollback();
        //     throw $e;
        // }


        $rows = array(
            array('abc', 'def', 'ghsi','dessdff', 'gsdfhi'),
        );

        $row_length = count($rows[0]);
        $nb_rows = count($rows);
        $length = $nb_rows * $row_length;

        /* Fill in chunks with '?' and separate them by group of $row_length */
        $args = implode(',', array_map(
            function ($el) {
                return '(' . implode(',', $el) . ')';
            },
            array_chunk(array_fill(0, $length, '?'), $row_length)
        ));

        $params = array();
        foreach ($rows as $row) {
            foreach ($row as $value) {
                $params[] = $value;
            }
        }

        $query = "INSERT INTO address (name, adress, country, postcode, company) VALUES " . $args;
        $stmt = $this->getDB()->prepare($query);
        $stmt->execute($params);


        //$stmt -> execute(array($obj -> getPrenom(), $obj -> getAdresse(), $obj-> getPays(), $obj -> getCp(), $obj -> getSociete()));
        //$stmt -> execute(array());
        //$stmt -> execute(array("ooudddioudddiui", "ouddoudddioudddidi", "ououdddioudddiddi", "ooudddioudddisqdui", "ouqsdoudddioudddisqdi"));

    }


    // Setters
    public function setDB($data)
    {
        $this->db = $data;
    }

    // Getters
    public function getDB()
    {
        return $this->db;
    }



    static function create($nbre)
    {
        $faker = Factory::create();
        $personneArray = [];

        for ($i = 0; $i <= $nbre - 1; $i++) {
            $singlePersonne = [];
            array_push($singlePersonne, $faker->name, $faker->address, $faker->country, $faker->company, $faker->postcode);
            array_push($personneArray, $singlePersonne);
        }

        return $personneArray;
    }
}

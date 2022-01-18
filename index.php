
<?php

    /**
     * 
     *      Definire classe Persona:
     *          - ATTRIBUTI (private):
     *              - nome
     *              - cognome
     *              - dataNascita (stringa)
     *          - METODI:
     *              - costruttore che accetta nome e cognome
     *              - setter/getter per ogni variabile
     *              - printFullPerson: che stampa "nome cognome: dataNascita"
     *              - toString: che ritorna "nome cognome: dataNascita"
     * 
     * 
     *      Definire classe Employee che eredita da Persona:
     *          - ATTRIBUTI (private):
     *              - stipendio
     *              - dataAssunzione
     *          - METODI:
     *              - costruttore che accetta nome, cognome e stipendio
     *              - setter/getter per variabili 
     *              - printFullEmployee: che stampa "nome cognome: stipendio (dataAssunzione)"
     *              - toString: che ritorna "nome cognome: stipendio (dataAssunzione)"
     * 
     */

    class Persona {
        private $nome;
        private $cognome;
        private $dataNascita;

        public function __construct($nome, $cognome) {
            $this -> setName($nome);
            $this -> setSurname($cognome);
        }

        public function getName() {
            return $this -> nome;
        } 

        public function setName($nome){
            $this -> nome = $nome;
        }

        public function getSurname() {
            return $this -> cognome;
        } 

        public function setSurname($cognome){
            $this -> cognome = $cognome;
        }

        public function getDate() {
            return $this -> dataNascita;
        } 

        public function setDate($dataNascita){
            $this -> dataNascita = $dataNascita;
        }

        public function printFullName() {
            return $this -> getName() . " " . $this -> getSurname() . ": " . $this -> getDate();
        }

        public function __toString() {
            return $this -> printFullName();
            
        }


    }

    

    class Employee  extends Persona {
        
        private $stipendio;
        private $dataAssunzione;

        public function __construct($nome, $cognome, $stipendio) {
            parent::__construct($nome, $cognome);
            $this -> setSalary($stipendio);
            
        }

        public function setSalary($stipendio){
            $this -> stipendio = $stipendio;
        }

        public function getSalary(){
            return $this -> stipendio;
        }

        public function setDateHiring($dataAssunzione){
            $this -> dataAssunzione = $dataAssunzione;
        }

        public function getDateHiring(){
            return $this -> dataAssunzione;
        }

        public function printFullEmployee() {
            return $this -> getName() . " " . $this -> getSurname() . ": " . $this -> getSalary() . "(" . $this -> getDateHiring() . ")";
        }

        public function __toString() {
            return $this -> printFullEmployee();
            
        }
        
    }

    $person1 = new Persona("luigi", "pera");
    $person2 = new Persona("Gabriele", "Manfre'");

    $person1 -> setDate ("23/05/1995");
    $person2 -> setDate ("08/06/2000");

    echo "Persona 1: " . $person1 . "<br>";
    echo "Persona 2: " . $person2 . "<br>";

    echo "<br><br>------------------<br><br>";

    $s1 = new Employee("luigi", "pera", "1600$");
    $s2 = new Employee("Gabriele", "Manfre'", "1600$");

    $s1 -> setDateHiring("16/03/2002");
    $s2 -> setDateHiring("16/03/2020");

    echo "stipendio: " . $s1 . "<br>";
    echo "stipendio: " . $s2 . "<br>";

?>


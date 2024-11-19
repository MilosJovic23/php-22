<?php


    require_once "Baza.php";
    class Korisnik  extends Baza {


        private $name;

        public function setName($newName) {
            $this->name = $newName;
            return $ucFirst  = ucfirst($this->name);
        }

        public function register($email, $sifra) {

            $email= mysqli_real_escape_string($this->sql,$email);
            $sifra = password_hash($sifra, PASSWORD_BCRYPT );

            $this->sql->query("INSERT INTO korisnici(email,sifra) VALUES ('$email','$sifra')");
            echo "uspesno smo registrovali korisnika u bazu";

        }

        public function userExists($email){

            $email= mysqli_real_escape_string($this->sql,$email);
            $result = $this->sql->query("SELECT * FROM korisnici WHERE email='$email'");

            return $result->num_rows > 0;

        }

    }
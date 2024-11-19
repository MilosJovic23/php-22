<?php


    require_once "Baza.php";
    class Korisnik  extends Baza {



        public function register($email, $sifra) {

            $baza = $this->sql;
            $email= mysqli_real_escape_string($baza,$email);
            $sifra = password_hash($sifra, PASSWORD_BCRYPT );

            $baza->query("INSERT INTO korisnici(email,sifra) VALUES ('$email','$sifra')");
            echo "uspesno smo registrovali korisnika u bazu";
        }
    }
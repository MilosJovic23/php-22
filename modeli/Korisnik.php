<?php


    require_once "Baza.php";
    class Korisnik  extends Baza {


        private $name;

        public function setName( $newName ) {
            $this->name = $newName;
            return $ucFirst = ucfirst( $this->name );
        }

        public function register( $email,$sifra ) {

            $email = mysqli_real_escape_string( $this->sql,$email );
            $sifra = password_hash( $sifra, PASSWORD_BCRYPT );

            $this->sql->query("INSERT INTO korisnici(email,sifra) VALUES ('$email','$sifra')");
            echo "uspesno smo registrovali korisnika u bazu";

        }

        public function userExists( $email ){

            $email = mysqli_real_escape_string( $this->sql,$email );
            $result = $this->sql->query("SELECT * FROM korisnici WHERE email='$email'");

            return $result->num_rows > 0;

        }

        public function deleteUser( $email ){

            $email = mysqli_real_escape_string( $this->sql,$email );

            $this->sql->query("DELETE FROM korisnici WHERE email='$email'");
            echo "uspesno ste obrisali korisnika sa $email ovom email adresom";

        }

        public function updateEmailAndPassword( $oldEmail,$email,$sifra ){

            $oldEmail = mysqli_real_escape_string( $this->sql,$oldEmail );
            $email = mysqli_real_escape_string( $this->sql,$email );
            $password = password_hash( $sifra, PASSWORD_BCRYPT );
            $password = mysqli_real_escape_string( $this->sql,$password );

            $this->sql->query("UPDATE korisnici SET sifra='$password',email='$email' WHERE email='$oldEmail'");
            echo "uspesno ste promenili kredencijale korisnika";

        }
    }
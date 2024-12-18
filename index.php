

<?php


    require_once "modeli/Korisnik.php";

    $email = "milosh23@hotmail.com";
    $sifra = "1234567";
    $oldEmail = "Milosh23@outlook.com";

    $noviKorisnik = new Korisnik();
    echo $noviKorisnik->setName("milos");

    if ( $noviKorisnik->userExists( $email ) ) {
        echo "postoji korisnik";

    } else {
        $noviKorisnik->register( $email,$sifra );
    }

    $noviKorisnik->deleteUser( $email );
    $noviKorisnik->updateEmailAndPassword( $oldEmail,$email,$sifra );
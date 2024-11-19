

<?php



    require_once "modeli/Korisnik.php";

    $email = "testiranjeReg@test.com";
    $sifra = "123456";

    $noviKorisnik = new Korisnik();

    if ( $noviKorisnik->userExists( $email ) ) {
        echo "postoji korisnik";

    } else {
        $noviKorisnik->register( $email,$sifra );
    }
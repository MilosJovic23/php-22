

<?php



    require_once "modeli/Korisnik.php";

    $ime = "testSql@test.com";
    $sifra = "123456";

    $noviKorisnik = new Korisnik();
    $noviKorisnik->register( $ime,$sifra );


<?php

class ControlerPredmet
{
    public static function sacuvajPredmet($sifra, $naziv, $nivoStudija)
    {
        global $coll_predmeti;
        $coll_predmeti->insertOne([
            'sifra' => $sifra,
            'naziv' => $naziv,
            'nivoStudija' => $nivoStudija
        ]);
    }

    public static function azurirajPredmet($sifra, $naziv, $nivoStudija)
    {
        global $coll_predmeti;

        $coll_predmeti->updateOne(
            ['sifra' => $sifra],
            [
                '$set' => [
                    'naziv' => $naziv,
                    'nivoStudija' => $nivoStudija
                ]
            ]
        );
    }

    public static function vratiSvePredmete()
    {
        global $coll_predmeti;
        $array = [];
        $docs = $coll_predmeti->find();
        foreach ($docs as $doc) {
            $predmet = new Predmet($doc->naziv, $doc->sifra, $doc->nivoStudija);
            array_push($array, $predmet);
        }
        return $array;
    }

    public static function obrisiPredmet($sifra)
    {
        global $coll_predmeti;
        $coll_predmeti->deleteOne(['sifra' => $sifra]);
        echo 'Uspesno obrisano';
    }
}

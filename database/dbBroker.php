<?php

$dbhost = 'localhost:27017';
$dbname = 'fakultet';

$kolekcija_1 = 'korisnici';
$kolekcija_2 = 'predmeti';
$kolekcija_3 = 'ocene';

$client = new MongoDB\Client("mongodb://$dbhost");
$db = $client->$dbname;
$coll_korisnici = $db->$kolekcija_1;
$coll_predmeti = $db->$kolekcija_2;
$coll_ocene = $db->$kolekcija_3;

// $coll_korisnici->insertOne([
//     'ime' => 'admin',
//     'prezime' => 'admin',
//     'email' => 'admin@elab.rs',
//     'sifra' => 'admin123',
//     'jmbg' => '545235652125',
//     'telefeon' => '065458751',
//     'tip' => 'administrator'
// ]);
// $coll_korisnici->insertOne([
//     'ime' => 'aleksa',
//     'prezime' => 'miletic',
//     'email' => 'aleksa@elab.rs',
//     'sifra' => 'aleksa123',
//     'jmbg' => '545235652125',
//     'telefeon' => '065458751',
//     'tip' => 'student',
//     'status' => 'doktorske',
//     'indeks' => '2022/5082'
// ]);

<h1>POO Entreprise</h1>

<?php

// require "Entreprise.php";
// require "Employe.php";

spl_autoload_register(function ($class_name) {
    require 'classes/'. $class_name . '.php';
});
// Entreprises 
$elanFormation = new Entreprise("ELAN FORMATION", "1993-01-01", "14 rue du Rhône", "67100", "STRASBOURG");
$tf1 = new Entreprise("TF1", "1970-01-01", "152 rue du Sapin", "75000", "PARIS");
$poleEmploi = new Entreprise("Pôle Emploi", "2000-01-01", "1 avenue de la Gare", "67000", "STRASBOURG");
// Employés
$kevin = new Employe("PFIFFER", "Kevin", "kevin.pfiffer@stagiaire-elan.fr", $elanFormation);
$mickael = new Employe("MURMANN", "Mickael", "mickael@stagiaire-elan.fr", $elanFormation);
// Contrats
$c1 = new Contrat($elanFormation, $kevin, "2020-01-01", "CDI");
$c2 = new Contrat($elanFormation, $mickael, "2010-01-01", "CDD");
$c3 = new Contrat($tf1, $mickael, "2015-01-01", "Interim");
$c4 = new Contrat($poleEmploi, $mickael, "2022-01-01", "CDI");

echo $elanFormation->afficherEmployes();
echo $tf1->afficherEmployes();
echo $poleEmploi->afficherEmployes();

echo $kevin->afficherEntreprises();
echo $mickael->afficherEntreprises();

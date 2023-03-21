<?php
// src/model.php

function getOffres() {
	$database = dbConnect();
	$statement = $database->query("SELECT * FROM offre JOIN entreprise ON offre.id_entreprise=entreprise.id_entreprise;");
	$offres = $statement->fetchAll(PDO::FETCH_OBJ);
	return $offres;
}

function getOffre($identifier) {
	$database = dbConnect();
	$statement = $database->prepare("SELECT *, GROUP_CONCAT(competence.competence SEPARATOR ', ') AS competences FROM offre JOIN entreprise ON offre.id_entreprise=entreprise.id_entreprise JOIN localise_entreprise ON localise_entreprise.id_entreprise=entreprise.id_entreprise JOIN adresse ON localise_entreprise.id_adresse=adresse.id_adresse JOIN competences_requises ON offre.id_offre=competences_requises.id_offre JOIN competence ON competences_requises.id_competence=competence.id_competence WHERE offre.id_offre = ?");
	$statement->execute([$identifier]);
	$offre = $statement->fetchAll(PDO::FETCH_OBJ);
	return $offre;
}

function getEntreprises() {
	$database = dbConnect();
	$statement = $database->query("SELECT * FROM `entreprise` WHERE visible=1");
	$entreprises = $statement->fetchAll(PDO::FETCH_OBJ);
	return $entreprises;
}

function getEntreprise($identifier) {
	$database = dbConnect();
	$statement = $database->prepare("SELECT * FROM `entreprise` WHERE id_entreprise = ? AND visible=1");
	$statement->execute([$identifier]);
	$entreprise = $statement->fetchAll(PDO::FETCH_OBJ);
	return $entreprise;
}

function getCommentaires($identifier) {
	$database = dbConnect();
	$statement = $database->prepare("SELECT membre.nom AS nomauteur, membre.prenom AS prenomauteur, commentaire, note, entreprise.nom AS
        nomentreprise FROM ((membre JOIN avis ON membre.id_membre=avis.id_membre) JOIN entreprise ON 
        entreprise.id_entreprise=avis.id_entreprise) WHERE avis.id_entreprise= ?");
	$statement->execute([$identifier]);
	$commentaire = $statement->fetchAll(PDO::FETCH_OBJ);
	return $commentaire;
}

function createComment(string $commentaire, string $note, string $id_membre, string $id_entreprise)
{
	$database = dbConnect();
	$statement = $database->prepare(
    	'INSERT INTO avis(commentaire, note, id_membre, id_entreprise) VALUES(?, ?, ?, ?)'
	);
	$affectedLines = $statement->execute([$commentaire, $note, $id_membre, $id_entreprise]);

	return ($affectedLines > 0);
}


// Nouvelle fonction qui nous permet d'éviter de répéter du code
function dbConnect()
{
	try {
    	$database = new PDO('mysql:host=localhost;dbname=livrable3;charset=utf8', 'root', '');
        $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    	return $database;
	} catch(PDOException $e) {
    	die('Erreur : '.$e->getMessage());
	}
}
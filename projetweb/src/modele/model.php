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
	$statement = $database->prepare("SELECT * FROM offre JOIN entreprise ON offre.id_entreprise=entreprise.id_entreprise WHERE id_offre = ?");
	$statement->execute([$identifier]);
	$offre = $statement->fetchAll(PDO::FETCH_OBJ);
	return $offre;
}

function getEntreprises() {
	$database = dbConnect();
	$statement = $database->query("SELECT * FROM `entreprise`");
	$entreprises = $statement->fetchAll(PDO::FETCH_OBJ);
	return $entreprises;
}

function getEntreprise($identifier) {
	$database = dbConnect();
	$statement = $database->prepare("SELECT * FROM `entreprise` WHERE id_entreprise = ?");
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
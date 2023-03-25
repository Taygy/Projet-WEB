<?php
// src/model.php

//LISTE DES FONCTIONS SEARCH

function searchOffre(string $search)
{
	$database = dbConnect();
	$statement = $database->query("SELECT * FROM offre JOIN entreprise ON offre.id_entreprise=entreprise.id_entreprise WHERE (`titre` LIKE '%" . "$search" . "%') OR (`description_offre` LIKE '%" . "$search" . "%') OR (`nom` LIKE '%" . "$search" . "%')");
	$soffres = $statement->fetchAll(PDO::FETCH_OBJ);
	return $soffres;
}



//LISTE DES FONCTIONS GET

function getOffre($identifier)
{
	$database = dbConnect();
	$statement = $database->prepare("SELECT *, GROUP_CONCAT(competence.competence SEPARATOR ', ') AS competences FROM offre JOIN entreprise ON offre.id_entreprise=entreprise.id_entreprise JOIN localise_entreprise ON localise_entreprise.id_entreprise=entreprise.id_entreprise JOIN adresse ON localise_entreprise.id_adresse=adresse.id_adresse JOIN competences_requises ON offre.id_offre=competences_requises.id_offre JOIN competence ON competences_requises.id_competence=competence.id_competence WHERE offre.id_offre = ?");
	$statement->execute([$identifier]);
	$offre = $statement->fetchAll(PDO::FETCH_OBJ);
	return $offre;
}

function getOffres()
{
	$database = dbConnect();
	$statement = $database->query("SELECT * FROM offre JOIN entreprise ON offre.id_entreprise=entreprise.id_entreprise;");
	$offres = $statement->fetchAll(PDO::FETCH_OBJ);
	return $offres;
}

function getIdAdresseByEntreprise(int $id_entreprise)
{
	$database = dbConnect();
	$statement = $database->prepare(
		"SELECT a.id_adresse FROM adresse AS a JOIN localise_entreprise AS le ON a.id_adresse = le.id_adresse JOIN entreprise AS e ON le.id_entreprise = e.id_entreprise WHERE e.id_entreprise = ?;"
	);
	$statement->execute([$id_entreprise]);
	$result = $statement->fetch(PDO::FETCH_ASSOC);

	if ($result) {
		return $result['id_adresse'];
	}

	return null;
}

function getEntreprises()
{
	$database = dbConnect();
	$statement = $database->query("SELECT * FROM `entreprise` WHERE visible=1");
	$entreprises = $statement->fetchAll(PDO::FETCH_OBJ);
	return $entreprises;
}

function getEntreprise($identifier)
{
	$database = dbConnect();
	$statement = $database->prepare("SELECT * FROM `entreprise` WHERE id_entreprise = ? AND visible=1");
	$statement->execute([$identifier]);
	$entreprise = $statement->fetchAll(PDO::FETCH_OBJ);
	return $entreprise;
}

function getAddress()
{
	$database = dbConnect();
	$statement = $database->query("SELECT * FROM `adresse`");
	$adresses = $statement->fetchAll(PDO::FETCH_OBJ);
	return $adresses;
}

function getAddres($identifier)
{
	$database = dbConnect();
	$statement = $database->prepare("SELECT * FROM `adresse` WHERE id_adresse = ?");
	$statement->execute([$identifier]);
	$adresse = $statement->fetchAll(PDO::FETCH_OBJ);
	return $adresse;
}

function getCommentaires($identifier)
{
	$database = dbConnect();
	$statement = $database->prepare("SELECT membre.nom AS nomauteur, membre.prenom AS prenomauteur, commentaire, note, entreprise.nom AS
        nomentreprise FROM ((membre JOIN avis ON membre.id_membre=avis.id_membre) JOIN entreprise ON 
        entreprise.id_entreprise=avis.id_entreprise) WHERE avis.id_entreprise= ?");
	$statement->execute([$identifier]);
	$commentaire = $statement->fetchAll(PDO::FETCH_OBJ);
	return $commentaire;
}

//LISTE DES FONCTIONS CREATE

function createEntreprise(string $nom, string $description_entreprise, string $secteur, string $mail, string $confiance, string $nombre_employes, string $logo, string $visible)
{
	$database = dbConnect();
	$statement = $database->prepare(
		'INSERT INTO entreprise(nom, description_entreprise, secteur, mail, confiance, nombre_employes, logo, visible) VALUES(?, ?, ?, ?, ?, ?, ?, ?)'
	);
	$affectedLines = $statement->execute([$nom, $description_entreprise, $secteur, $mail, $confiance, $nombre_employes, $logo, $visible]);
	return ($affectedLines > 0);
}

function addAdresse(string $ville, string $code_postal, string $adresse_complete)
{
	$database = dbConnect();
	$statement = $database->prepare(
		'INSERT INTO adresse(ville, code_postal, adresse_complete) VALUES(?, ?, ?)'
	);
	$affectedLines = $statement->execute([$ville, $code_postal, $adresse_complete]);
	return ($affectedLines > 0);
}


function createOffre(string $id_entreprise, string $titre, string $duree, string $remuneration, string $description_offre, string $nombre_places)
{
	$database = dbConnect();
	$statement = $database->prepare(
		'INSERT INTO offre(id_entreprise,titre,duree,remuneration,description_offre,nombre_places) VALUES(?,?, ?, ?, ?, ?)'
	);
	$affectedLines = $statement->execute([$id_entreprise, $titre, $duree, $remuneration, $description_offre, $nombre_places]);
	return ($affectedLines > 0);
}

function addCompetence(string $id_competence)
{
	$database = dbConnect();
	$statement = $database->prepare(
		'INSERT INTO competence(id_competence) VALUES(?)'
	);
	$affectedLines = $statement->execute([$id_competence]);
	return ($affectedLines > 0);
}

//LISTE DES FONCTIONS DELETE 

function delete_entreprise()
{
	// Récupérer l'id_entreprise
	$id_entreprise = $_POST['id_entreprise'];

	// Récupérer les adresses associées à l'entreprise
	$database = dbConnect();
	$statement = $database->prepare("SELECT id_adresse FROM localise_entreprise WHERE id_entreprise = ?");
	$statement->execute([$id_entreprise]);
	$result = $statement->fetchAll(PDO::FETCH_ASSOC);

	// Supprimer les adresses associées à l'entreprise
	if (count($result) === 1) {
		deleteAdresse($result[0]['id_adresse']);
	} elseif (count($result) > 1) {
		foreach ($result as $address) {
			deleteAdresse($address['id_adresse']);
		}
	}

	// Supprimer l'entreprise
	$statement_entreprise = $database->prepare("DELETE FROM entreprise WHERE id_entreprise = ?");
	$affectedLines = $statement_entreprise->execute([$id_entreprise]);

	return ($affectedLines > 0);
}


function deleteAdresse(int $id_adresse)
{
	$database = dbConnect();
	$statement = $database->prepare(
		'DELETE FROM adresse WHERE id_adresse = ?'
	);
	$affectedLines = $statement->execute([$id_adresse]);
	return ($affectedLines > 0);
}

//LISTE DES FONCTIONS MODIF

function modifEntreprise(int $id_entreprise, string $nom, string $description_entreprise, string $secteur, string $mail, string $confiance, string $nombre_employes, string $logo, string $visible)
{
	$database = dbConnect();
	$statement = $database->prepare(
		'UPDATE entreprise SET nom = ?, description_entreprise = ?, secteur = ?, mail = ?, confiance = ?, nombre_employes = ?, lien_logo = ?, visible = ?  WHERE id_entreprise = ?'
	);
	$affectedLines = $statement->execute([$nom, $description_entreprise, $secteur, $mail, $confiance, $nombre_employes, $logo, $visible, $id_entreprise]);
	return ($affectedLines > 0);
}

function modifAdresse(string $ville, string $code_postal, string $adresse_complete, int $identifier)
{
	$database = dbConnect();
	$statement = $database->prepare(
		'UPDATE adresse
SET ville = ?, code_postal = ?, adresse_complete = ?
WHERE adresse.id_adresse IN (
    SELECT localise_entreprise.id_adresse
    FROM localise_entreprise
    WHERE localise_entreprise.id_entreprise = ?'

	);
	$affectedLines = $statement->execute([$ville, $code_postal, $adresse_complete, $identifier]);
	return ($affectedLines > 0);
}

function localiseEntreprise(int $id_adresse, int $id_entreprise)
{
	$database = dbConnect();
	$statement = $database->prepare(
		'UPDATE localise_entreprise SET id_adresse = ? WHERE id_adresse = ?'
	);
	$affectedLines = $statement->execute([$id_adresse, $id_entreprise]);
	return ($affectedLines > 0);
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
	} catch (PDOException $e) {
		die('Erreur : ' . $e->getMessage());
	}
}

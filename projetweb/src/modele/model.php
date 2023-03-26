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
	if ($affectedLines) {
		return $database->lastInsertId();
	} else {
		return false;
	}
}

function addAdresse(string $ville, string $code_postal, string $adresse_complete)
{
	$database = dbConnect();
	$statement = $database->prepare(
		'INSERT INTO adresse(ville, code_postal, adresse_complete) VALUES(?, ?, ?)'
	);
	$affectedLines = $statement->execute([$ville, $code_postal, $adresse_complete]);
	if ($affectedLines) {
		return $database->lastInsertId();
	} else {
		return false;
	}
}

function createlocaliseEntreprise(int $id_adresse, int $id_entreprise)
{
	$database = dbConnect();
	$statement = $database->prepare(
		'INSERT INTO localise_entreprise( id_adresse, id_entreprise) VALUES (?,?)'
	);
	$affectedLines = $statement->execute([$id_adresse, $id_entreprise]);

	return ($affectedLines > 0);
}


function createOffre(string $titre, string $duree, string $remuneration, string $description_offre, string $nombre_places, int $id_entreprise)
{
	$database = dbConnect();
	$statement = $database->prepare(
		'INSERT INTO offre(titre, duree, remuneration, description_offre, nombre_places, id_entreprise) VALUES(?, ?, ?, ?, ?, ?)'
	);
	$affectedLines = $statement->execute([$titre, $duree, $remuneration, $description_offre, $nombre_places, $id_entreprise]);
	if ($affectedLines) {
		return $database->lastInsertId();
	} else {
		return false;
	}
}


function CreateCompetence(string $competence)
{
	$database = dbConnect();
	$statement = $database->prepare('SELECT id_competence FROM competence WHERE competence = ?');
	$statement->execute([$competence]);
	$result = $statement->fetch();
	if ($result) {
		return $result['id_competence'];
	} else {
		$statement = $database->prepare('INSERT INTO competence(competence) VALUES (?)');
		$statement->execute([$competence]);
		return $database->lastInsertId();
	}
}

function createCompetenceRequises(int $id_offre, int $id_competence)
{
	$database = dbConnect();
	$statement = $database->prepare(
		'INSERT INTO competences_requises(id_offre, id_competence) VALUES (?, ?)'
	);
	$affectedLines = $statement->execute([$id_offre, $id_competence]);

	return ($affectedLines > 0);
}


function addUser(string $prenom, string $nom, string $email, string $password_hash)
{
	$database = dbConnect();
	$statement = $database->prepare('INSERT INTO membre (prenom, nom, mail, mdp_chiffre) VALUES(?, ?, ?, ?)');
	$affectedLines = $statement->execute([$prenom, $nom, $email, $password_hash]);
}

//LISTE DES FONCTIONS DELETE 

function supprimerEntreprise(int $id_entreprise)
{
	$database = dbConnect();
	$statement = $database->prepare('DELETE FROM entreprise WHERE id_entreprise = ?');
	$affectedLines = $statement->execute([$id_entreprise]);
	return ($affectedLines > 0);
}

function supprimerAdresse(int $id_adresse)
{
	$database = dbConnect();
	$statement = $database->prepare(
		'DELETE FROM adresse
        WHERE adresse.id_adresse IN (
            SELECT localise_entreprise.id_adresse
            FROM localise_entreprise
            WHERE localise_entreprise.id_entreprise = ?)'
	);
	$affectedLines = $statement->execute([$id_adresse]);
	return ($affectedLines > 0);
}

function supprimerLocalisationEntreprise(int $id_entreprise)
{
	$database = dbConnect();
	$statement = $database->prepare('DELETE FROM localise_entreprise WHERE id_entreprise = ?');
	$affectedLines = $statement->execute([$id_entreprise]);
	return ($affectedLines > 0);
}

//LISTE DES FONCTIONS MODIF

function modifOffre(int $id_offre, string $titre, string $duree, string $remuneration, string $description_offre, string $nombre_places, string $competence)
{
	$database = dbConnect();
	$statement = $database->prepare(
		'UPDATE offre SET titre = ?, duree = ?, remuneration = ?, description_offre = ?, nombre_places = ? WHERE id_offre = ?'
	);
	$affectedLines = $statement->execute([$titre, $duree, $remuneration, $description_offre, $nombre_places, $id_offre]);

	// Vérifier si la compétence a été modifiée
	if ($affectedLines > 0 && !empty($competence)) {
		$statement = $database->prepare('SELECT id_competence FROM competence WHERE competence = ?');
		$statement->execute([$competence]);
		$result = $statement->fetch();

		if ($result) {
			// La compétence existe déjà, on récupère son id
			$id_competence = $result['id_competence'];
		} else {
			// La compétence n'existe pas encore, on l'ajoute à la table "competence"
			$statement = $database->prepare('INSERT INTO competence(competence) VALUES (?)');
			$statement->execute([$competence]);
			$id_competence = $database->lastInsertId();
		}

		// Mettre à jour la table "competences_requises" avec la nouvelle compétence
		$statement = $database->prepare('INSERT INTO competences_requises(id_offre, id_competence) VALUES (?, ?) ON DUPLICATE KEY UPDATE id_competence = VALUES(id_competence)');
		$statement->execute([$id_offre, $id_competence]);
	}

	return ($affectedLines > 0);
}

function modifCompetence(string $competence)
{
	$database = dbConnect();
	$statement = $database->prepare('SELECT id_competence FROM competence WHERE competence = ?');
	$statement->execute([$competence]);
	$result = $statement->fetch();

	if ($result) {
		// La compétence existe déjà, on ne fait rien
		return true;
	} else {
		// La compétence n'existe pas encore, on l'ajoute à la table "competence"
		$statement = $database->prepare('INSERT INTO competence(competence) VALUES (?)');
		$statement->execute([$competence]);
		return true;
	}
}




function modifEntreprise(int $id_entreprise, string $nom, string $description_entreprise, string $secteur, string $mail, string $confiance, string $nombre_employes, string $logo, string $visible)
{
	$database = dbConnect();
	$statement = $database->prepare(
		'UPDATE entreprise SET nom = ?, description_entreprise = ?, secteur = ?, mail = ?, confiance = ?, nombre_employes = ?, logo = ?, visible = ?  WHERE id_entreprise = ?'
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
    WHERE localise_entreprise.id_entreprise = ?)'

	);
	$affectedLines = $statement->execute([$ville, $code_postal, $adresse_complete, $identifier]);
	return ($affectedLines > 0);
}

function localiseEntreprise(int $id_adresse, int $id_entreprise)
{
	$database = dbConnect();
	$statement = $database->prepare(
		'UPDATE localise_entreprise SET id_adresse= ?,  id_entreprise = ? WHERE id_adresse = ?'
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

//autres fonctions

function setUser(string $sessiondata)
{
	$database = dbConnect();
	$query = $sessiondata;
	$statement = $database->query("SELECT * FROM `membre`
		WHERE `id_membre` = '$query';");
	$user = $statement->fetchAll(PDO::FETCH_ASSOC);
	return $user;
}

function verifMail(string $mail)
{
	$database = dbConnect();
	$query = $mail;
	$statement = $database->query("SELECT * FROM membre WHERE `mail` = '$query'");
	$user = $statement->fetchAll(PDO::FETCH_ASSOC);
	return $user;
}

// Nouvelle fonction qui nous permet d'éviter de répéter du code
function dbConnect()
{
	try {
		$database = new PDO('mysql:host=localhost;dbname=livrable3;charset=utf8', 'root', 'Toto003300');
		$database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $database;
	} catch (PDOException $e) {
		die('Erreur : ' . $e->getMessage());
	}
}

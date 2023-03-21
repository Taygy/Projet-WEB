<?php

require_once('src/controllers/detailoffre.php');
require_once('src/controllers/offre.php');
require_once('src/controllers/homepage.php');
require_once('src/controllers/entreprise.php');
require_once('src/controllers/detailentreprise.php');

if (isset($_GET['action']) && $_GET['action'] !== '') {
    if ($_GET['action'] === 'offre') {
        offre();
    }elseif ($_GET['action'] === 'detailoffre') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            $identifier = $_GET['id'];

            detailoffre($identifier);
        } else {
            echo 'Erreur : aucun identifiant de billet envoyé';

            die;
        }
	}elseif ($_GET['action'] === 'entreprise'){
    	entreprise();
	}
    elseif ($_GET['action'] === 'detailentreprise'){
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            $identifier = $_GET['id'];

            detailentreprise($identifier);
            addComment($identifier, $_POST);
        } else {
            echo 'Erreur : aucun identifiant de billet envoyé';

            die;
        }
    }
} else {
	homepage();
}
<?php

require_once('src/controllers/detailoffre.php');
require_once('src/controllers/offre.php');
require_once('src/controllers/homepage.php');
require_once('src/controllers/entreprise.php');
require_once('src/controllers/detailentreprise.php');
require_once('src/controllers/ajouterentreprise.php');
require_once('src/controllers/ajouteroffre.php');
require_once('src/controllers/modifierentreprise.php');
require_once('src/controllers/apropos.php');
require_once('src/controllers/supprimerentreprise.php');
require_once('src/controllers/login.php');
require_once('src/controllers/creeretudiant.php');
require_once('src/controllers/logout.php');
require_once('src/controllers/modifieroffre.php');
require_once('src/controllers/ajouterwishlist.php');
require_once('src/controllers/mawishlist.php');
require_once('src/controllers/deletewishlist.php');
require_once('src/controllers/supprimeroffre.php');
require_once('src/controllers/contact.php');




if (isset($_GET['action']) && $_GET['action'] !== '') {
    if ($_GET['action'] === 'offre') {
        if (isset($_POST['search']) && $_POST['search'] !== '') {
            $search = $_POST['search'];
            soffres($search);
        } else {
            offre();
        }
    } elseif ($_GET['action'] === 'detailoffre') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            $identifier = $_GET['id'];

            detailoffre($identifier);
        } else {
            echo 'Erreur : aucun identifiant de billet envoyé';

            die;
        }
    } elseif ($_GET['action'] === 'entreprise') {
        if (isset($_GET['page']) && !empty($_GET['page'])) {
            entreprise();
        } else {
            $pageCourante = 1;
            entreprise();
        }
    } elseif ($_GET['action'] === 'detailentreprise') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            $identifier = $_GET['id'];

            detailentreprise($identifier);
        } else {
            echo 'Erreur : aucun identifiant de billet envoyé';

            die;
        }
    } elseif ($_GET['action'] === 'ajouterentreprise') {
        addEntreprise($_POST);
    } elseif ($_GET['action'] === 'homepage') {
        homepage();
    } elseif ($_GET['action'] === 'apropos') {
        apropos();
    } elseif ($_GET['action'] === 'modifierentreprise') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            $identifier = $_GET['id'];

            changeEntreprise($_POST, $identifier);
        } else {
            echo 'Erreur : CDE aucun identifiant de billet envoyé';

            die;
        }
    } elseif ($_GET['action'] === 'deleteentreprise') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            $identifier = $_GET['id'];

            deleteEntreprise($identifier);
        } else {
            echo 'Erreur : CDE aucun identifiant de billet envoyé';

            die;
        }
    } elseif ($_GET['action'] === 'ajouteroffre') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            $id_entreprise = $_GET['id'];
            ajouterOffre($_POST, $id_entreprise);
        } else {
            echo 'Erreur : aucun identifiant d\'entreprise envoyé';
            die;
        }
    } elseif ($_GET['action'] === 'modifieroffre') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            $identifier = $_GET['id'];

            changeOffre($_POST, $identifier);
        } else {
            echo 'Erreur : aucun identifiant d\'offre envoyé';
            die;
        }
    } elseif ($_GET['action'] === 'deletewishlist') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            deleteWishlist($_GET['id']);
        } else {
            echo 'Erreur : aucun identifiant d\'offre envoyé';
            die;
        }
    } elseif ($_GET['action'] === 'supprimeroffre') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            deleteOffre($_GET['id']);
        } else {
            echo 'Erreur : aucun identifiant d\'offre envoyé';
            die;
        }
    } elseif ($_GET['action'] === 'ajouterwishlist') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            ajouterWishlist($_GET['id']);
        } else {
            echo 'Erreur : aucun identifiant d\'offre envoyé';
            die;
        }
    } elseif ($_GET['action'] === 'creeretudiant') {
        addEtudiant($_POST);
    } elseif ($_GET['action'] === 'login') {
        setSession();
    } elseif ($_GET['action'] === 'logout') {
        logOut();
    } elseif ($_GET['action'] === 'mawishlist') {
        mawishlist();
    } elseif ($_GET['action'] === 'contact') {
        mecontact();
    }
} else {
    homepage();
}

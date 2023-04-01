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
require_once('src/controllers/creerpilote.php');
require_once('src/controllers/pilote.php');
require_once('src/controllers/etudiant.php');
require_once('src/controllers/ajouterwishlist.php');
require_once('src/controllers/mawishlist.php');
require_once('src/controllers/deletewishlist.php');
require_once('src/controllers/supprimeroffre.php');
require_once('src/controllers/contact.php');
require_once('src/controllers/avis.php');
require_once('src/controllers/detailetudiant.php');

if (isset($_GET['action']) && $_GET['action'] !== '') {
    if ($_GET['action'] === 'offre') {
        if (isset($_POST['search']) && $_POST['search'] !== '') {
            $search = $_POST['search'];
            rechercherOffres($search);
        } else {
            $pageCourante=1;
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
            if (isset($_POST['search']) && $_POST['search'] !== '') {
                $search = $_POST['search'];
                rechercheEntreprise($search);
            } else {
                $pageCourante=1;
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
    } elseif ($_GET['action'] === 'ajouterentreprise') {
        addEntreprise($_POST);
    } elseif ($_GET['action'] === 'homepage') {
        homepage();
    } elseif ($_GET['action'] === 'apropos') {
        apropos();
    } elseif ($_GET['action'] === 'avis') {
        avis();
    } elseif ($_GET['action'] === 'modifierentreprise') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            $identifier = $_GET['id'];
            changeEntreprise($_POST, $identifier);
        } else {
            echo 'Erreur : CDE aucun identifiant de billet envoyé';
            die;
        }
    } elseif ($_GET['action'] === 'detailetudiant') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            $identifier = $_GET['id'];
            detailetudiant($identifier);
        } else {
            echo 'Erreur : CDE aucun identifiant de billet envoyé';
            die;
        }
    } elseif ($_GET['action'] === 'supprimerentreprise') {
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
    } elseif ($_GET['action'] === 'creeretudiant') {
        addEtudiant($_POST);
    } elseif ($_GET['action'] === 'login') {
        setSession();
    } elseif ($_GET['action'] === 'logout') {
        logOut();
    } elseif ($_GET['action'] === 'creeretudiant') {
        addEtudiant($_POST);
    } elseif ($_GET['action'] === 'creerpilote') {
        addPilote($_POST);
    } elseif ($_GET['action'] === 'pilote') {
        if (isset($_POST['search']) && $_POST['search'] !== '') {
            $search = $_POST['search'];
            rechercherPilotes($search);
        } else {
            $pageCourante=1;
            pilote();
        }
    } elseif ($_GET['action'] === 'etudiant') {
         if (isset($_POST['search']) && $_POST['search'] !== '') {
            $search = $_POST['search'];
            rechercherEtudiants($search);
        } else {
            $pageCourante=1;
            etudiant();
        }
    } elseif ($_GET['action'] === 'mawishlist') {
        mawishlist();
    } elseif ($_GET['action'] === 'contact') {
        contact();
    } elseif ($_GET['action'] === 'modifieroffre') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            $identifier = $_GET['id'];
            changeOffre($_POST, $identifier);
        } else {
            echo 'Erreur : CDE aucun identifiant de billet envoyé';
            die;
        }
    }
} else {
    homepage();
}

<?php
/* Smarty version 4.3.0, created on 2023-03-25 11:32:56
  from 'C:\wampserver\www\Projet-WEB-thomas\projetweb\src\view\templates\ajouterentreprise.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_641edbe896f001_94198464',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1fbcd5a306aa2cf5f0449368d264e5881d0e58d6' => 
    array (
      0 => 'C:\\wampserver\\www\\Projet-WEB-thomas\\projetweb\\src\\view\\templates\\ajouterentreprise.tpl',
      1 => 1679743971,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:src/view/templates/header.tpl' => 1,
    'file:src/view/templates/footer.tpl' => 1,
  ),
),false)) {
function content_641edbe896f001_94198464 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="public/css/global.css" />
    <link rel="stylesheet" href="public/css/creerentreprise.css" />
    <link rel="stylesheet" href="public/css/contact.css" />
    <link rel="stylesheet" href="public/css/header&footer.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rufina:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM Sans:wght@400;500;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Salsa:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" />
</head>

<body>
    <div class="crer-une-entreprise">
        <header>
        <?php $_smarty_tpl->_subTemplateRender("file:src/view/templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
       </header>

        <div class="titre">ajouter une entreprise</div>

        <div class="rectangle-container">
            <div class="sous-titre">
                Créer des offres d'emploi en quelques clics grâce à notre plateforme
            </div>
            <div class="sous-titre2">
                Gagnez du temps et de l'efficacité dans la création et la diffusion de
                vos offres d'emploi grâce à notre plateforme intuitive. En quelques
                clics seulement, vous pouvez créer une offre complète avec toutes les
                informations nécessaires, et la diffuser simultanément sur notre
                réseau de partenaires écoles et universités.
            </div>

            <img class="support" src="public\logo\contact1.png" />
            <div class="vous-cherchez">
                Vous cherchez à simplifier le recrutement de stagiaires, d'alternants
                ou de jeunes diplômés pour votre entreprise ? Découvrez nos outils
                pour publier vos offres facilement.
            </div>
            <form id="MyForm" action="index.php?action=ajouterentreprise" method="post">
                <div>
                    <label class="nom-de-lentreprise" for="nom">Nom de l’entreprise :</label>
                    <input class="noment" type="text" id="nom" name="nom" required>
                </div>
                <div>
                    <label class="email1" for="mail">Email :</label>
                    <input class="email" type="email" id="mail" name="mail" required>
                </div>
                <div>
                    <label class="telephone" for="nombre_employes">Nombre d'employés :</label>
                    <input class="tel" type="text" id="nombre_employes" name="nombre_employes" required>
                </div>
                <div>
                    <label class="confiance" for="confiance">Confiance :</label>
                    <input class="conf" type="text" id="confiance" name="confiance" required>
                </div>
                <div>
                    <label class="adresse" for="adresse_complete">Adresse :</label>
                    <input class="adres" type="text" id="adresse_complete" name="adresse_complete" required>
                </div>
                <div>
                    <label class="ville" for="ville">Ville :</label>
                    <input class="vill" type="text" id="ville" name="ville" required>
                </div>
                <div>
                    <label class="code-postal" for="code_postal">Code postal :</label>
                    <input class="code" type="text" id="code_postal" name="code_postal" required>
                </div>
                <div>
                    <label class="secteur" for="secteur">Secteur :</label>
                    <select class="sec" id="secteur" name="secteur" required>
                        <option value="Informatique">Informatique</option>
                        <option value="BTP">BTP</option>
                        <option value="Généraliste">Généraliste</option>
                        <option value="Electronique">Electronique</option>
                        <option value="Autre">Autre</option>
                    </select>                
                </div>
                <div>
                    <label class="descriptionentre" for="description_entreprise">Description de l’entreprise :</label>
                    <input class="description" type="text" id="description_entreprise" name="description_entreprise"
                        required>
                </div>
                <div>
                    <input class="fefe" type="file" id="logo" name="logo" accept="image/png">
                </div>
                <div>
                    <label class="mdp" for="mot_de_passe">Mot de passe :</label>
                    <input class="mdpp" type="password" id="mot_de_passe" name="mot_de_passe" required>
                </div>
                <div>
                    <label class="confirmezmdp" for="confirmer_mot_de_passe">Confirmez le mot de passe :</label>
                    <input class="cmdpp" type="password" id="confirmer_mot_de_passe" name="confirmer_mot_de_passe"
                        required>
                </div>

                <button class=" create-btn">Créer</button>

               
                <div class="check">
                    Je certifie que toutes les informations entrées sont correctes
                    <input type="checkbox" id="certify" name="certify" required>
                </div>
            </form>
        </div>

        <div class="support-image"></div>
        <div class="sous-titre3">Diffusez vos offres avec nous</div>
        <img class="image-reading" src="public\logo\Reading_list_Customizable_Flat_Illustrations___Rafiki_Style.png" />
        <img class="image-agreement" src="public\logo\Agreement_Customizable_Flat_Illustrations___Rafiki_Style_1.png" />
        <img class="image-management"
            src="public\logo\Time_management_Customizable_Flat_Illustrations___Rafiki_Style.png" />
        <div class="texte-1">
            Pilotez facilement les recrutements
        </div>
        <div class="texte-2">
            Aidez les entreprises à trouver des candidats qualifiés.
        </div>
        <div class="texte-3">
            Multi-diffusez les offres d'emploi de différentes entreprises.
        </div>

        <div class="questions">Des questions ?</div>
        <div class="contact-btn19">
            <button class="contact-btn">Contactez-nous</button>
        </div>
    </div>

   
    <footer>
        <?php $_smarty_tpl->_subTemplateRender("file:src/view/templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </footer>
</body>

</html><?php }
}
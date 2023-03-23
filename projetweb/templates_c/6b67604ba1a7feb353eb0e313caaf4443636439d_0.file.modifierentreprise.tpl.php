<?php
/* Smarty version 4.3.0, created on 2023-03-23 19:15:52
  from 'C:\wamp64\www\Formulaire\FormulairePOST\projetweb\src\view\templates\modifierentreprise.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_641ca568746ce6_95288905',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b67604ba1a7feb353eb0e313caaf4443636439d' => 
    array (
      0 => 'C:\\wamp64\\www\\Formulaire\\FormulairePOST\\projetweb\\src\\view\\templates\\modifierentreprise.tpl',
      1 => 1679598564,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:src/view/templates/header.tpl' => 1,
    'file:src/view/templates/footer.tpl' => 1,
  ),
),false)) {
function content_641ca568746ce6_95288905 (Smarty_Internal_Template $_smarty_tpl) {
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
    <header>
        <?php $_smarty_tpl->_subTemplateRender("file:src/view/templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </header>

    <div class="crer-une-entreprise">


        <div class="titre">Modifier une entreprise</div>

            <form id="MyForm" action="index.php?action=modifierentreprise" method="PUT">
                <div>
                    <label class="nom-de-lentreprise" for="nom">Nom de l'entreprise :</label><br />
                    <input class="noment" type="text" id="nom" name="nom" required />
                </div>
                <div>
                    <label class="email1" for="mail">Email :</label><br />
                    <input class="email" type="email" id="mail" name="mail" required />
                </div>
                <div>
                    <label class="confiance" for="confiance">Confiance :</label><br />
                    <input class="conf" type="number" id="confiance" name="confiance" required />
                </div>
                <div>
                    <label class="adresse" for="adresse_complete">Adresse :</label><br />
                    <input class="adres" type="text" id="adresse_complete" name="adresse_complete" required />
                </div>
                <div>
                    <label class="code-postal" for="code_postal">Code postal :</label><br />
                    <input class="code" type="text" id="code_postal" name="code_postal" required />
                </div>
                <div>
                    <label class="ville" for="ville">Ville :</label><br />
                    <input class="vill" type="text" id="ville" name="ville" required />
                </div>

                <div>
                    <label class="secteur" for="secteur">Secteur :</label><br />
                    <select class="sec" id="secteur" name="secteur" required>
                        <option value="Informatique">Informatique</option>
                        <option value="BTP">BTP</option>
                        <option value="Généraliste">Généraliste</option>
                        <option value="Electronique">Electronique</option>
                        <option value="Autre">Autre</option>
                    </select>
                </div>
                <div>
                    <label class="telephone" for="nombre_employes">Nombre d'employés :</label><br />
                    <input class="tel" type="texte" id="nombre_employes" name="nombre_employes" required />
                </div>
                <div>
                    <label class="descriptionentre" for="description_entreprise">Description de l'entreprise
                        :</label><br />
                    <textarea class="description" id="description_entreprise" name="description_entreprise"
                        required></textarea>
                </div>
                <div>
                    <label class="mdp" for="mot_de_passe">Mot de passe :</label><br />
                    <input class="mdpp" type="password" id="mot_de_passe" name="mot_de_passe" required />
                </div>
                <div>
                    <label class="confirmezmdp" for="confirmer_mot_de_passe">Confirmer le mot de passe :</label><br />
                    <input class="cmdpp" type="password" id="confirmer_mot_de_passe" name="confirmer_mot_de_passe"
                        required />
                </div>
                <div>
                    <label for="lien_logo">Lien du Logo de l'entreprise</label><br />
                    <textarea id="lien_logo" name="lien_logo" required></textarea>
                </div>
                <div class="check">
                    J’accepte les conditions d’utilisation et la politique de
                    confidentialité
                    <input class="check type=" checkbox" id="accept_term" name="accept_term" value="1">
                </div>
                <div class="check2">
                    Je cértifie que toutes les informations entrées sont correctes
                    <input class="hover" type="checkbox" id="certify_info" name="certify_info" value="1">
                </div>
                <button class="hover" type="submit">Envoyer</button>
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

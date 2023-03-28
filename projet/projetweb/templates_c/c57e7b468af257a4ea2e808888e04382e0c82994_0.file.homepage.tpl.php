<?php
/* Smarty version 4.3.0, created on 2023-03-28 13:16:14
  from 'C:\wampserver\www\thomas\Projet-WEB-thomas\projetweb\src\view\templates\homepage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6422e89e6771d3_74972554',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c57e7b468af257a4ea2e808888e04382e0c82994' => 
    array (
      0 => 'C:\\wampserver\\www\\thomas\\Projet-WEB-thomas\\projetweb\\src\\view\\templates\\homepage.tpl',
      1 => 1680008954,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:src/view/templates/header.tpl' => 1,
    'file:src/view/templates/footer.tpl' => 1,
  ),
),false)) {
function content_6422e89e6771d3_74972554 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="public/css/global.css" />
    <link rel="stylesheet" href="public/css/index.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rufina:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM_Sans:wght@400;500;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Salsa:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" />
</head>

<body>
    
    <div class="accueil">
        <div class="hero-section">
            <div class="left">
                <div class="plus-de-5oo">Plus de 5OO stages pour vous</div>
                <div class="texte">
                    Trouver un stage peut être une étape difficile pour de nombreux
                    étudiants. Nous sommes là pour aider les étudiants à trouver leur
                    stage idéal en simplifiant le processus de recherche.
                </div>
            </div>
            <button class="boutonstage"><a href="index.php?action=offre">Trouver un stage</button>
            <button class="boutonscontact"><a href="index.php?action=contact">Contactez-nous</button>
            <img class="image2" src="public\logo\acc.png" />
        </div>
        <header>
            <?php $_smarty_tpl->_subTemplateRender("file:src/view/templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </header>
        <div class="about">
            <div class="about-child"></div>
            <b class="explorer">Explorer</b>
            <div class="trouvez-votre-carrire">Trouvez votre carrière</div>
            <button class="boutonoff"><a href="index.php?action=offre">Voir les offres</a></button>
            <button class="boutonvoir"><a href="index.php?action=entreprise">Voir les entreprises</a></button>
            <div class="chez-nous-nous">
                Chez nous, nous sommes convaincus que chaque personne a un parcours
                unique et nous sommes là pour vous accompagner dans votre recherche de
                métier et d'entreprise où vous pourrez vous épanouir. Nous souhaitons
                que vos choix professionnels soient alignés avec vos valeurs
                personnelles.
            </div>
            <img class="image-3-icon" src="public\logo\h&.jpg" />
        </div>
        <div class="technology">
            <div class="tech-1">
                <img class="image-5-icon" src="public\logo\tr1.png" />
                <div class="triangle"></div>
                <div class="tech-1-item"></div>
                <div class="entreprise">  Entreprise ?</div>
                <div class="recrutez-ds-maintenant-container">
                    <span class="recrutez-ds-maintenant-container1">
                        <p class="recrutez-ds-maintenant">
                            Recrutez dès maintenant les jeunes talents
                        </p>
                        <p class="recrutez-ds-maintenant">dans votre entreprise.</p>
                    </span>
                </div>
            </div>
            <div class="tech-11">
                <img class="image-4-icon" src="public\logo\tr2.png" />
                <div class="triangle"></div>
                <div class="tech-1-inner"></div>
                <div class="etudiant">Etudiant ?</div>
                <div class="en-savoir-plus">
                    <ul>
                        <a href="#">En savoir plus</a>
                    </ul>
                </div>
                <div class="en-savoir-plus1">
                    <ul>
                        <a href="#">En savoir plus</a>
                    </ul>
                </div>
                <div class="vous-tes-tudient-container">
                    <span class="recrutez-ds-maintenant-container1">
                        <p class="recrutez-ds-maintenant">
                            Vous êtes étudiant et à la recherche d’un stage ?
                        </p>
                        <p class="recrutez-ds-maintenant">Postulez maintenat</p>
                    </span>
                </div>
                <button class="boutonpilotte"><a href="index.php?action=pilote">Voir les pilottes</button>
                <button class="boutonetud"><a href="index.php?action=etudiant">Voir les etudiants</button>
            </div>
        </div>
    </div>

    <!--footer-->
    <footer>
        <?php $_smarty_tpl->_subTemplateRender("file:src/view/templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </footer>
</body>

</html><?php }
}

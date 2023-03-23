<?php
/* Smarty version 4.3.0, created on 2023-03-23 23:20:22
  from 'C:\wamp64\www\Formulaire\FormulairePOST\projetweb\src\view\templates\apropos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_641cdeb632b769_28634150',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db7cb4f7ebf3e617197cddd2f4a9c7b646b215cb' => 
    array (
      0 => 'C:\\wamp64\\www\\Formulaire\\FormulairePOST\\projetweb\\src\\view\\templates\\apropos.tpl',
      1 => 1679613618,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:src/view/templates/header.tpl' => 1,
    'file:src/view/templates/footer.tpl' => 1,
  ),
),false)) {
function content_641cdeb632b769_28634150 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="public/css/global.css" />
    <link rel="stylesheet" href="public/css/apropos.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rufina:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM Sans:wght@400;500;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Salsa:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" />
</head>

<body>
    <div class="a-propos">
        <div class="hero-section">
            <div class="hero-left">
                <div class="qui-sommes-nous">Qui sommes-nous ?</div>
                <div class="nous-sommes-une">
                    Nous sommes une entreprise passionnée par l'avenir des étudiants et
                    des jeunes professionnels. Nous croyons que tout le monde devrait
                    avoir la possibilité de trouver un stage qui correspond à ses
                    aspirations et à ses compétences, et nous mettons tout en œuvre pour
                    aider à rendre cela possible. Notre plateforme intuitive et
                    conviviale relie les étudiants à des milliers d'offres de stage et
                    permet aux entreprises de trouver des stagiaires talentueux pour
                    leurs projets.
                </div>
                <img class="image-4-icon" src="public\logo\aproposimage1.png" />
            </div>
        </div>
         <header>
            <?php $_smarty_tpl->_subTemplateRender("file:src/view/templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </header>
        <div class="education">
            <div class="education-child"></div>
            <img class="right-icon" src="public\logo\aproposimage2.png" />
            <div class="left">
                <b class="plus-sur-nous">Plus sur nous</b>
                <div class="notre-mission">Notre mission</div>
                <img class="side-line-icon" src="public\logo\aproposimage3.png" />
                <div class="faciliter-la-recherche">
                    Faciliter la recherche de stage
                </div>
                <div class="notre-plateforme-vise">
                    Notre plateforme vise à simplifier et à faciliter la recherche de
                    stage pour les étudiants, en mettant à leur disposition une base de
                    données complète d'offres de stage et en leur proposant des outils
                    pour affiner leur recherche selon leurs critères.
                </div>
                <div class="simplifier-le-processus">
                    Simplifier le processus de recrutement pour les entreprises
                </div>
                <div class="notre-plateforme-facilite">
                    Notre plateforme facilite également le processus de recrutement pour
                    les entreprises en leur permettant de publier facilement des offres
                    de stage et de trouver les candidats qui correspondent le mieux à
                    leurs besoins. Grâce à notre système de filtrage, les entreprises
                    peuvent rapidement identifier les profils qui répondent à leurs
                    critères et ainsi gagner du temps dans leur processus de sélection.
                </div>
            </div>
        </div>
        <div class="skills">
            <div class="left1">
                <div class="envie-den-savoir">Envie d’en savoir plus ?</div>
            </div>
        </div>
        <div class="contact-btn">
            <button class="contact-btn-child">Contactez-nous</button>
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

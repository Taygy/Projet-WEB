<?php
/* Smarty version 4.3.0, created on 2023-03-26 08:55:41
  from 'C:\wampserver\www\Projet-WEB-thomas\projetweb\src\view\templates\offre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6420088dcad163_08807249',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '830fbec1eb41e7700a3f848ce598f5fda6b6dd13' => 
    array (
      0 => 'C:\\wampserver\\www\\Projet-WEB-thomas\\projetweb\\src\\view\\templates\\offre.tpl',
      1 => 1679820893,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:src/view/templates/header.tpl' => 1,
    'file:src/view/templates/footer.tpl' => 1,
  ),
),false)) {
function content_6420088dcad163_08807249 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="public/css/global.css" />
    <link rel="stylesheet" href="public/css/index2.css" />
    <link rel="script" href="script.js"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rufina:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM Sans:wght@400;500;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Salsa:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" />
</head>

<body>
    <!--Header -->
     <header>
	 <?php $_smarty_tpl->_subTemplateRender("file:src/view/templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </header>
        <div class="filtres">
                <input type="text" id="search" name="search" >
                 
            <div >
                <select id="country-select" onchange="selectCountry()">
                <option value="">Choisissez un pays</option>
                <option value="france">France</option>
                <option value="espagne">Espagne</option>
                <option value="italie">Italie</option>
                <option value="allemagne">Allemagne</option>
                </select>
            </div>
            <div >
                <select id="country-select" onchange="selectCountry()">
                <option value="">Choisissez un pays</option>
                <option value="france">France</option>
                <option value="espagne">Espagne</option>
                <option value="italie">Italie</option>
                <option value="allemagne">Allemagne</option>
                </select>
            </div>
            <div>
                <select id="country-select" onchange="selectCountry()">
                <option value="">Choisissez un pays</option>
                <option value="france">France</option>
                <option value="espagne">Espagne</option>
                <option value="italie">Italie</option>
                <option value="allemagne">Allemagne</option>
                </select>
            </div>
            <div  >
                <select id="country1" onchange="selectCountry()">
                <option value="">Choisissez un pays</option>
                <option value="france">France</option>
                <option value="espagne">Espagne</option>
                <option value="italie">Italie</option>
                <option value="allemagne">Allemagne</option>
                </select>
            </div>
            <div >
                <select id="country2" onchange="selectCountry()">
                <option value="">Choisissez un pays</option>
                <option value="france">France</option>
                <option value="espagne">Espagne</option>
                <option value="italie">Italie</option>
                <option value="allemagne">Allemagne</option>
                </select>
            </div>
            <div >
                <select id="country3" onchange="selectCountry()">
                <option value="">Choisissez un pays</option>
                <option value="france">France</option>
                <option value="espagne">Espagne</option>
                <option value="italie">Italie</option>
                <option value="allemagne">Allemagne</option>
                </select>
            </div>
            <br>
            <label class="dispo">
                XX offres disponibles
            </label>
        </div>
    
      <form id="MyForm" action="index.php?action=stagge" method="post">
        <div class="box">
            <h4>Cap Gemini</h4>
            <img src="cap.png" class="cap">
            <h1>
                Stagiaire Front-end
            </h1>
            <p>
                Nous sommes à la recherche d'un(e) stagiaire en développement front-end<br> pour une durée de 4 mois. 
                Le stagiaire travaillera en étroite collaboration<br> avec notre équipe de développeurs pour concevoir, 
                développer et maintenir des applications web innovantes et conviviales.
            </p>
        </div>
        <div></div>
        <div class="box">
            <h4>Amadeus</h4>
            <img src="amadeus.png" class="cap">
            <h1>
                Stagiaire Back-end
            </h1>
            <p>
                Nous sommes à la recherche d'un(e) stagiaire en développement front-end<br> pour une durée de 4 mois. 
                Le stagiaire travaillera en étroite collaboration<br> avec notre équipe de développeurs pour concevoir, 
                développer et maintenir des applications web innovantes et conviviales.
            </p>
        </div>
        <div class="box">
            <h4>Monaco</h4>
            <img src="monaco.png" class="cap">
            <h1>
                Stagiaire Full-stack
            </h1>
            <p>
                Nous sommes à la recherche d'un(e) stagiaire en développement front-end<br> pour une durée de 4 mois. 
                Le stagiaire travaillera en étroite collaboration<br> avec notre équipe de développeurs pour concevoir, 
                développer et maintenir des applications web innovantes et conviviales.
            </p>
        </div>
        <div class="box">
            <h4>Thales</h4>
            <img src="thales.png" class="cap">
            <h1>
                Alternace Full-stack
            </h1>
            <p>
                Nous sommes à la recherche d'un(e) stagiaire en développement front-end<br> pour une durée de 4 mois. 
                Le stagiaire travaillera en étroite collaboration<br> avec notre équipe de développeurs pour concevoir, 
                développer et maintenir des applications web innovantes et conviviales.
            </p>
        </div>
        <div class="support"></div>
        <div class="trouver">Permettez au entreprises de vous découvrir</div>
        
        </form>
</div>

     <footer>
	<?php $_smarty_tpl->_subTemplateRender("file:src/view/templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </footer>
</body>
</html><?php }
}

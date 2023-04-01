<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="public/css/global.css" />
    <link rel="stylesheet" href="public/css/creerentreprise.css" />
    <link rel="stylesheet" href="public/css/header&footer.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rufina:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM_Sans:wght@400;500;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Salsa:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" />
    <link rel="manifest" href="/manifest.json"/>
</head>



<body>
    <header>
        {include file="src/view/templates/header.tpl"}
    </header>
    <div class="crer-une-entreprise">
        {if isset($smarty.session.id_membre) || isset($smarty.session.etudiant) || $smarty.session.etudiant}
            {if (isset($smarty.session.admin) && $smarty.session.admin) || (isset($smarty.session.pilote) && $smarty.session.pilote)}
                <div class="crer-une-entreprise">
                    <div class="titre">Modifier une entreprise</div>
                        <form id=MyForm action="index.php?action=modifierentreprise&id={$entreprise[0]->id_entreprise}" method="post">
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
                                <input class="fefe" type="file" id="logo" name="logo" accept="image/png">
                            </div>
                            <div class="check">
                                Je certifie que toutes les informations entrées sont correctes
                                <input type="checkbox" id="certify" name="certify" required>
                            </div>
                            <button class="create-btn">Modifier</button>
                        </form>
                    </div>
                </div>
            {/if}
        {else}
        <p>Il faut que vous vous authentifiez pour faire cette action !</p>
        <p>Si vous êtes identitifé, c'est que vous n'avez pas les permissions nécessaires !</p>
        <p>Si vous pensez que c'est une erreur, contactez-nous ! !</p>
        {/if}
        <footer>
            {include file="src/view/templates/footer.tpl"}
        </footer>
    </div>
</body>
<script src="public/js/ajaxCodePostal.js"></script>
</html>
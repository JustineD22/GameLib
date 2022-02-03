<form action="index.php?page=login" method="post">
<label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom" placeholder="Votre Nom"/>
    <br/><br/>
    <label for="prenom">Prénom :</label>
    <input type="text" id="prenom" name="prenom" placeholder="Votre Prénom">
    <br/><br/>
    <label for="datenaissance">Date de naissance :</label>
    <input type="date" id="datenaissance" name="datenaissance" placeholder="Date de Naissance">
    <br><br>
    <label for="email">e-mail :</label>
    <input type="text" id="email" name="email" placeholder="Votre e-mail">
    <br/><br/>
    <label for="mdp">Mot de passe : </label>
    <input type="password" name="mdp" id="mdp">
    <br/><br/>
    <label for="mdp2">Confirmation mot de passe :</label>
    <input type="password" name="mdp2" id="mdp2">
    <br/><br/>
    <input type="reset" value="Effacer"/>
    <input type="submit" value="Clique ici pour valider"/>
    <input type="hidden" name="envoi"/>
</form>
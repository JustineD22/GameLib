<form action="index.php?page=inscription" method="post" enctype="multipart/form-data">
    <ul>
        <li>
            <label for="name">Nom :</label>
            <input type="text" id="name" name="name" value="<?php echo $name;?>" />
            <br><br>
        </li>
        <li>
            <label for="firstname">Prénom :</label>
            <input type="text" id="firstname" name="firstname"  value="<?php echo $firstname;?>" />
            <br><br>
        </li>
        <li>
            <label for="email">e-mail :</label>
            <input type="text" id="email" name="email"  value="<?php echo $email;?>" />
            <br><br>
        </li>
        <li>
            <label for="pseudo">Pseudo :</label>
            <input type="text" id="pseudo" name="pseudo"  value="<?php echo $pseudo;?>" />
            <br><br>
        </li>
        <li>
            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" />
            <br><br>
        </li>
        <li>
            <label for="passwordverif">Vérification mot de passe :</label>
            <input type="password" id="passwordverif" name="passwordverif" />
            <br><br>
        </li>
        <li>
            <label for="bio">Bio :</label>
            <textarea id="bio" name="bio"  value="<?php echo $bio;?>"></textarea>
            <br><br>
        </li>
        <li>
            <label for="avatar">Avatar :</label>
            <input type="file" id="avatar" name="avatar" />
            <br><br>
        </li>
        <li>
            <input type="reset" value="Effacer" /><input type="submit" value="S'inscrire" name="inscription" />
    </ul>
</form>
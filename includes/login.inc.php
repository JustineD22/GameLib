<?php


if (isset($_POST['envoi'])) {
    $nom = htmlentities(trim($_POST['nom'])) ?? '';
    $prenom = htmlentities(trim($_POST['prenom'])) ?? '';
    $email = htmlentities(trim($_POST['email'])) ?? '';
    $mdp = htmlentities(trim($_POST['mdp'])) ?? '';
    $mdp2 = htmlentities(trim($_POST['mdp2'])) ?? '';
    $datenaissance = htmlentities(trim($_POST['datenaissance'])) ?? '';

    $erreur = array();

    if (strlen($nom) === 0)
        array_push($erreur, "Veuillez saisir votre nom");

    elseif (!ctype_alpha($nom))
        array_push($erreur, "Veuillez saisir des caractères alphabétiques");

    if (strlen($prenom) === 0)
        array_push($erreur, "Veuillez saisir votre prénom");

    elseif (!ctype_alpha($prenom))
        array_push($erreur, "Veuillez saisir des caractères alphabétiques");

    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        array_push($erreur, "Veuillez saisir un e-mail valide");

    if (strlen($mdp) === 0)
        array_push($erreur, "Veuillez saisir un mot de passe");

    if (strlen($mdp2) === 0)
        array_push($erreur, "Veuillez saisir la vérification de votre mot de passe");

    if ($mdp !== $mdp2)
        array_push($erreur, "Vos mots de passe ne correspondent pas");

    if (strlen($datenaissance) === 0)
        array_push($erreur, "Veuillez saisir votre date de naissance");

        try{
            $conn = new PDO("mysql:host=$serverName;dbname=$database", $userName, $userPassword);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $mdp = password_hash($mdp, PASSWORD_DEFAULT);


            echo "<p>Inserstion effectués </p>";

        }

        catch(PDOException $e){
            die("Erreur :  " . $e->getMessage());
        }

    } else {
        $messageErreur = "<ul>";
        $i = 0;
        do {
            $messageErreur .= "<li>";
            $messageErreur .= $erreur[$i];
            $messageErreur .= "</li>";
            $i++;
        } while ($i < count($erreur));

        $messageErreur .= "</ul>";

        echo $messageErreur;

        echo password_hash($mdp,  PASSWORD_DEFAULT);



    }
} else {
    echo "Merci de renseigner le formulaire";
    $nom = $prenom = $email = '';
}


include './includes/frmFormulaire.php';

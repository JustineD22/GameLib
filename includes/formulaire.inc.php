<?php
if (isset($_POST['frm'])) {
    $nom = trim($_POST['nom']) ?? '';
    $prenom = trim($_POST['prenom']) ?? '';
    $email = trim($_POST['email']) ?? '';
    $mdp = trim($_POST['mdp']) ?? '';
    $mdp2 = trim($_POST['mdp2']) ?? '';

    $erreur = array();

    if (strlen($nom)===0) {
        array_push($erreur, "Veuiller saisir votre nom");
    } 
    elseif (!ctype_alpha($nom)) {
        array_push($erreur, "Veuillez saisir une chaine de caractère alphabéthique");
    }
        
    if (strlen($prenom)===0) {
        array_push($erreur, "Veuiller saisir votre prenom");
    }
    elseif (!ctype_alpha($nom)) {
        array_push($erreur, "Veuillez saisir une chaine de caractère alphabéthique");
    }
        
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      array_push($erreur, "Veuiller saisir un e-mail valide");  
    }

    if (strlen($mdp)===0) {
        array_push($erreur, "Veuillez saisir un mot de passe");
    }

    if (strlen($mdp2)===0) {
        array_push($erreur, "Veuillez confirmer votre mot de passe");
    }
    
    

    if (count($erreur)===0) {
        echo "traitement du formulaire";
    }
    else {
        $messageErreur = "<ul>";
        $i = 0;
        do {
            $messageErreur .= "<li>";
            $messageErreur .= $erreur[$i];
            $messageErreur .= "</li>";
            $i++;
        }
        while ($i < count($erreur));

        $messageErreur .= "</ul>";
        echo $messageErreur;
    }
    
    
}
else {
    echo "Merci de renseigner le formulaire";
    $nom = $prenom = $email = '';
}

include './includes/frmFormulaire.php';


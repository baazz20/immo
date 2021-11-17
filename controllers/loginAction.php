<?php
session_start();
require('database.php');

//Validation du formulaire
if (isset($_POST['validate'])) {

    //Vérifier si l'user a bien complété tous les champs
    if (!empty($_POST['pseudo']) and !empty($_POST['password'])) {

        //Les données de l'user
        $user_pseudo = htmlspecialchars($_POST['pseudo']);
        $user_password = htmlspecialchars($_POST['password']);

        $admin_pseudo = $_POST['pseudo'];
        $admin_password =$_POST['password'];

        //Vérifier si l'utilisateur existe (si le pseudo est correct)
        $checkIfUserExists = $bdd->prepare('SELECT * FROM annonceur WHERE pseudo = ?');
        $checkIfAdminExists = $bdd->prepare('SELECT * FROM `admin` WHERE `peudo` = ?');
        $checkIfUserExists->execute(array($user_pseudo));
        $checkIfAdminExists->execute(array($admin_pseudo));

        if ($checkIfAdminExists->rowCount() > 0) {
            $adminInfos = $checkIfAdminExists->fetch();
            var_dump($adminInfos);
            if ($admin_password == $adminInfos['password']) {

                //Authentifier l'utilisateur sur le site et récupérer ses données dans des variables globales sessions
                $_SESSION['admin'] = true;
                $_SESSION['id'] = $adminInfos['id'];
                $_SESSION['pseudo'] = $adminInfos['pseudo'];
                $_SESSION['nom'] = $adminInfos['nom'];
                
                //Rediriger l'utilisateur vers la page d'accueil
                header('Location: index.php');
            } else {
                $errorMsg = "Votre mot de passe est incorrect...";
            }
        } elseif ($checkIfUserExists->rowCount() > 0) {
            $usersInfos = $checkIfUserExists->fetch();

            if (password_verify($user_password, $usersInfos['mdp'])) {

                //Authentifier l'utilisateur sur le site et récupérer ses données dans des variables globales sessions
                $_SESSION['auth'] = true;
                $_SESSION['id'] = $usersInfos['id'];
                $_SESSION['pseudo'] = $usersInfos['pseudo'];
                $_SESSION['nom_prenom'] = $usersInfos['nom_prenom'];
                $_SESSION['email'] = $usersInfos['mail'];
                $_SESSION['dateCreationCompte'] = $usersInfos['date_creation_compte'];
                $_SESSION['avatar'] = $usersInfos['avatar'];
                //Rediriger l'utilisateur vers la page d'accueil
                header('Location: index.php');
            } else {
                
                $errorMsg = "Votre mot de passe est incorrect...";
            }
        } else {
            $errorMsg = "Votre pseudo est incorrect...";
        }

    } else {
        $errorMsg = "Veuillez compléter tous les champs...";
    }

    
}

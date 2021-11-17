<?php
session_start();
require 'database.php';

//Validation du formulaire
if (isset($_POST['validate'])) {

    $imgname = $_FILES['avatar']['name'];

    $extension = pathinfo($imgname, PATHINFO_EXTENSION);

    $randomno = rand(0, 100000);
    $rename = $_POST['pseudo'] . "_" . date('Ymd') . $randomno;

    $avatar = $rename . '.' . $extension;

    $filename = $_FILES['avatar']['tmp_name'];

    if (move_uploaded_file($filename, 'assets/uploads/' . $avatar)) {

    } else {
        $errorMsg = "Fichier non telechargé";
    }

    //Vérifier si l'user a bien complété tous les champs
    if (!empty($_POST['pseudo']) and !empty($_POST['nom_prenom']) and !empty($_POST['email']) and !empty($_POST['mdp'])) {

        //Les données de l'user
        $user_pseudo = htmlspecialchars($_POST['pseudo']);
        $user_nomPrenom = htmlspecialchars($_POST['nom_prenom']);
        $user_email = htmlspecialchars($_POST['email']);
        $user_tel = htmlspecialchars($_POST['tel']);
        $user_password = password_hash($_POST['mdp'], PASSWORD_DEFAULT);
        $dateCreationDeCompte = date('Y-m-d H:i:s');

        //Vérifier si l'annonceur existe déjà sur le site
        $estCeQueLePseudoExist = $bdd->prepare('SELECT pseudo FROM annonceur WHERE pseudo = ?');
        $estCeQueLePseudoExist->execute(array($user_pseudo));

        if ($estCeQueLePseudoExist->rowCount() == 0) {

            //Insérer l'annonceur dans la bdd
            $insertUserOnWebsite = $bdd->prepare('INSERT INTO annonceur(
                pseudo,
                nom_prenom,
                mail,
                tel,
                mdp,
                date_creation_compte,
                avatar)VALUES(?, ?, ?, ?, ?, ?, ?)');
            $insertUserOnWebsite->execute(array(
                $user_pseudo,
                $user_nomPrenom,
                $user_email,
                $user_tel,
                $user_password,
                $dateCreationDeCompte,
                $avatar));

            //Récupérer les informations de l'annonceur
            $recuperInfoannonceur = $bdd->prepare('SELECT id, pseudo, nom_prenom, mail, tel, date_creation_compte, avatar FROM annonceur WHERE pseudo = ? AND nom_prenom = ? AND mail = ?');
            $recuperInfoannonceur->execute(array($user_pseudo, $user_nomPrenom, $user_email));

            $usersInfos = $recuperInfoannonceur->fetch();

            //Authentifier l'annonceur sur le site et récupérer ses données dans des variables globales sessions
            $_SESSION['auth'] = true;
            $_SESSION['id'] = $usersInfos['id'];
            $_SESSION['pseudo'] = $usersInfos['pseudo'];
            $_SESSION['nom_prenom'] = $usersInfos['nom_prenom'];
            $_SESSION['email'] = $usersInfos['mail'];
            $_SESSION['tel'] = $usersInfos['tel'];
            $_SESSION['dateCreationCompte'] = $usersInfos['date_creation_compte'];
            $_SESSION['avatar'] = $usersInfos['avatar'];
            session_start();



            //Rediriger l'annonceur vers la page d'accueil
            header('Location: index.php');

        } else {
            $errorMsg = "L'annonceur existe déjà sur le site";
        }

    } else {
        $errorMsg = "Veuillez compléter tous les champs...";
    }

}

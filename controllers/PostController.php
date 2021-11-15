<?php

require('database.php');

//Valider le formulaire
// if(isset($_POST['finish'])){

//     //Vérifier si les champs ne sont pas vides
//     if(!empty($_POST['title']) AND !empty($_POST['description']) AND !empty($_POST['content'])){
        
//         //Les données de la question
//         $question_title = htmlspecialchars($_POST['title']);
//         $question_description = nl2br(htmlspecialchars($_POST['description']));
//         $question_content = nl2br(htmlspecialchars($_POST['content']));
//         $question_date = date('d/m/y');
//         $question_id_author = $_SESSION['id'];
//         $question_pseudo_author = $_SESSION['pseudo'];
        

//         //Insérer la question sur la question
//         $insertQuestionOnWebsite = $bdd->prepare('INSERT INTO questions(titre, description, contenu, id_auteur, pseudo_auteur, date_publication)VALUES(?, ?, ?, ?, ?, ?)');
//         $insertQuestionOnWebsite->execute(
//             array(
//                 $question_title, 
//                 $question_description, 
//                 $question_content, 
//                 $question_id_author, 
//                 $question_pseudo_author, 
//                 $question_date
                
//             )
//         );
        
//         $successMsg = "Votre question a bien été publiée sur le site";
        
//     }else{
//         $errorMsg = "Veuillez compléter tous les champs...";
//     }

// }

if (isset($_POST['finish'])) {

    $image1 = $_FILES['photo1']['name'];
    $image2 = $_FILES['photo2']['name'];
    $image3 = $_FILES['photo3']['name'];

    $extension1 = pathinfo($image1, PATHINFO_EXTENSION);
    $extension2 = pathinfo($image2, PATHINFO_EXTENSION);
    $extension3 = pathinfo($image3, PATHINFO_EXTENSION);

    $randomno1 = rand(0, 100000);
    $randomno2 = rand(0, 100000);
    $randomno3 = rand(0, 100000);
    $image1rename = $_POST['titre'] . "_" . date('Ymd') . $randomno1;
    $image2rename = $_POST['titre'] . "_" . date('Ymd') . $randomno2;
    $image3rename = $_POST['titre'] . "_" . date('Ymd') . $randomno3;

    $photo1 = $image1rename . '.' . $extension1;

    $photo2 = $image2rename . '.' . $extension2;

    $photo3 = $image3rename . '.' . $extension3;

    $photo1filename = $_FILES['photo1']['tmp_name'];

    $photo2filename = $_FILES['photo2']['tmp_name'];

    $photo3filename = $_FILES['photo3']['tmp_name'];

    if (move_uploaded_file($photo1filename, '../public/uploads/photoExt/' . $photo1) and move_uploaded_file($photo2filename, '../public/uploads/photoSalon/' . $photo2) and move_uploaded_file($photo3filename, '../public/uploads/photoChambre/' . $photo3)) {

    } else {
        $errorMsg = "Fichier non telechargé";
    }
    
    $cni = $_POST['cni'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $dateN = $_POST['dateN'];
    $naissL = $_POST['naissL'];
    $telephone = $_POST['telephone'];
    $email = $_POST['email'];
    $profession = $_POST['profession'];
    // $photo = $_POST['photo'];
    // $signature = $_POST['signature'];
    $sexe = $_POST['sexe'];

    // if ($_SESSION['role'] === "super_admin" || "admin") {
        // verifie si le compte existe deja
    $select = mysqli_query($conn, "SELECT * FROM client WHERE cni_passport = '" . $_POST['cni'] . "'");
    if (mysqli_num_rows($select)) {
        $errorMsg = "Ce compte existe dejà !";
    }else{
        // insertion dans la table client
            $query = "INSERT INTO client(
                cni_passport,
                nomclient,
                prenomclient,
                datenaiss,
                lieunaiss,
                telephone,
                email,
                profession,
                lienphoto,
                liensignature,
                sexe) VALUES (
                    '$cni',
                    '$nom',
                    '$prenom',
                    '$dateN',
                    '$naissL',
                    '$telephone',
                    '$email',
                    '$profession',
                    '$photo',
                    '$signature',
                    '$sexe')";
            $query_run = mysqli_query($conn, $query);
            // move_uploaded_file($_FILES['photo']['tmp_name'], "uploads/$photo");

            if ($query_run) {
                header("Location: ../tables.php");
            } else {
                // header("Location: ../tables.php");
                echo 'requette non executer';

            }
}
    var_dump($query_run);

    // } else {
    //     // $erreur = "vous n'etre autorisé a ouvrir un compte";
    //     // header("Location: ../tables.php");
    //     echo "vous n'etre autorisé a ouvrir un compte";

    // }

} 
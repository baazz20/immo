<?php
session_start();

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

    $randomno = rand(0, 100000);
    $image1rename = $_POST['titre'] . "_" . date('Ymd') . $randomno;
    $image2rename = $_POST['titre'] . "_" . date('Ymd') . $randomno;
    $image3rename = $_POST['titre'] . "_" . date('Ymd') . $randomno;

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
    
    $suface = $_POST['surface'];
    $ville = $_POST['ville'];
    $titre = $_POST['titre'];
    $prix = $_POST['prix'];
    $categorie = $_POST['categorie'];
    $description = $_POST['description'];
    $question_date = date('Y-m-d H:i:s');
    $id_annonceur = $_SESSION['id'];
    
    $insertAnnonceOnWebsite = $bdd->prepare('INSERT INTO annonce(suface, ville, titre, prix, id_categorie, description, date_creation, id_annonceur, photoExt, photoSalon, photoChambre)VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
    $insertAnnonceOnWebsite->execute(
                    array(
                        $suface, 
                        $ville, 
                        $titre, 
                        $prix, 
                        $categorie, 
                        $description,
                        $question_date,
                        $id_annonceur,
                        $photo1,
                        $photo2,
                        $photo3));

                        $successMsg = "Votre Annonce a bien été publiée sur le site";
                        header('Location: ../public/post.php');


} 
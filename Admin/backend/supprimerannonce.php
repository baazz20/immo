<?php
            session_start();
            require_once('CnxPDO.php');

            $idf=isset($_GET['idF'])?$_GET['idF']:0;

            $requete="select * from annonce where id=$idf";
            $resultat=$bdd->query($requete);
            $tabCount=$resultat->fetch();
            if(count($nbrStag)==0){
                $requete="delete from annonce where id=?";
                $params=array($idf);
                $resultat=$bdd->prepare($requete);
                $resultat->execute($params);
                if (isset($_SESSION['admin'])) {
                    header('location:../annonce.php');
                } else {
                    header('location:../../about-us.php');
                }
                
            }else{
                $msg="Suppression impossible";
                header("location:alerte.php?message=$msg");
            }
    
?>
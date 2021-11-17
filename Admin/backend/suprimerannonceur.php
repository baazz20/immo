<?php
            session_start();
            require_once('CnxPDO.php');

            $idf=isset($_GET['idF'])?$_GET['idF']:0;

            $requete="select * from annonceur where id=$idf";
            $resultat=$bdd->query($requete);
            $tabCount=$resultat->fetch();
            if(count($nbrStag)==0){
                $requete="delete from annonceur where id=?";
                $params=array($idf);
                $resultat=$bdd->prepare($requete);
                $resultat->execute($params);
                header('location:../annonceurs.php');
            }else{
                $msg="Suppression impossible";
                header("location:alerte.php?message=$msg");
            }
    
            $requete2="select * from annonce where id_annonceur=$idf";
            $resultat2=$bdd->query($requete2);
            $tabCount=$resultat2->fetch();
            if(count($nbrStag2)==0){
                $requete2="delete * from annonce where id=?";
                $params2=array($idf);
                $resultat2=$bdd->prepare($requete2);
                $resultat2->execute($params2);
                header('location:../annonceurs.php');
            }else{
                $msg2="Suppression impossible";
                header("location:alerte.php?message=$msg2");
            }
?>
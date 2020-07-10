<?php
    try{  

        $connect = new PDO('pgsql:host=localhost ;port=5432; dbname=postgres', 'projet', '');
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connect->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

        $connect->exec('SET search_path TO public, projet');

    } catch(Exception $e){
        echo "Erreur de connexion: ".$e->getMessage();
        die(); // pour interrompre le traitement d'une requete
    }
?>

<?php
    if(isset($_POST['suivantC'])) {
        inscrire($connect);
        header("location:inscriptionParticipantEquipier.php");

    }else if(isset($_POST['suivantE'])){
        inscrire($connect);
        header("location:inscriptionEquipe.php");
    }
    

?>

<?php

    function inscrire($connect){
        try{    
                //$content_dir = 'upload/'; // dossier où sera déplacé le fichier
    
                $tmp_file = $_FILES['fichier']['tmp_name'];
    
                if( !is_uploaded_file($tmp_file) )
                {
                    $attestation = 'false';
                // exit("Le fichier est introuvable");
    
                }else{
                    $attestation = 'true';
                }
    
                // on vérifie maintenant l'extension
                $type_file = $_FILES['fichier']['type'];
    
                if( !strstr($type_file, 'pdf') && !strstr($type_file, 'doc') && !strstr($type_file, 'bmp') && !strstr($type_file, 'gif') )
                {
                    //exit("Le fichier n'est pas bon");
                }else{
                    $attestation = 'true';
                }
    
                // on copie le fichier dans le dossier de destination
                $name_file = $_FILES['fichier']['name'];
                //$attestation = 'true';
                /*
                if( !move_uploaded_file($tmp_file, $content_dir . $name_file) )
                {
                    //exit("Impossible de copier le fichier dans $content_dir");
                }else{
                    $attestation = 'true';
                }*/
            
            
            var_dump('Vianney');
                if(isset($_POST['firstname']) AND isset($_POST['lastname']) AND isset($_POST['datenaissance']) AND isset($_POST['mail']) AND isset($_POST['tel']) AND isset($_POST['adresse'])    )
                {
                    $nom = $_POST['firstname'];
                    $prenom = $_POST['lastname'];
                    $date = $_POST['datenaissance'];
                    $mail = $_POST['mail'];
                    $tel = $_POST['tel'];
                    $adresse = $_POST['adresse'];
                    
    
                    var_dump('Paul');
                    inscriptionParticipant($connect, $nom, $prenom, $date, $tel, $mail, $adresse, $attestation) ;
                    
                    var_dump('Wilfried');
                }
                var_dump('Vianney - 2');
            
        }catch(Exception $e){
            echo "Erreur de connexion: ".$e->getMessage()."<br/>";            
            die(); // pour interrompre le traitement d'une requete
        }
    }

    function inscriptionParticipant($connect, $nom, $prenom, $date, $tel, $mail, $adresse, $attestation){
        $insert = $connect->prepare('INSERT INTO participant (nom, prenom, date_naiss, telephone, email, adresse, attestations_ok, frais_paye, repas_supplementaire, id_velo, valider) 
                                VALUES (:nom, :prenom, :date_naiss, :telephone, :email, :adresse, :attestations_ok, :frais_paye, :repas_supplementaire, :id_velo, :valider)' );
        $frais = 0;
        $repasSup = 0;
        $idVelo = 1;
        $valider = 'false';
        
        var_dump('Joel');
        $insert ->execute(array(
            'nom' => $nom,
            'prenom' => $prenom,
            'date_naiss' => $date,
            'telephone' => $tel,
            'email' => $mail,
            'adresse' => $adresse,
            'attestations_ok' => $attestation,
            'frais_paye' => $frais,
            'repas_supplementaire' => $repasSup,
            'id_velo' => $idVelo,
            'valider' => $valider
        ));
    }
?>
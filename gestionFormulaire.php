<?php
    try{  

        //$connect = new PDO("pgsql:dbname=postgres;host=localhost", "projet", "");

        $connect = new PDO('pgsql:host=localhost ;port=5432; dbname=postgres', 'projet', '');
        
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connect->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

        $connect->exec('SET search_path TO public, projet');

        /*$sql = $connect->prepare('SELECT * FROM benevole');
        $sql->execute();
        while($rs = $sql->fetch()){
            echo $rs['nom']."------";
        }
        echo"---------------------------------------------".'<br>'.'<br>'.'<br>';
        */

    } catch(Exception $e){
        echo "Erreur de connexion: ".$e->getMessage();
        die(); // pour interrompre le traitement d'une requete
    }
?>

<?php
/****************************** recuperation des donnees du formaulaire Benevoles *************************/ 
    try{
        if(isset($_POST['inscrireB'])){




                $tmp_file = $_FILES['fichier']['tmp_name'];

                if( !is_uploaded_file($tmp_file) )
                {
                    $permis = 'false';
                   // exit("Le fichier est introuvable");

                }else{
                    $permis = 'true';
                }

                // on vérifie maintenant l'extension
                $type_file = $_FILES['fichier']['type'];

                if( !strstr($type_file, 'pdf') && !strstr($type_file, 'doc') && !strstr($type_file, 'bmp') && !strstr($type_file, 'gif') )
                {
                    //exit("Le fichier n'est pas bon");
                }else{
                    $permis = 'true';
                }

                // on copie le fichier dans le dossier de destination
                $name_file = $_FILES['fichier']['name'];
                //$permis = 'true';

                if( !move_uploaded_file($tmp_file, $content_dir . $name_file) )
                {
                    //exit("Impossible de copier le fichier dans $content_dir");
                }else{
                    $permis = 'true';
                }

                /* create new name file */
               /* $nom = $_POST['firstname'];
                $prenom = $_POST['lastname'];

                $filename   = $nom." ".$prenom; // 5dab1961e93a7-1571494241
                $filename = str_replace(" ", "", $filename);
                $extension  = pathinfo( $_FILES["fichierP"]["name"], PATHINFO_EXTENSION ); // jpg
                $basename   = $filename . '.' . $extension; // 5dab1961e93a7_1571494241.jpg

                $source       = $_FILES["fichier1"]["tmp_name"];
                $destination  = "filesb/";

                /* move the file 
                move_uploaded_file( $source, $destination );*/



                


            if(isset($_POST['firstname']) AND isset($_POST['lastname']) AND isset($_POST['datenaissance']) 
                         AND isset($_POST['mail']) AND isset($_POST['tel']) AND isset($_POST['poste']) ){
                 var_dump('insertion 1');
                
                 inscription_Benevole($connect, $_POST['firstname'], $_POST['lastname'], $_POST['adresse'], $_POST['mail'], $_POST['poste'], 
                                     $_POST['datenaissance'], $permis );
             } 
     
             var_dump('insertion');
             header("location:index.php");
             exit();
         }  
    }catch(Exception $e){
        echo "Erreur de connexion: ".$e->getMessage()."<br/>";
        die(); // pour interrompre le traitement d'une requete
    }
    
?>

<?php
/****************************** Inscription dans la base de donnees *************************/ 
    
    function inscription_Benevole($connect, $nom, $prenom, $adresse, $mail, $poste, $dateN, $permis){
        try{
            $insert = $connect->prepare('INSERT INTO benevole(nom, prenom, adresse, email, id_poste, permis_conduire, date_naissance, membre_ok, valider) 
                                        VALUES(:nom, :prenom, :adresse, :email, :id_poste, :permis_conduire, :date_naissance, :membre_ok, :valider)');
            $idPoste = 1;
            $typeBenevole = 2;
            $membre_ok = 'false';
            $valider = 'false';

            //////////////////////////////////////////////////////////////////////////////////////////
            if( isset($_POST['upload']) ) // si formulaire soumis
            {
                $permis = 'true';
               /* $content_dir = 'upload/'; // dossier où sera déplacé le fichier

                $tmp_file = $_FILES['fichier']['tmp_name'];

                if( !is_uploaded_file($tmp_file) )
                {
                    exit("Le fichier est introuvable");
                }

                // on vérifie maintenant l'extension
                $type_file = $_FILES['fichier']['type'];

                if( !strstr($type_file, 'jpg') && !strstr($type_file, 'jpeg') && !strstr($type_file, 'bmp') && !strstr($type_file, 'gif') )
                {
                    exit("Le fichier n'est pas une image");
                }

                // on copie le fichier dans le dossier de destination
                $name_file = $_FILES['fichier']['name'];

                if( !move_uploaded_file($tmp_file, $content_dir . $name_file) )
                {
                    exit("Impossible de copier le fichier dans $content_dir");
                }*/

                echo "Le fichier a bien été uploadé";
            }
            //////////////////////////////////////////////////////////////////////////////////////////////
 
            $insert ->execute(array(
                'nom' => $nom,
                'prenom' => $prenom,
                'adresse' => $adresse,
                'email' => $mail,
                'id_poste' => $idPoste,
                'permis_conduire' => $permis,
                'date_naissance' => $dateN,
                'membre_ok' => $membre_ok,
                'valider' => $valider
            ));
            var_dump('insertion reussit');

           // posteSouhaiter($connect, $poste, $nom, $prenom);
        }catch(Exception $e){
            echo "Erreur d'insertion ".$e->getMessage();
        }

    }

    function posteSouhaiter($connect, $poste, $nomB, $prenomB){
        var_dump('insertion 5');
        $insert = $connect->prepare('INSERT INTO posteSouhaiter (poste, nom, prenom, idBenevole) 
                                VALUES(:poste, :nom, :prenom, :idBenevole)');
                                var_dump('insertion 6');
        $idB = 1;
        $insert->execute(array(
            'poste' => $poste,
            'nom' => $nomB,
            'prenom' => $prenomB,
            'idBenevole' => $idB
        ));
        var_dump('insertion 7');
    }
    
?>

<?php
    /*function ajout_utilisateur($connect, $login, $password, $droit){
        $ajout = $connect->prepare('INSERT INTO utilisateur(login, password, droit) VALUES(:login, :password, :droit)');
        $ajout->execute(array(
            'login' => $login,
            'password' => $password,
            'droit' => $droit
        ));
    }*/
?>
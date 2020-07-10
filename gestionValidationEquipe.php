<?php
    try{  

        //$connect = new PDO("pgsql:dbname=postgres;host=localhost", "projet", "");

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
    if(isset($_POST['enregistrer'])){
        if(isset($_POST['nomEquipe']) AND isset($_POST['RadioBol']) AND isset($_POST['categorie'])){
            $nomEqipe = $_POST['nomEquipe'];
            $typeBol = $_POST['RadioBol'];
            $categorie = $_POST['categorie'];

            $request = $connect->prepare('SELECT matricule_p FROM participant ORDER BY matricule_p DESC LIMIT 1');
            $request->execute();
            $rs = $request->fetch();

            echo "---------------------------------------".$rs['matricule_p'];
            
            $idEquipier = $rs['matricule_p'];
            $idCapitaine = $rs['matricule_p'] - 1;

            $result = $connect->prepare('SELECT numero_dossard FROM dossard ORDER BY numero_dossard DESC LIMIT 1');
            $result->execute();
            $rq = $result->fetch();
            $numDossard = $rq['numero_dossard'] + 1;

            enregistrerDossard($connect, $numDossard) ;

            $idCourse = 1;
            enregistrerEquipe($connect, $nomEqipe, $idCapitaine, $idEquipier, $idCourse, $numDossard);
        }

        header("location:index.php");
    }
?>

<?php   
   function enregistrerEquipe($connect, $nomEqipe, $idCapitaine, $idEquipier, $idCourse, $numDossard){
       $req = $connect->prepare('INSERT INTO equipe (nom_equipe, id_capitaine, id_equipier, id_course, numero_dossard) 
                                            VALUES(:nom_equipe, :id_capitaine, :id_equipier, :id_course, :numero_dossard) '); 

        $req->execute(array(
            'nom_equipe' => $nomEqipe,
            'id_capitaine' => $idCapitaine,
            'id_equipier' => $idEquipier,
            'id_course' => $idCourse,
            'numero_dossard' => $numDossard
        ));
   }
                
?>

<?php
     function enregistrerDossard($connect, $numDossard){
        $requete = $connect->prepare('INSERT INTO dossard (numero_dossard)  VALUES(:numero_dossard) ');
        $requete->execute(array(
            'numero_dossard' => $numDossard
        ));
    }
?>
<?php
    try{  
        $connect = new PDO('mysql: host=localhost; dbname=tutorat', "root", "sql@gmail.com");
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(Exception $e){
        echo "Erreur PDO: ".$e->getMessage()."<br/>";
        die(); // pour interrompre le traitement d'une requete
    }
?>

<?php
/****************************** recuperation des donnees du formaulaire *************************/ 
    if(isset($_POST['submit'])){
       if(isset($_POST['nom']) AND isset($_POST['prenom']) AND isset($_POST['classe']) AND isset($_POST['mail']) 
                            AND isset($_POST['password']) AND isset($_POST['confirmPassword'])){

        inscription_etudiant($connect, $_POST['nom'], $_POST['prenom'], $_POST['classe'], $_POST['mail'], $_POST['sexe'], 
                                $_POST['password'], $_POST['date']);
        } 

        ajout_utilisateur($connect, $_POST['mail'], $_POST['password'], $droit);

        header("location:index.php");
        exit();
    }
    else if(isset($_POST['submitTuteur'])){
        if(isset($_POST['nom']) AND isset($_POST['prenom']) AND isset($_POST['classe']) AND isset($_POST['mail']) AND 
                            isset($_POST['matiere']) AND isset($_POST['password']) AND isset($_POST['confirm_password'])){
                                
            inscription_tuteur($connect, $_POST['nom'], $_POST['prenom'], $_POST['classe'], $_POST['mail'], $_POST['matiere'], 
                                                    $_POST['professeur'], $_POST['password']);
            header("location:index.php");
            exit();
        }
    }
?>

<?php
/****************************** Inscription dans la base de donnees *************************/ 
    function inscription_etudiant($connect, $nom, $prenom, $classe, $mail, $sexe, $password, $date){
         $insert = $connect->prepare('INSERT INTO etudiant(nom, prenom, classe, mail, sexe, password, date) 
                            VALUES(:nom, :prenom, :classe, :mail, :sexe, :password, :date)');
        $insert ->execute(array(
            'nom' => $nom,
            'prenom' => $prenom,
            'classe' => $classe,
            'mail' => $mail,
            'sexe' => $sexe,
            'password' => $password,
            'date' => $date
        ));
        /* $stmt=$connect->prepare('INSERT INTO etudiant (nom, prenom, classe, mail, sexe, password, date) 
                            VALUES (:nom, :prenom, :classe, :mail, :sexe, :password, :date)');
        $stmt -> bindParam(':nom', $nom);
        $stmt -> bindParam(':prenom', $prenom);
        $stmt -> bindParam(':classe', $classe);
        $stmt -> bindParam(':mail', $mail);
        $stmt -> bindParam(':sexe', $sexe);                                 // Sa marche aussi
        $stmt -> bindParam(':password', $password);
        $stmt -> bindParam(':date', $date); 
        $stmt ->execute(); */
    }
?>

<?php
    function ajout_utilisateur($connect, $login, $password, $droit){
        $ajout = $connect->prepare('INSERT INTO utilisateur(login, password, droit) VALUES(:login, :password, :droit)');
        $ajout->execute(array(
            'login' => $login,
            'password' => $password,
            'droit' => $droit
        ));
    }
?>

<?php
    function inscription_tuteur($connect, $nom, $prenom, $classe, $mail, $matiere, $prof_ref, $password){
        $inscrip = $connect->prepare('INSERT INTO tuteur(nom, prenom, classe, mail, matiere, professeur) 
                                        VALUE(:nom, :prenom, :classe, :mail, :matiere, :professeur, :password)');
        $inscrip->execute(array(
            'nom' => $nom,
            'prenom' => $prenom,
            'classe' => $classe,
            'mail' => $mail,
            'matiere' => $matiere,
            'professeur' => $prof_ref,
            'password' => $password
        ));
    }
?>
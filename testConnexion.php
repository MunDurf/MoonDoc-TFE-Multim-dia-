<?php 
 try{
    $bdd= new PDO('mysql:host=localhost;dbname=audric;charset=utf8','root','');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
  }
  catch(Exception $e)
      {
          die('Scout un jour scout toujours!!! N" abandonne pas!: '.$e->getMessage());
      }
 
    $req=$bdd->prepare('SELECT pseudo, mdp , niveau FROM utilisateur WHERE pseudo=:pseudo ' );
    $req->execute(array('pseudo'=>$_POST['pseudo']));
    $resultat=$req ->fetch();

    if($_POST['mdp'] == $resultat['mdp'])
    {
     echo "Le mot de passe est correcte";  
         session_start();
        $_SESSION['prenom'] = $resultat['prenom'];
        $_SESSION['nom'] = $resultat['nom'];
        $_SESSION['classe'] = $resultat['classe'];
        $_SESSION['niveau']=$resultat['niveau'];
        $cookie_name= 'nom';
        $cookie_value= $_SESSION['nom']; 
        header('Location:../index.php');
    
    } 
    else
    {
    
        echo "Le mot de passe est incorecte ";

    }

 ?>

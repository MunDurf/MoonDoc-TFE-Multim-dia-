<?php 
 try{
    $bdd= new PDO('mysql:host=localhost;dbname=audric;charset=utf8','root','');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
  }
  catch(Exception $e)
      {
          die('Scout un jour scout toujours!!! N" abandonne pas!: '.$e->getMessage());
      }


	if ($_POST['niveau']=='Admin')
	 {
			
		$niveau='0';

	}
	else
	{

		$niveau='1';

	}
	
	$req = $bdd->prepare('INSERT INTO utilisateur(nom,prenom,adresse,pseudo,niveau,mdp) VALUES(:nom,:prenom,:adresse,:pseudo,:niveau,:mdp)');
	$req->execute(array('nom'=>$_POST['nom'],'prenom'=>$_POST['prenom'],'adresse'=>$_POST['adresse'],'pseudo'=>$_POST['pseudo'],'niveau'=>$niveau,'mdp'=>$_POST['Confirmer']));

        header('Location:../index.php');
	

?>
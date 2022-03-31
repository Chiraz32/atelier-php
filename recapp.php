<?php

$dossier= "uploads/";;



    if(is_uploaded_file($_FILES['fichier']['tmp_name']))
    {  $nom_fichier=$_FILES['fichier']['name'];

       if(move_uploaded_file( $_FILES['fichier']['tmp_name'] ,$dossier.$nom_fichier))
         {
          echo "<p>Le fichier $nom_fichier a été déplacé dans le repertoire $dossier</p>" ;
          }

      else{
//il ya eu une erreur
            echo "<p>Erreur lors du déplacement du fichier $nom_fichier</p>";
          };
      }
    else{
        echo "<p>Aucun fichier séléctionné</p>";
        };



echo  nl2br(" votre nom est : ".strip_tags($_POST['my_name']). "\n")  ;
echo nl2br(" votre prenom est : ".strip_tags($_POST['my_surname'])."\n");
echo nl2br("le nombre des sandwitchs  est : ".strip_tags($_POST['nbr']) ."\n");
echo nl2br( " Votre adresse  est : ".strip_tags($_POST['adr'] )."\n" );
echo nl2br(" le type de votre Sandwitch est : ". strip_tags($_POST['options'])." \n");

$nomb= $_POST["nbr"];
  $prix=0;
  function calcul_prix($nomb)
{ if ($nomb <10)
 $prix=$nomb*4;
else $prix =$nomb*4*0.9;

echo nl2br( "le prix de votre commande est $prix"." \n");
};

calcul_prix($nomb
);
echo" la valeur  aleatoire unique est ".rand();

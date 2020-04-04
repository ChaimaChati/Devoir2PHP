<?php 

     echo "<h1>Validation de la date</h1>";
     if(isset($_POST['jour']) && isset($_POST['mois']) && isset($_POST['Annee'])   )
        {
            echo "la date saisie est :" .$_POST['jour']."/" .$_POST['mois']."/".$_POST['Annee']."</br>" ;
            validate($_POST['jour'], $_POST['mois'],$_POST['Annee'] ) ;
        }
    


function Validate($jour, $mois ,$annee )
{
    if(($jour<0 || $jour>31) || ($mois<0 || $mois>12) )
        {
            echo "la date saisie est "."<span style='color:red'>"." Date Invalide"."</span>" ;
        }
    elseif ($jour>30 && ($mois==4 ||$mois==6 ||$mois==9||$mois==11))
        {
        echo "la date saisie est "."<span style='color:red'>"." Date Invalide"."</span>" ;
        }
    elseif ($jour>28 && $mois==2 && $annee%4 !=0 )
        {
        echo "l'annee " .$annee."est non bissextile : "."<span style='color:red'>"." Date Invalide"."</span>" ;
        }
    else
        {
            echo "<span style='color:lightgreen'>"." Date valide"."</span>" ; ;
        }

}

?>



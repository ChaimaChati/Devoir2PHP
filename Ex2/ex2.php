<?php


try{
    $file=fopen("commandes.txt","r");
    }catch(exception $e){
        die("ERROR ".$e);
}
try{
    $c1=fopen("pscde01_CLI1001.txt","w+");
    }catch(exception $e){
        die("ERROR ".$e);
}
try{
    $c4=fopen("pscde01_CLI1004.txt","w+");
    }catch(exception $e){
        die("ERROR ".$e);
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>ex3</title>
</head>
<body>

  
    <h2>Commande Clients</h2>
        <table border=1 style="width: 1300px;">
    <tr bgcolor='lightsteelblue'>
        <th>Numero de commande</th>
        <th>Numero Client</th>
        <th>Date de commande</th>
        <th>Désignation article/th>
        <th>Quantité</th>
        <th>prix unitaire</th>
        <th>Date de livraison</th>
        <th>Adresse client</th>
    </tr>
<?php

    while (!feof($file)) {
        $ligne = fgets($file);
        echo"<tr>";
        $arr=explode("|",$ligne);

            if($arr[1]=="CLI1001"){

        fprintf($c1,"%s",$ligne);
    }
    else if($arr[1]=="CLI1004"){
        fprintf($c4,"%s",$ligne);
    }

        foreach($arr as $cellule){
        echo "<td>".$cellule."</td>";
    }
    echo"</tr>";
    }

    fclose($file);

?>
</table>
</body>
</html>

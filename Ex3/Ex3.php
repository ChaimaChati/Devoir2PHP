<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>

<body>
<h1>Choisir une date </h1>
<!--action="traitement.php"!-->


<form method="post"  action="valideDate.php">
    <p>
        <div style="margin-bottom: 10px;">
            <label >Jour  </label>
            <label style="margin-left: 150px;">Mois</label>
            <label style="margin-left: 140px;">Annee</label>
        </div>
        <input type="number" name="jour"  placeholder="Jour" size="30" maxlength="10" />
        <input type="number" name="mois"  placeholder="Mois" size="30" maxlength="10" />
        <input type="number" name="Annee"  placeholder="Annee" size="30" maxlength="10" />
        <div style="margin-top: 10px;">
            <input type="submit" value="Envoyer">
        </div>
        
    </p>
</form>
</body>
</html>
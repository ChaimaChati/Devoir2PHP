<?php 
// Validation 
function mail_valide()
{
	$mail = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL) ; 
	if ($mail === FALSE)
		 return FALSE;
	else
		return TRUE;
}

function mdp_valide()
{
	$mdp= $_POST["mdp"];
	if(strlen($mdp)>7)
	{
			if (preg_match('#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W)#', $mdp)) 
				return TRUE;
			else
				return FALSE;
	}
	else
		return FALSE;
}

function test()
{
	$infos = fopen("login.txt", "r") or die("Impossible d'ouvrir le fichier!");
	while (!feof($infos)) {
    	$ligne = fgets($infos);
		$arr = explode("|", $ligne);

			if ($arr[0] == $_POST["email"] && $arr[1] == $_POST["mdp"])
				{
					return	TRUE;		
					exit();
				}
	}
}    

if (isset($_POST["email"]) && !empty($_POST["email"]) && isset($_POST["mdp"]) && !empty($_POST["mdp"]))
{
		if(mail_valide()===TRUE && mdp_valide()===TRUE)
		{
			test();
			if (test()===TRUE) 
			{
				echo "Authentification réussie";
			}
			else
				echo "Login inexistant";
		}
		else
			echo "login ou mot de passe incorrect";
}
else
	 echo 'login ou mot de passe n était pas définie.' ; 

 ?>

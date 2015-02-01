<?php

$desactive = ini_get('disable_functions');

if (preg_match("/ini_set/i", "$desactive") == 0) {
	ini_set("error_reporting" , "E_ALL & ~E_NOTICE");
}

if (isset($_POST['envoi'])) {

	session_start();

	$_SESSION['name'] = $_POST['name'];
	$_SESSION['email'] = $_POST['email'];
	$_SESSION['message'] = $_POST['message'];

	$flag_icone = 0;


	if ($flag_icone == 0) {
		$icone = "<b><font size=\"3\" face=\"Arial, Verdana, Helvetica, sans-serif\" color=\"#CC0000\">x</font></b>";
	} 
	else {
		$icone = "<img src=\"images/icone.gif\"";
	}


	$flag_erreur = 0;

	if ($flag_erreur == 0) {					
		//				*****  Addresse de réception du formulaire *****
		$email_dest = "sellathurai.vyach@sellathuraivyach.byethost7.com";

		$sujet = "message contact portfolio";
		
		$entetes ="MIME-Version: 1.0 \n";
		$entetes .="From: Contacteur portfolio<sellathurai.vyach@sellathuraivyach.byethost7.com>\n";
		$entetes .="Return-Path: Contacteur portfolio<sellathurai.vyach@sellathuraivyach.byethost7.com>\n";
		$entetes .="Reply-To: Contacteur portfolio<sellathurai.vyach@sellathuraivyach.byethost7.com>\n";
		$entetes .="Content-Type: text/html; charset=iso-8859-1 \n";
		
		$partie_entete = "<html>\n<head>\n<title>Formulaire</title>\n<meta http-equiv=Content-Type content=text/html; charset=UTF-8>\n</head>\n<body bgcolor=#FFFFFF>\n";


		// 				*****  Créaction du message HTML à envoyé  *****
		$partie_champs_texte .= "<font face=\"Verdana\" size=\"2\" color=\"#003366\">Nom de l'expediteur : " . $_SESSION['name'] . "</font><br/>\n";
		$partie_zone_email .= "<font face=\"Verdana\" size=\"2\" color=\"#003366\">Son e-mail : " . $_SESSION['email'] . "</font><br/>\n";
		$partie_zone_texte .= "<font face=\"Verdana\" size=\"2\" color=\"#003366\">Son message : " . $_SESSION['message'] . "</font><br/>\n";
					

		// 				*****  Fin du message HTML  *****
		$fin = "</body></html>\n\n";
					
		$sortie = $partie_entete . $partie_champs_texte . $partie_zone_email . $partie_listes . $partie_boutons . $partie_cases . $partie_zone_texte . $fin;


		// 				*****  Envoi du mail  *****
		if (@!mail($email_dest,$sujet,$sortie,$entetes)) {
			
			echo("Envoi du formulaire impossible");
			exit();
		} 
		else {
			
			header("Location:merci.php");
			exit();
        } 
        
	} 
	
} 

?>
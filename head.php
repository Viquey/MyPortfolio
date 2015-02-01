	<TITLE>PortFolio Vyach Sellathurai</TITLE>

    <meta charset="utf-8">
	<meta NAME="DESCRIPTION" CONTENT="Voici la page d´accueil de mon Portfolio Vyach Sellathurai. Vous trouverez ici toutes mes compétences, mon cv, une page pour me contacter ainsi que mon cv !"/>
	<meta NAME="KEYWORDS" CONTENT="portfolio, Vyach, Sellathurai, accueil, compétences, cv"/>
	<meta NAME="AUTHOR" CONTENT="Vyach Sellathurai"/>
	<meta name="viewport" content="initial-scale=1.0,user-scalable=no,maximum-scale=1,width=device-width"> <!--    media="(device-height: 568px)" -->
	<!--<meta name="viewport" content="width=device-width">-->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="HandheldFriendly" content="True">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	

    <link rel="stylesheet" href="reset.css" type="text/css"/>
    <link rel="stylesheet" href="styl.css" type="text/css"/>
    <link href="css_pirobox/style_5/style.css" rel="stylesheet" type="text/css"/>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
	<script src="js/jquery.tools.min.js"></script>
    
    <link rel="stylesheet" href="responsiveMenu/slicknav.css" />
	<script src="responsiveMenu/jquery.slicknav.min.js"></script>
        
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,400,600,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'/>
    
    <!-- *****  Script nécessaire à la page contact  *****  -->
    <script language="JavaScript">

		function verifSelection() {

			if (document.mail_form.name.value == "") {
				alert("Insérer votre nom !")
				return false
			} 

			if (document.mail_form.email.value == "") {
				alert("Insérer votre mail !")
				return false
			}

			invalidChars = " /:,;'"

			for (i=0; i < invalidChars.length; i++) {	
				badChar = invalidChars.charAt(i)

				if (document.mail_form.email.value.indexOf(badChar,0) > -1) {
					alert("Votre adresse e-mail contient des caractères invalides. Veuillez vérifier.")
					document.mail_form.email.focus()
					return false
				}
			}

			atPos = document.mail_form.email.value.indexOf("@",1)			
			if (atPos == -1) {
				alert('Votre adresse e-mail ne contient pas le signe "@". Veuillez vérifier.')
				document.mail_form.email.focus()
				return false
			}

			if (document.mail_form.email.value.indexOf("@",atPos+1) != -1) {	
				alert('Il ne doit y avoir qu\'un signe "@". Veuillez vérifier.')
				document.mail_form.email.focus()
				return false
			}

			periodPos = document.mail_form.email.value.indexOf(".",atPos)

			if (periodPos == -1) {					
				alert('Vous avez oublié le point "." après le signe "@". Veuillez vérifier.')
				document.mail_form.email.focus()
				return false
			}
			
			if (periodPos+3 > document.mail_form.email.value.length)	{		
				alert('Il doit y avoir au moins deux caractères après le signe ".". Veuillez vérifier.')
				document.mail_form.email.focus()
				return false
			}
			
			if (document.mail_form.message.value == "") {
				alert("Insérer un message !")
				return false
			} 
			
		}

	</script>
	
	
	
	
	
	
	

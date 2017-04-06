<?php

$firefox = strpos($_SERVER["HTTP_USER_AGENT"], 'Firefox') ? true : false;
$chrome = strpos($_SERVER["HTTP_USER_AGENT"], 'Chrome') ? true : false;
 
if ($chrome) {
	$style='<link rel="stylesheet" type="text/css" href="style/css/accueil.css">';
}
if ($firefox) {
	$style = '<link rel="stylesheet" type="text/css" href="style/css/accueilFirefox.css">';
}
 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Emilie Leterme</title>
	<?= $style ?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
</head>
<body>
	<header>
		<h1>Emilie Leterme</h1>
		<div id="separation"></div>
	</header>
	<section id="boutons">
		<article id="formation">
			<a href="formations.html">
				<img src="image/hexanoir_form.svg" alt="Formation" id="hexa1"/>
			</a>
		</article>
		<article id="experiences">
			<a href="experiences.html">
				<img src="image/hexavert_exp.svg" alt="Expériences professionnelles" id="hexa2"/>
			</a>
		</article>
		<article id="competences">
			<a href="competences.html">
				<img src="image/hexanoir_comp.svg" alt="Compétences" id="hexa3"/>
			</a>
		</article>
		<article id="realisation">
			<a href="pagerea.html">
				<img src="image/hexavert_rea.svg" alt="Réalisations" id="hexa4"/>
			</a>
		</article>
		<article id="contact">
			<a href="contact.php">
				<img src="image/hexanoir_contact.svg" alt="Contact" id="hexa5"/>
			</a>
		</article>
	</section>
</body>
</html>
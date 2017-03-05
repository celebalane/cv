<?php
  session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Emilie Leterme - Contact</title>
	<link rel="stylesheet" type="text/css" href="style/css/contact.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<!--Menu-->
	<nav>
		<ul class="navigation">
    		<li class="nav-item"><a href="index.html"><img src="image/icone2.svg" alt="icone" class="icone2" /> Accueil</a></li>
    		<li class="nav-item"><a href="pageform.html"><img src="image/icone2.svg" alt="icone" class="icone2" /> Formation</a></li>
    		<li class="nav-item"><a href="pageexp.html"><img src="image/icone2.svg" alt="icone" class="icone2" /> Expériences professionnelles</a></li>
    		<li class="nav-item"><a href="pagecomp.html"><img src="image/icone2.svg" alt="icone" class="icone2" /> Compétences</a></li>
    		<li class="nav-item"><a href="pagerea.html"><img src="image/icone2.svg" alt="icone" class="icone2" /> Réalisations</a></li>
    		<li class="nav-item"><a href="#"><img src="image/icone2-1.svg" alt="icone" class="icone2" /> Contact</a></li>
		</ul>
	</nav>
	<input type="checkbox" id="nav-trigger" class="nav-trigger" />
	<label for="nav-trigger"></label>

	<section class="contenu">
     	<h1>Contact</h1>
        <p>Pour me contacter par mail, veuillez utiliser le formulaire suivant :</p>
        <!--Section contenant les messages pour l'envoi de mail-->
		<article>
       		<?php if(array_key_exists('errors',$_SESSION)): ?>
     		<div class="alert alert-danger">
        		<?= implode('<br>', $_SESSION['errors']); ?>
      		</div>
      		<?php endif; ?>
      		<?php if(array_key_exists('success',$_SESSION)): ?>
      		<div class="alert alert-success">
        		Votre message a bien été envoyé !
     	</article>
     	<?php endif; ?>
     	<div class="contact">
     	<!--Liens réseaux sociaux-->
     	<article class="reseaux">
     		<h2>Réseaux sociaux</h2>
     		<div class="bande-icone">
     			<a href="https://github.com/celebalane"><img src="image/icone_github.png" alt="icone github" class="icone-reseaux" /></a>
     			<a href="https://www.instagram.com/celebalane/"><img src="image/icone_instagram.png" alt="icone instagram" class="icone-reseaux" /></a>
     			<a href="https://www.linkedin.com/in/emilie-leterme-63234666/"><img src="image/icone_linkedin.png" alt="icone linkedin" class="icone-reseaux" /></a>
     		</div>
     	</article>
     	<!--Formulaire de contact-->
        <form method="post" action="formulaire.php" id="formulaire">
          	<div class="champ">
          		<div class="label">
            		<label for="nom">Nom</label>
            	</div>
            	<div class="input">
              		<input type="text" name="nom" value="<?php echo isset($_SESSION['inputs']['nom'])? $_SESSION['inputs']['nom'] : ''; ?>" placeholder="Ex : Dupond" maxlength="30" required>
              	</div>
          	</div>
          	<div class="champ">
          		<div class="label">
            		<label for="prenom">Prénom</label>
            	</div>
            	<div class="input">
              		<input type="text" name="prenom" value="<?php echo isset($_SESSION['inputs']['prenom'])? $_SESSION['inputs']['prenom'] : ''; ?>"  placeholder="Ex : Nicolas" maxlength="30" required>
          		</div>
          	</div>
          	<div class="champ">
          		<div class="label">
            		<label for="mail">Mail</label>
            	</div>
            	<div class="input">
              		<input type="email" name="mail" value="<?php echo isset($_SESSION['inputs']['mail'])? $_SESSION['inputs']['mail'] : ''; ?>" placeholder="Ex : dupond@gmail.com" required>
              	</div>
          	</div>
          	<div class="champ">
          		<div class="label">
            		<label for="sujet">Sujet</label>
            	</div>
            	<div class="input">
              		<input type="text" name="sujet" value="<?php echo isset($_SESSION['inputs']['sujet'])? $_SESSION['inputs']['sujet'] : ''; ?>" placeholder="ex: Renseignements" maxlength="40" required>
              	</div>
          	</div>
          	<div class="champ">
          		<div class="label">
            		<label for="message">Message</label>
            	</div>
            	<div class="input">
              		<textarea name="message" placeholder="Votre message" value="<?php echo isset($_SESSION['inputs']['message'])? $_SESSION['inputs']['message'] : ''; ?>" maxlength="500" rows="7" cols="35" required></textarea>
              	</div>
          	</div>
          	<!--Bouton envoi-->
            <div class="bouton-droit">
                <button type="submit" name="envoi" id="boutonEnvoi">Envoyer</button>
            </div>
        </form>
        </div>
	</section>
</body>
</html>

<?php

  unset($_SESSION['inputs']); // on nettoie les données précédentes
  unset($_SESSION['success']);
  unset($_SESSION['errors']);
?>
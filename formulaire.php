<?php

session_start();//on démarre la session

// $errors = [];
  $errors = array(); // on crée une vérif de champs

if(!array_key_exists('nom', $_POST) || ($_POST['nom'] == '' || !preg_match("/^[a-zA-Zéè ]*$/",$_POST['nom'])) ) {// on verifie l'existence du champ et d'un contenu
  $errors ['name'] = "Vous n'avez pas renseigné votre nom";
  }

if(!array_key_exists('prenom', $_POST) || ($_POST['prenom'] == '' || !preg_match("/^[a-zA-Zéè ]*$/",$_POST['prenom']))) {
  $errors ['name'] = "vous n'avez pas renseigné votre prénom";
  }

/*if(!array_key_exists('tel', $_POST) || ($_POST['tel'] == '' || !preg_match('`[0-9]{10}`',$_POST['tel']))) { //Vérif que ce soit bien un numéro de tel
	 $errors ['tel'] = "Veuillez rentrez un numéro valide";
}*/

if(!array_key_exists('mail', $_POST) || $_POST['mail'] == '' || !filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {// on verifie existence de la clé
  $errors ['mail'] = "vous n'avez pas renseigné votre email";
  }

if(!array_key_exists('message', $_POST) || $_POST['message'] == '') {
  $errors ['message'] = "vous n'avez pas renseigné votre message";
  }

 function my_mail($user_mail, $name, $lastname, $message_sujet, $message_html){
        require 'PHPMailer/PHPMailerAutoload.php';
        $mail = new PHPMailer;

        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'pourquoipasnousface@gmail.com';                 // SMTP username
        $mail->Password = 'lafabrik03';                           // SMTP password
        $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 465;                                    // TCP port to connect to
        $mail->setLanguage('fr', '/optional/path/to/language/directory/');

        $mail->setFrom($user_mail, 'Contact Face');
        $mail->addAddress('pourquoipasnousface@gmail.com', $name.' '.$lastname);
        $mail->addReplyTo($user_mail, $name.' '.$lastname);
        $mail->isHTML(true);                                  // Set email format to HTML

        $mail->Subject = htmlspecialchars($message_sujet);
        $mail->Body    = htmlspecialchars($message_html);
        $mail->AltBody = htmlspecialchars($message_html);

        if(!$mail->send()) {
            echo 'Message non envoyé.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }
}

//On check les infos transmises lors de la validation
  if(!empty($errors)){ // si erreur on renvoie vers la page précédente
  $_SESSION['errors'] = $errors;//on stocke les erreurs
  $_SESSION['inputs'] = $_POST;
  header('Location: contact.php');
  }else{
  $_SESSION['success'] = 1;
  
  my_mail($_POST["mail"],$_POST["nom"],$_POST["prenom"],$_POST['sujet'], $_POST['message']);
  header('Location: contact.php');
  }



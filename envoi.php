<?php 

$nom= isset($_POST['nom']); 
$mail= isset($_POST['mail']); 
$objet= isset($_POST['objet']); 
$message= isset($_POST['message']); 

/////voici la version Mine
$headers = "MIME-Version: 1.0\r\n";

//////ici on détermine le mail en format text 
$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n"; 

////ici on détermine l'expediteur et l'adresse de réponse 
$headers .= "From: $nom <$mail>\r\nReply-to : $nom <$mail>\nX-Mailer:PHP"; 

$subject="$objet"; 
$destinataire="nazox@outlook.fr"; //notre email
$body="$message";

if (empty($nom)){
	echo "Please fill your name<br>You will be redirected within 2 seconds...";
	header("refresh:2;url=about.php");
}
elseif (empty($mail)){
	echo "Please fill your email<br>You will be redirected within 2 seconds...";
	header("refresh:2;url=about.php");
}
elseif (empty($objet)){
	echo "Please fill the subject<br>You will be redirected within 2 seconds...";
	header("refresh:2;url=about.php");
}
elseif (empty($message)){
	echo "Please fill the message<br>You will be redirected within 2 seconds...";
	header("refresh:2;url=about.php");
}
elseif (mail($destinataire,$subject,$body,$headers)) { 
echo "Your message has been sent, we will reply you within 24 hours<br>You will be redirected within 3 seconds..."; 
header("refresh:3;url=about.php");
} else { 
echo "Error, please retry.<br>You will be redirected within 3 seconds..."; 
header("refresh:3;url=about.php");
} 
?>
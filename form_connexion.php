<?PHP

function getLineWithString($fileName, $str) {
    $lines = file($fileName);
    foreach ($lines as $lineNumber => $line) {
        if (strpos($line, $str) !== false) {
            return $line;
        }
    }
    return -1;
}


$filename = 'users.txt';
$fichier = file($filename, FILE_IGNORE_NEW_LINES);
$mail = array();
$mailPost = $_POST["mail"]; //on recupere lemail entré sur le site
$mdpPost = md5($_POST["mdp"]);//on recupere le mdp entré sur le site



foreach ($fichier as $idmdp){
	$val = explode(":", $idmdp);
	$mail[$val[0]] = $val[1];
}


if (array_key_exists($mailPost, $mail))
{
	if ($mdpPost == $mail[$mailPost]){
		$infos = explode(":",getLineWithString("users.txt", $mailPost));
		$_SESSION['username'] = ucfirst(strtolower($infos[3]));
		$_SESSION['email'] = $infos[1];
		$_SESSION['balance'] = $infos[6];
		echo '<script type="text/javascript"> window.open("index.php","_self");</script>';
	}
	else
		echo "Email and password do not match<br/>";
}

else
	echo "Email and password do not match";




?>
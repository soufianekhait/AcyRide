<?PHP




function create_user(&$mdp, $file, $mail, $name, $lastname, $dob, $phone){

$mdp = md5($mdp);
$initialBalance = 10;
file_put_contents($file, $mail.':', FILE_APPEND);
file_put_contents($file, $mdp.":", FILE_APPEND);
file_put_contents($file, $name.":", FILE_APPEND);
file_put_contents($file, $lastname.":", FILE_APPEND);
file_put_contents($file, $dob.":", FILE_APPEND);
file_put_contents($file, $phone.":", FILE_APPEND);
file_put_contents($file, $initialBalance."\n", FILE_APPEND);
echo "<script type='text/javascript'>document.location.replace('signin.php');</script>";
}




$file = "users.txt";
$testMail = fopen($file, "r");
$litMail = file_get_contents($file);
$mailEnvoyer = $_POST["mail"];
$dob = $_POST["dob"];
$name = $_POST["name"];
$lastname = $_POST["lastname"];
$phone = $_POST["phone"];




if (empty($_POST["mail"]))
	echo 'Please fill the email';
elseif (empty($_POST["name"]))
	echo 'Please fill your name';
elseif (empty($_POST["lastname"]))
	echo 'Please fill your last name';
elseif (empty($_POST["dob"]))
	echo 'Please fill your date of birth';
elseif (empty($_POST["phone"]))
	echo 'Please fill your phone number';
elseif (empty($_POST["mdp"]))
	echo 'Please fill the password';
elseif (empty($_POST["mdpbis"]))
	echo "Please fill the password's confirmation";

	
	

else
{
	$file = 'users.txt';
	$mail = $_POST["mail"];
	$mdp = $_POST["mdp"];
	if (preg_match('/[a-zA-Z]+/', $mdp))
	{
		if (preg_match('/[0-9]+/', $mdp))
			if (preg_match('#[,;:!?.]#',$mdp))
				if(strlen($mdp)>=8){
					if (!preg_match("#$mailEnvoyer#", $litMail)){
						if (preg_match("/^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/",$dob)){
							list($day, $month, $year) = explode("/", $dob);
							$a = date("z")+1;
							$b = date("m");
							$c = date("Y");
							$yearY = $c - $year;
							if (preg_match('~^[\p{L}\p{Z}]+$~u', $name) && preg_match('~^[\p{L}\p{Z}]+$~u', $lastname)){
								if ($yearY>18){
									if ($_POST["mdp"] == $_POST["mdpbis"]){
										create_user($mdp, $file, $mail, $mdp, $name, $lastname, $dob, $phone);
									}
									else
										echo "<br/>The passwords do not match";
								}
								elseif($yearY==18){
									if ($b<=$month){
										if ($a>=$day){
											if ($_POST["mdp"] == $_POST["mdpbis"]){
												create_user($mdp, $file, $mail, $mdp, $name, $lastname, $dob, $phone);
											}
											else
												echo "<br/>The passwords do not match";
										}
										else
											echo "<br/>You need to be 18 years old to register, you cannot register";
									}
									else
										echo "<br/>You need to be 18 years old to register, you cannot register";
								}
								else
									echo "<br/>You need to be 18 years old to register, you cannot register";
							}
							else
								echo "<br/>Name and last name should only contain letters";
						}
						else
							echo "<br/>The date of birth format is not valid, please enter DD/MM/YYYY";
					}
					else
						echo "<br/>The email is already used, please use another one";
				}
				else
					echo "<br/>The length of your password must be greater than 8 characters";
			else
				echo "<br/>There is no punctuation character, please put at least one";
		else
			echo "<br/>There is no numeric character in your password, please put at least one";
	}
	else
		echo "<br/>There is no alphabetic character in your password, please put at least one";
}


?>
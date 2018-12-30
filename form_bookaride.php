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

if (isset($_COOKIE['rideprice']))
	$rideprice = $_COOKIE['rideprice'];
if (isset($_SESSION['balance']))
	$balance = $_SESSION['balance'];
if (isset($_SESSION['email']))
	$email = $_SESSION['email'];

$infos = explode(":",getLineWithString($filename, $email));
$balance = $infos[6];


$ispossible = $balance-$rideprice;

if ($ispossible>=0){
	$balance = $ispossible;
	//updateBalance();
	echo "<center><font size='4'><p>Your balance has been updated: $balance €</p></font></center>";
	echo "<br><br/><center><font size='4'><p>Your driver arrive within 5 minutes, do not move !</p></font></center>";

}
else {
	echo "<center><font size='4'><p>Actual balance: $balance €</p></font></center>";
	echo "<br><br/><center><font size='4'><p>You do not have enough money to book this ride, please <a href='topup.php'>top up</a> your balance</p></font></center><br><br/><br><br/><br><br/>";
}

include_once("ride.php");

?>
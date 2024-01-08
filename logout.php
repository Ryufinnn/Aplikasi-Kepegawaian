<?php
session_start();
if(isset($_GET[uadmin])){
	unset($_SESSION['nip']);
	echo"<meta http-equiv='refresh' content='0;URL=index.php'>";
}
else if(isset($_GET[uhrd])){
	unset($_SESSION['nip']);
	echo"<meta http-equiv='refresh' content='0;URL=index.php'>";
} 
else if(isset($_GET[ukeuangan])){
	unset($_SESSION['nip']);
	echo"<meta http-equiv='refresh' content='0;URL=index.php'>";
} 
else if(isset($_GET[umandor])){
	unset($_SESSION['nip']);
	echo"<meta http-equiv='refresh' content='0;URL=index.php'>";
} 

?>
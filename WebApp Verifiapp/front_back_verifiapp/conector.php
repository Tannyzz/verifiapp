/*Conec*/

<?php
/*Web service de la App Admin Verifiapp, recibe los parametros desde la App para aumentar uno en el campo de num_autos
	que sera visualizado despues por el la WebApp y la App User*/
	$hostname_localhost ="localhost";  
	$database_localhost ="vereficentros";
	$username_localhost ="root";
	$password_localhost ="QUORRAlegacy";
	$localhost = mysql_connect($hostname_localhost,$username_localhost,$password_localhost)
	or
	trigger_error(mysql_error(),E_USER_ERROR);
	mysql_select_db($database_localhost, $localhost);

	$latitud=$_POST['latitud'];
	$longitud=$_POST['longitud'];

	$query_search = "UPDATE `TABLE 1` SET num_autos=num_autos+1 WHERE latitud='".echo $latitud."' && longitud='"echo .$longitud."'";
	$query_exec = mysql_query($query_search) or die(mysql_error());
?>

<?php
	/*$servername = 'www.takeprofit.com.br';
	$username = 'takeprofit_take';
	$password = 'dornelles13';
	$db = 'takeprofit_take';*/
	$servername = 'localhost';
	$username = 'root';
	$password = '';
	//$db = 'takeprofit_take';
	$db = 'trab2web1';

	$mysqli = new MySQLi($servername, $username, $password, $db) or die(mysql_error().'Erro ao tentar conectar-se ao banco');
   ?>
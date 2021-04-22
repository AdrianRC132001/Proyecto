<?php
    function conectar($esRemota)
	{
		//Variable que almacena la IP de mi Gestor de BD.
		if($esRemota)
		{
			$servidor = "bdregueracarrenoadrian.cltvmjhbbbel.eu-west-3.rds.amazonaws.com";
			$nick = "TheAdrianRC13";
			$password = "cod4ar10";
			$bd = "Proyecto";
		}
		else
		{
			$servidor = "localhost:3306";
			$nick = "root";
			$password = "Alumn@2020";
			$bd = "Proyecto";
		}
		$conector = mysqli_connect($servidor, $nick, $password, $bd);
		if($conector)
		{
			return $conector;
		}
		else
		{
			//Función que me indica el error cometido al conectar.
			echo mysqli_connect_error();
		}
	}
?>
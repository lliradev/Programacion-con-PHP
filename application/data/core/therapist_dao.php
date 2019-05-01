<?php
	/**
	* Method to list all therapists
	* @author: Team Rocket
	* @version 1.0
	*/

	require_once '../Connection.php';
	$db = Db::getConnect();
	$result = "";
	$row;
	
	$sql = 'SELECT id_terapeuta, nombre_completo FROM terapeuta';
	$stmt = $db->query($sql);
	$rows = $stmt->fetchAll();
	
	if(empty($rows)){
		$result = "No se encontraron resultados";
	}
	
	echo '<option value="">Eliga una opción...</option>';
	foreach ($rows as $row) {
		echo '<option value="' . $row['id_terapeuta'] . '">' . $row['nombre_completo'] . '</option>';
	}
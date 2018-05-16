<?php

// Herda da clase PDO
class Sql extends PDO {
	
	private $conn;

	// Construtor para fazer a conexão automaticamente
	public function __construct() {

		$this -> conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

	}

	// Foreach em todos os parâmetros necessários
	private function setParams($statment, $parameters = array()) {

		foreach ($parameters as $key => $value) {
			
			$stmt -> bindParam($key, $value);

		}

	}

	// Bind em apenas um parâmetro
	private function setParam($statment, $key, $value) {

		$statment -> bindParam($key, $value);

	}

	// É passado o comando SQL e os parâmetros necerários para fazer a query
	public function query($rawQuery, $params = array()) {

		$stmt = $this -> conn -> prepare($rawQuery);		

		$this -> setParams($stmt, $params);

		$stmt -> execute();

		return $stmt;

	}

	// Realiza a consulta dos dados
	public function select($rawQuery, $params = array()):array {

		$stmt = $this -> query($rawQuery, $params);

		return $stmt -> fetchAll(PDO::FETCH_ASSOC);

	}

}
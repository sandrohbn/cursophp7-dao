<?php
	class Sql extends PDO{
		private $conn;
		public function __construct(){
			$this->conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");
		}
		/*
		public function __construct($SGBD,$Hospedeiro,$BD,$Usuario,$Senha){
			$this->conn = new PDO($SGBD.":host=".$Hospedeiro.";dbname=".$BD,$Usuario,$Senha);
		}
		*/
		private function setParams($statement, $parameters = array()){
			foreach ($parameters as $key => $value) {
				$this->setParam($statement, $key, $value);
			}
		}
		private function setParam($statement, $key, $value){
			$statement->bindParam($key, $value);
		}
		public function query($rawQuery, $params = array()){
			$stmt = $this->conn->prepare($rawQuery);
			$this->setParams($stmt, $params);
			$stmt->execute();
			return $stmt;
		}
		public function select($rawQuery, $params = array()):array{
			$stmt = $this->query($rawQuery, $params);
			return $stmt->fetchAll(PDO::FETCH_ASSOC); //retorna sem o indice
		}
	}
?>
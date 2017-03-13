<?php
class Conexion{
  private $host = "localhost";
	private $username = "root";
	private $password = "";
	private $database = "nathalia";
	private $conex;
	private static $instancia;

	public static function dameInstancia() {
		if ( !self::$instancia ) {
			self::$instancia = new self();
		}
		return self::$instancia;
	}

	private function __construct() {
		@$this->conex = new mysqli($this->host, $this->username, $this->password, $this->database);
		@$this->conex->set_charset('utf8');
		if ( mysqli_connect_error() ) {
			trigger_error("Fallo en la conexión, error: " . mysqli_connect_error(), E_USER_ERROR);
		}
	}

	private function __clone() { }

	public function dameConexion() {
		return $this->conex;
	}

	public function cierraConexion() {
		// echo "<br>Conexión cerrada";  // interferir con los head()
		$this->conex->close();
	}
}?>

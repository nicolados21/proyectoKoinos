<?php
require_once 'conexion.php';
session_start();
class Usuario{
	private $id_usu;
	private $nombre;
	private $email;
	private $password;
	private $db;
	
	public function __construct() {
		$this->db = Database::connect();
	}
	
	function getId() {
		return $this->id_usu;
	}

	function getNombre() {
		return $this->nombre;
	}
	function getEmail() {
		return $this->email;
	}

	function getPassword() {
		return $this->password;
		/*return password_hash($this->db->real_escape_string($this->password), PASSWORD_BCRYPT, ['cost' => 4]);*/
	}
    /*set*/
	function setId($id_usu) {
		$this->id_usu = $id_usu;
	}
	function setNombre($nombre) {
		$this->nombre = $this->db->real_escape_string($nombre);
	}
	function setEmail($email) {
		$this->email = $this->db->real_escape_string($email);
	}
	function setPassword($password) {
		$this->password = $this->db->real_escape_string($password);
	}
    public function save(){
		$sql = "INSERT INTO datos_usu VALUES(NULL, '{$this->getNombre()}', '{$this->getEmail()}', '{$this->getPassword()}');";
		$save = $this->db->query($sql);
		
		$result = false;
		if($save){
			$result = true;
		}
		return $result;
	}
    public function login(){
		$result = false;
		$email = $this->email;
		$password = $this->password;
		// Comprobar si existe el usuario
		$sql = "SELECT * FROM datos_usu WHERE correo = '$email'";
		$login = $this->db->query($sql);

		if($login && $login->num_rows == 1){
			$usuario = $login->fetch_object();
			// Verificar la contraseña
			$verify = $password == $usuario->password;
			if($verify){
				$result = $usuario;
				$_SESSION['fun']='ok';
			}
		}
		return $result;
	}
}
?>
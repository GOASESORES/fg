<?php
include 'db.php';

class User extends DB{
    private $nombreusuario;
    private $password;


    public function userExists($user, $pass){
        $md5pass = md5($pass);
        $query = $this->connect()->prepare('SELECT * FROM usuario WHERE email = :user AND password = :pass');
        $query->execute(['user' => $user, 'pass' => $md5pass]);

        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }

    public function setUser($user){
		
        $query = $this->connect()->prepare('SELECT * FROM usuario WHERE email = :user');
        $query->execute(['user' => $user]);

        
        foreach ($query as $currentUser) {
            $this->id_usuario = $currentUser['id_usuario'];
            $this->nombre = $currentUser['nombre'];
			$this->apellidos = $currentUser['apellido'];
			$this->email = $currentUser['email'];
			$this->password = $currentUser['password'];
			$this->identificacion = $currentUser['identificacion'];
			$this->cargo = $currentUser['cargo'];	
			$this->telefono = $currentUser['telefono'];	
			$this->celular = $currentUser['celular'];
			$this->nacimineto = $currentUser['nacimiento'];	
			$this->rol = $currentUser['rol'];	
			$this->foto = $currentUser['foto'];	
             $this->area = $currentUser['area'];	
			$this->centro = $currentUser['centro'];	
			$this->sede = $currentUser['sede'];
            $this->permisos = $currentUser['permisos'];	
			$this->empresa = $currentUser['empresa'];	
			$this->state_fsc = $currentUser['state_fsc'];	
          $this->created_by = $currentUser['created_by'];	
			$this->created_at = $currentUser['created_at'];	
			$this->online = $currentUser['online'];	
$this->current_session = $currentUser['current_session'];	
			$this->lider_sst = $currentUser['lider_sst'];	
			$this->cedula = $currentUser['cedula'];				
			
        }
    }
	

    public function getid_usuario(){
        return $this->id_usuario;
    }
	public function getnombre(){
        return $this->nombre;
    }
	public function getapellidos(){
        return $this->apellidos;
    }
	public function getemail(){
        return $this->email;
    }
	public function getpassword(){
        return $this->password;
    }
	public function getidentificacion(){
        return $this->identificacion;
    }
	public function getcargo(){
        return $this->cargo;
    }
	public function gettelefono(){
        return $this->telefono;
    }
	public function getcelular(){
        return $this->celular;
    }
	public function getnacimineto(){
        return $this->nacimineto;
    }
	public function getrol(){
        return $this->rol;
    }
	public function getfoto(){
        return $this->foto;
    }
	public function getarea(){
        return $this->area;
    }
	public function getcentro(){
        return $this->centro;
    }
	public function getsede(){
        return $this->sede;
    }
	public function getpermisos(){
        return $this->rol;
    }public function getnum(){
        return $this->permisos;
    }
		public function getempresa(){
        return $this->empresa;
    }
	public function getstate_fsc(){
        return $this->state_fsc;
    }
	public function getlider_sst(){
        return $this->lider_sst;
    }
	public function getcedula(){
        return $this->cedula;
    }
	
	
}

?>
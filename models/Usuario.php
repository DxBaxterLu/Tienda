<?php

class Usuario
{
    private $id, $nombre, $apellidos, $email, $password, $rol, $imagen, $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }

    //Metodos Get
    function getId()
    {
        return $this->id;
    }

    function getNombre()
    {
        return $this->nombre;
    }

    function getApellidos()
    {
        return $this->apellidos;
    }

    function getEmail()
    {
        return $this->email;
    }

    function getPassword()
    {
        return $this->password;
    }

    function getRol()
    {
        return $this->rol;
    }

    function getImagen()
    {
        return $this->imagen;
    }

    //Metodos Set
    function setId($id)
    {
        $this->id = $id;
    }

    function setNombre($nombre)
    {
        $this->nombre = $this->db->real_escape_string($nombre);
    }

    function setApellidos($apellidos)
    {
        $this->apellidos = $this->db->real_escape_string($apellidos);
    }

    function setEmail($email)
    {
        $this->email = $this->db->real_escape_string($email);
    }

    function setPassword($password)
    {
        $this->password = password_hash($this->db->real_escape_string($password), PASSWORD_BCRYPT, ['cost' => 4]);
    }

    function setRol($rol)
    {
        $this->rol = $rol;
    }

    function setImagen($imagen)
    {
        $this->imagen = $imagen;
    }

    //Otros Metodos
    public function save()
    {
        $sql = "INSERT INTO usuarios VALUES(NULL, '{$this->getNombre()}', '{$this->getApellidos()}', '{$this->getEmail()}', '{$this->getPassword()}', 'user', NULL)";

        $save = $this->db->query($sql);

        $result = false;
        if ($save) {
            $result = true;
        }
        return $result;
    }
}
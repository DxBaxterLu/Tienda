<?php
class Categoria
{
    private $id, $nombre, $db;

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

    //Metodos Set
    function setId($id)
    {
        $this->id = $id;
    }

    function setNombre($nombre)
    {
        $this->nombre = $this->db->real_escape_string($nombre);
    }

    //Otros Metodos
    public function getAll()
    {
        $categorias = $this->db->query('SELECT * FROM categorias ORDER BY nombre asc');
        return $categorias;
    }

    public function save()
    {
        $sql = "INSERT INTO categorias VALUES(NULL, '{$this->getNombre()}');";
        $save = $this->db->query($sql);

        $result = false;
        if ($save) {
            $result = true;
        }
        return $result;
    }
}

<?php
require_once 'models/Usuario.php';

class UsuarioController
{
    public function index()
    {
        echo 'Controlador Usuarios, Accion index';
    }

    public function registro()
    {
        require_once 'views/usuario/registro.php';
    }

    public function save()
    {
        if (isset($_POST)) {
            $usuario = new Usuario();
            $usuario->setNombre($_POST['nombre']);
            $usuario->setApellidos($_POST['apellidos']);
            $usuario->setEmail($_POST['email']);
            $usuario->setPassword($_POST['password']);

            $save = $usuario->save();
            if ($save) {
                $_SESSION['register'] = 'Complete';
            } else {
                $_SESSION['register'] = 'Failed';
            }
        } else {
            $_SESSION['register'] = 'Failed';
        }
        header('Location:' . base_url . 'usuario/registro');
    }
}

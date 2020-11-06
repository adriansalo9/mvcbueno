<?php
namespace App\Controllers;

use App\Models\User;
require_once('../app/models/User.php');

class UserController  
{
    public function __construct()
    {
        echo "en UserController<br>";
    }

    public function index()
    {
        echo "En método index<br>";

        //buscar la lista de usuarios
        $users= User::all(); //arriba pongo use
        echo "<pre>";
        //print_r($users);
        //generar la vista
        include('../views/user/index.php');
    }
    
    public function show($arguments)
    {
        $id = $arguments[0];
        echo "Mostrar el usuario $id";        
    }
    
    public function delete($arguments)
    {
        $id = $arguments[0];
        echo "Borrar el usuario $id";        
    }
}

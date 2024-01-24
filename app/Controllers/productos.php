<?php

namespace App\Controllers;

use Config\Database;

class productos extends BaseController
{
    public function index()
    {
      $db = \Config\Database::connect();
      $query = $db->query("SELECT id, nombre, Stock FROM productos");
     $result = $query->getResult();
     $data = ['titulo' => 'Catalogo de productos', 'productos'=> $result];
     return view('Stock', $data);
    }
}

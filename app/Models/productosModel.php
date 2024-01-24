<?php 
namespace App\Models;

use CodeIgniter\Model;
 
class ProductosModel extends Model {
    protected $table = 'productos';
    
    protected $allowedFields = ['Nombre', 'descripcion', 'precio', 'Stock', 'categoria','creado_en', 'actualizado_en'];
}

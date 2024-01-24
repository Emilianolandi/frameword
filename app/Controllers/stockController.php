<?php

namespace App\Controllers;

use App\Models\ProductosModel;

class StockController extends BaseController
{
    public function index()
    {
        $productosModel = new ProductosModel();
        $productos = $productosModel->findAll();

        return view('Stock/index', ['productos' => $productos]);
    }
    public function verDetalle($productoId)
    {
        $productosModel = new ProductosModel();
        $producto = $productosModel->find($productoId);
    
        return view('Stock/detalle', ['producto' => $producto]);
    }
    public function actualizarStock($productoId){
        $nuevoStock = $this->request->getPost('nuevoStock');

        $productosModel = new ProductosModel();
        $productosModel->update($productoId, ['nuevoStock' => $nuevoStock]);

        return redirect()->to(site_url('Stock'));
        
    }
}

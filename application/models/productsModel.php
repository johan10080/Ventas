<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class productsModel extends CI_Model {
       public function __construct() {
           parent::__construct();
       }
       public function getProducts(){
           $query = $this->db->select('productos.nombre nombreProducto, productos.descripcion, productos.precio,'
                   . ' productos.stock,productos.codigo ,categorias.nombre nombreCategoria,productos.id idProducto')
                    ->join('categorias', 'categorias.id = productos.categoria_id')
                    ->where('productos.estado',1)
                    ->get('productos');
           return $query->result();
       }
       public function getProductsEdit($idProducts){
           $query = $this->db->select('productos.nombre nombreProducto, productos.descripcion, productos.precio,'
                   . ' productos.stock,productos.codigo ,categorias.nombre nombreCategoria,productos.id idProducto,productos.categoria_id')
                    ->join('categorias', 'categorias.id = productos.categoria_id')
           ->where('productos.id',$idProducts)
           ->get('productos');
           return $query->row();
       }
       public function createProducts($data){           
           return $this->db->insert('productos',$data);
       }
       public function updateProducts($id,$data){
           $this->db->where('id',$id);
           return $this->db->update('productos',$data);  
       }
        
}
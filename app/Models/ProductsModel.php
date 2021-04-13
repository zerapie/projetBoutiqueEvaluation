<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class ProductsModel extends Model{
    protected $table = 'Products';
    protected $allowedFields = ['Products_id','Product_photo','Product_photo_name','product_name','Product_description','sous_categorie_id','categorie_id','regular_price','price'];
}
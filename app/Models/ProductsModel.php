<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class ProductsModel extends Model{
    protected $table = 'products';
    protected $allowedFields = ['Product_id','Product_photo','Product_photo_name','Product_name','Product_description','Sous_categorie_id','Category_id','Regular_price','Price'];
}
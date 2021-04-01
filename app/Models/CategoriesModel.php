<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class CategoriesModel extends Model{
    protected $table = 'categories';
    protected $allowedFields = ['category_id','category_name'];
}
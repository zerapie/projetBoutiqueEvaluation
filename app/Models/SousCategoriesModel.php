<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class SousCategoriesModel extends Model{
    protected $table = 'sous_categories';
    protected $allowedFields = ['sous_categorie_id','sous_categorie_name'];
}
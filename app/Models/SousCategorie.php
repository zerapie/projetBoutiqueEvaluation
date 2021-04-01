<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class SousCategorieModel extends Model{
    protected $table = 'SousCategorie';
    protected $allowedFields = ['Chemise','Pantalon','Chaussre'];
}
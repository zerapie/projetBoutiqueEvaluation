<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class CategorieModel extends Model{
    protected $table = 'Categorie';
    protected $allowedFields = ['homme','femme','enfant','junior'];
}
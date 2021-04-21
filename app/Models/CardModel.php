<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class CardModel extends Model{
    protected $table = 'Card';
    protected $allowedFields = ['Card_id','Card_user_id','Card_produit_id','Card_commande_id','Card_date_creat'];
}
<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class OrdersModel extends Model{
    protected $table = 'Orders';
    protected $allowedFields = ['Orders_id','Orders_name','Orders_date','Orders_total','Orders_status'];
}
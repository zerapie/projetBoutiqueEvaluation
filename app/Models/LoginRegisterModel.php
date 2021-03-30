<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class LoginRegisterModel extends Model{
    protected $table = 'register';
    protected $allowedFields = ['user_first_name','user_last_name','user_email','user_password','user_creat_date'];
}
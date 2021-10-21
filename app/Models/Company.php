<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
  {
      protected $table = 'companies';

      protected $guarded = array('id');

      public $timestamps = true;

      protected $fillable = [
         'name', 'email', 'website', 'created_at', 'updated_at'
      ];

     // Employeeモデルとのリレーションを記述する
     // Employeeモデルとのリレーションを記述する

      public function employees()
      {
          return $this->hasMany('App\Employee');
      }
       // Booksモデルとのリレーションを記述する
       public function books()
       {
           return $this->hasMany('App\Book');
       }
  }

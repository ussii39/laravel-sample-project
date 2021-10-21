<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table = 'employees';

    protected $guarded = array('id');

    public $timestamps = true;

    protected $fillable = [
       'first_name', 'last_name', 'company_id', 'email', 'website', 'created_at', 'updated_at'
    ];

   // Companyモデルとのリレーションを記述する
    public function company()
    {
       return $this->belongsTo('App\Company');
    }
}

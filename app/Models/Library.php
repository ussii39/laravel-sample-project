<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Library extends Model
{
    use HasFactory;
    protected $table = 'libraries';

    protected $guarded = array('id');

    public $timestamps = true;

    protected $fillable = [
        'name', 'created_at', 'updated_at'
     ];

    public function books()
    {
       return $this->hasMany('App\Book');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $table = 'books';

    protected $guarded = array('id');

    protected $fillable = [
        'title', 'created_at', 'updated_at'
     ];

    public $timestamps = true;

    public function library()
    {
       return $this->belongsTo('App\Library');
    }
    public function company()
    {
       return $this->belongsTo('App\Company');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title',
        'year',
        'number_of_pages',
        'author_id',
    ];
    use HasFactory;


    public  function author(){

      return  $this->belongsTo(Author::class);
    }
}

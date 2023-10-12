<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    //MENAMBAHKAN PROTECTED FILLABLE
    protected $fillable =[
        'code',
        'name',
        'quantity',
        'price',
        'description'
    ];
}

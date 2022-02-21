<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    /**
     * @var array<int, string, double>
     */
    protected $fillable = [
        'vendor_code',
        'name',
        'image',
        'author',
        'pages',
        'price',
        'price_sale',
        'year',
        'genre',
        'sub_category',
        'description',
        'age',
        'length',
        'width',
        'cover',
        'country',
    ];

    public $timestamps = false;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'number',
        'totalSum',
        'user_id'
    ];

    public $timestamps = false;

    public function books() {
        return $this->belongsToMany(Book::class, 'order_book');
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}

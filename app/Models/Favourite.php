<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class favourite extends Model
{
    protected $table="favourite_product";

    protected $fillable = [
        "user_id",
        "product_id",
        "is_favourite"
    ];
}

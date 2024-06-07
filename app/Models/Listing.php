<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    // specify the table name
    protected $table = 'listings';

    protected $fillable = [
       // 'field1',
       // 'field2',
        // Other fields
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title', 'summary', 'publication_date', 'pages', 'available'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Export extends Model
{
    use HasFactory;

    protected $fillable = [
        'itemName',
        'itemId',
        'itemQuantity',
        'revenue',
        'itemUse',
        'employeeName'
    ];
}

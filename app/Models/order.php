<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;



    protected $fillable = [
        'image'
    ];


 public function CalculateTotalPrice($width,$height)
    {
        return  $height+2;
    }

}

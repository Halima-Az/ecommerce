<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class produt extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable=[
        'libelle',
        'description',
        'quantity',
        'image',
        'price'
    ];
      public function getImageAttribute($value)
    {
        return $value ?: 'produt/product.png';
    }
     

}

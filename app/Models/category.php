<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\product;
class category extends Model
{
    use HasFactory;
    protected $table='category';
    protected $fillable=['id', 'name'];
    public $timestamps = false;

    public function products()
    {
        return $this->hasMany(product::class, 'idloai', 'id');
    }

}

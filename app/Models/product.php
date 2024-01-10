<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\category;

class product extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $table='product';
    protected $fillable=['id','name', 'idloai'];

    public function category()
    {
        return $this->belongsTo(category::class, 'idloai', 'id');
    }

}

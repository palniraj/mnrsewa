<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'user_id', 'servicecategory_id', 'description', 'price', 'price_badge', 'tags', 'highlights', 'image'];
    public function servicecategory(){
        return $this->belongsTo('App\Models\ServiceCategory', 'servicecategory_id');
    }
    public function user(){
        return $this->belongsTo('App\Models\User', 'user_id');
    }


}

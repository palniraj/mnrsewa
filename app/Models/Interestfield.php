<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interestfield extends Model
{
    protected $fillable = ['user_id', 'servicecategory_id'];

   
    public function setCategoryAttribute($value)
    {
        $this->attributes['servicecategory_id'] = json_encode($value);
    }

    public function getCategoryAttribute($value)
    {
        return $this->attributes['servicecategory_id'] = json_decode($value);
    }
    use HasFactory;
}

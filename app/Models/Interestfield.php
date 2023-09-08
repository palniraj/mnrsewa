<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interestfield extends Model
{
    protected $fillable = ['user_id', 'servicecategory'];

    public function servicecategorys()
    {
        return $this->belongsToMany(ServiceCategory::class)->withPivot('servicecategory');
    }

    // public function hasServiceategory($servicecategoryId)
    // {
    //     return in_array($servicecategoryId, $this->servicecategory()->pluck('id')->toArray());
    // }
    use HasFactory;
}

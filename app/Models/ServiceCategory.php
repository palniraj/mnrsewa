<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ServiceCategory extends Model
{
    use HasFactory;
    public function parent()
    {
        return $this->belongsTo(ServiceCategory::class, 'parent_id')->withDefault();
    }

    protected $fillable = [
        'name',
        'parent_id',
        'user_id',
        'description',
        'order',
        'image',
        'is_featured',
    ];
}

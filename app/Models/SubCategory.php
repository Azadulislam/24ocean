<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'image', 'status', 'description', 'category_id'];

    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }
    public function statuses()
    {
        return $this->hasOne(CategoryStatus::class, 'id', 'status');
    }
}

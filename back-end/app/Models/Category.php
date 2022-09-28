<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    protected $primaryKey = 'category_id';    

    /**
     * 
     */
    public function parent()
    {
        return $this->belongsTo('App\Models\Category');
    }

    /**
     * 
     */
    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}

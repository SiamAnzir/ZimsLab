<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subCategory extends Model
{
    protected $fillable = ['sub_category_name', 'category_id'];

    public function Hardware(){
        return $this->hasMany(labModel::class);
    }

    public function Category(){
        return $this->belongsTo(Category::class);
    }
}

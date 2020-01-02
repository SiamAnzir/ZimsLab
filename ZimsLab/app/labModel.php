<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class labModel extends Model
{
    protected $fillable = ['hardware_name','sub_category_id' ,'category_id','quantity'];

    public function subCategory(){
        return $this->belongsTo(subCategory::class);
    }
}

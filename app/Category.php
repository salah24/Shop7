<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['designation'];

    public function produit(){
        return $this->hasOne('App\Produit','category_id');
    }

}

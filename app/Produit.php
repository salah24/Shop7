<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $fillable = ['designation','referance','prix-vent','image','category_id','fournisseur_id'];

    public function category(){
        return $this->belongsTo('App\Category','category_id');
    }
}

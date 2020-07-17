<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $guarded = ['id'];
    //
    public function users(){
        return $this->belongsTo('App\User', 'users_id');
    }

    public function getImagesAttribute() {
        return asset('storage/' . $this->attributes['images']);
    }
}

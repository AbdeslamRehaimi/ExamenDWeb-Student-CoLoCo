<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{

    protected $table = 'offers';
    protected $guarded = ['id'];
    protected $fillable = ['titre', 'latitude', 'adress', 'longtude', 'superficie', 'prix', 'capacite', 'description', 'photo', 'users_id'];
    // protected $hidden = [];
    // protected $dates = [];
    //
    public function users(){
        return $this->belongsTo('App\User', 'users_id');
    }

    public function scopeGetClientImage(){
        return "storage/" . $this->photo;
    }



}

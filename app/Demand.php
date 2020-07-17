<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Demand extends Model
{
    protected $table = 'demands';
    protected $guarded = ['id'];
    protected $fillable = ['budget', 'commentaire', 'offers_id', 'users_id'];

    //
    public function users(){
        return $this->belongsTo('App\User', 'users_id');
    }

    public function offers(){
        return $this->belongsTo('App\Offer', 'offers_id');
    }
}

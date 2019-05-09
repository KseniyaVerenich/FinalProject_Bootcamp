<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserSpecies extends Model
{
    //
    //use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'photo',
    ];

    public function user() 
    {
        return $this->belongsTo(User::class);
    }
    
    public function species () 
    {
        return $this->belongsTo('App\Species', 'species_id', 'id');
    }
}




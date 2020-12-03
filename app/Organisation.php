<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organisation extends Model
{
    protected $guarded = ['id'];

    public function organisationWasCreatedByUser()
    {
        return $this->belongsTo('App\User', 'createdByUserId', 'id');
    }
}

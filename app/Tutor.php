<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    protected $fillable = [
        'name', 'email','phone',
        'school','about','quotes','sex','passport','coverpicture',
        'address','country','gig'
    ];
}

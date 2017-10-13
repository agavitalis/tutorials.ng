<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Learner extends Model
{
    protected $fillable = [
        'name', 'email','phone',
        'school','about','quotes','sex','passport',
        'address','country',
    ];
}

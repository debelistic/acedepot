<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    protected $fillable = [
        'company_name',
        'what_you_do',
        'employer_email',
        'country',
        'state',
        'address_1',
        'address_2',
        'phone_number',
        'email',
        'about',
        'company_logo_url',
        'website_url'
];


public function user()
{
return $this->belongsTo('App\User');
}

}

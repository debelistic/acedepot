<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contractor extends Model
{

  protected $fillable = [
      'business_name',
      'contactor_email',
      'business_logo',
      'business_description',
      'country',
      'state',
      'address_1',
      'address_2',
      'phone_number',
      'company_email',
      'about'
  ];


  public function user()
  {
  return $this->belongsTo('App\User');
  }
}

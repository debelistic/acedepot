<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    protected $fillable = [
        'contract_subject',
        'contract_description',
        'added_by_email',
        'contract_category',
        'contract_sector',
        'minimum_qualification',
        'skill_level',
        'duration',
        'experience',
        'age_range',
        'about',
        'language_proficiency',
        'require_cv',
        'require_guarantor',
        'other_prefrences',
        'salary',
        'payment_terms',
    ];
  
  
    public function user()
    {
    return $this->belongsTo('App\User');
    }
}

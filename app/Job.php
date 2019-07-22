<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [
        'job_subject',
        'job_description',
        'added_by_email',
        'job_category',
        'job_sector',
        'minimum_qualification',
        'language',
        'skill_level',
        'experience',
        'age_range',
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

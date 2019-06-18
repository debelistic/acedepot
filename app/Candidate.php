<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    protected $fillable = [
                'middle_name',
                'what_i_do',
                'candidate_id',
                'phone',
                'age',
                'gender',
                'religion',
                'address_1',
                'address_2',
                'city',
                'highest_qualification',
                'lga',
                'state',
                'country',
                'status',
                'num_of_applications',
                'num_of_jobs_done',
                'skills',
                'about',
                'img_url',
                'cv_url',
                'fb_url',
                'twt_url',
                'lnkd_url',
                'ext_web_url'
    ];


    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function services()
    {
        return view('pages.services');
    }
    public function currentOpenings()
    {
        return view('pages.current-openings');
    }
    
    public function availableContracts()
    {
        return view('pages.avaliable-contracts');
    }

    public function faq()
    {
        return view('pages.faq');
    }
    
    public function termsAndConditions()
    {
        return view('pages.terms-of-service');
    }

    public function userAgreement()
    {
        return view('pages.user-agreement');
    }

    public function privacyPolicy()
    {
        return view('pages.privacy-policy');
    }
}

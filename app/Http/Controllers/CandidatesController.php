<?php

namespace App\Http\Controllers;

use App\Candiadate;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Auth;


class CandidatesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('candidate.candidate-profile')->with('user', auth()->user());
    }

    /**
     * Show the form for creating a new candidate.
     *
     * @return \App\Candidate;
     */
    public function create($data)
    {
        //
        try {
            User::create([
                'middle_name' => $data['middle_name'],
                'what_i_do' => $data['what_i_do'],
                'email' => $data['email'],
                'phone' => $data['phone'],
                'age' => $data['age'],
                'gender' => $data['gender'],
                'address_1' => $data['address_1'],
                'address_2' => $data['address_2'],
                'highest_qualification' => $data['highest_qualification'],
                'lga' => $data['lga'],
                'state' => $data['state'],
                'country' => $data['country'],
                'status' => $data['status'],
                'num_of_applications' => $data['num_of_applications'],
                'num_of_jobs_done' => $data['num_of_jobs_done'],
                'skills' => $data['skills'],
                'about' => $data['about'],
                'img_url' => $data['img_url'],
                'cv_url' => $data['cv_url'],
            ]);
            return redirect()->action('${App\Http\Controllers\CandidatesController@index}', ['parameterKey' => 'value']);
        } catch (Illuminate\Database\QueryException $th) {
            return back()->withError($th->getMessage())->withInput();
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('candidate.candidate-register')->with('user', auth()->user());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

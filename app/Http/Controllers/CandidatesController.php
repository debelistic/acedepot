<?php

namespace App\Http\Controllers;

use App\Candidate;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Auth;
use Hash;
use Storage;


class CandidatesController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('candidate.candidate-register')->with('user', auth()->user());

        //return view('candidate.candidate-profile')->with('user', auth()->user());
    }

    /**
     * Show the form for creating a new candidate.
     *
     * @return \App\Candidate;
     */
    public function create(Request $data)
    {
        //
        try {
            $this->validate($data, [
                'middle_name' => ['required', 'string', 'max:255'],
                'what_i_do' => ['required', 'string', 'max:255'],
                'phone' => ['required', 'string', 'max:20'],
                'age' => ['required', 'date', 'max:255'],
                'gender' => [
                    'required',
                    Rule::in(['male', 'female', 'others']),
                ],
                'religion' => ['nullable', 'string', 'max:255'],
                'address_1'=> ['required', 'string', 'max:255'],
                'address_2' => ['required', 'string', 'max:255'],
                'city' => ['required', 'string', 'max:255'],
                'highest_qualification' => [
                     'required',
                    Rule::in(['no formal education','primary school', 'secondary school', 'technical school', 'nce', 'nd1', 'nd2', 'bsc', 'pgd']),
                ],
                'discipline' => ['nullable', 'string', 'max:255'],
                'lga' => ['required', 'string', 'max:255'],
                'state' => ['required', 'string', 'max:255'],
                'country' => ['required', 'string', 'max:255'],
                'status' => [
                    'required',
                    Rule::in(['hired', 'hunting', 'vacation']),
                ],
                'skills' => ['required', 'string'],
                'about' => ['required', 'string'],
                'fb_url' => ['nullable', 'string'],
                'twt_url' => ['nullable', 'string'],
                'ig_url' => ['nullable', 'string'],
                'ext_url' => ['nullable', 'string'],
                'lnkd_url' => ['required', 'string'],
                'img_url' => ['nullable', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
                'cv_url' => ['nullable', 'mimes:pdf,doc,docx', 'max:4000'],
            ]);


            if($data->hasFile('img_url')){
                //validate

                $user_img = $data->img_url;
                $ext = $user_img->getClientOriginalExtension();
                $pro_img = $data->middle_name.time().'img.'.$ext;
                $pro_img_path = $user_img->storeAs('public/pics', $pro_img);
                //$data->img_url = $pro_img;
            } else{
                $pro_img_path = 'no_image.jpe';
            }

            if($data->hasFile('cv_url')){
                //validate

                $user_cv = $data->cv_url;
                $ext = $user_cv->getClientOriginalExtension();
                $cand_cv = $data->middle_name.time().'cv.'.$ext;
                $cand_cv_path = $user_cv->storeAs('public/cvs', $cand_cv);
                //$data->cv_url = $cand_cv;
            } else{
                $cand_cv_path = 'no cv uploaded';
            }
            
            //return redirect('/');

            Candidate::create([
                'middle_name' => $data['middle_name'],
                'what_i_do' => $data['what_i_do'],
                'candidate_id' => auth()->user()->id,
                'phone' => $data['phone'],
                'age' => $data['age'],
                'gender' => $data['gender'],
                'religion' => $data['religion'],
                'address_1' => $data['address_1'],
                'address_2' => $data['address_2'],
                'city' => $data['city'],
                'highest_qualification' => $data['highest_qualification'],
                'discipline' => $data['discipline'],
                'lga' => $data['lga'],
                'state' => $data['state'],
                'country' => $data['country'],
                'status' => $data['status'],
                'num_of_applications' => $data['num_of_applications'],
                'num_of_jobs_done' => $data['num_of_jobs_done'],
                'skills' => $data['skills'],
                'about' => $data['about'],
                'img_url' => $pro_img_path,
                'cv_url' => $cand_cv_path,
                'fb_url' => $data['fb_url'],
                'twt_url' => $data['twt_url'],
                'ig_url' => $data['ig_url'],
                'lnkd_url' => $data['lnkd_url'],
                'ext_url' => $data['ext_web_url'],
            ]);
            return redirect('/candidate-dashboard')->with('status', 'Your information has been stored');
        } catch (Illuminate\Database\QueryException $th) {
            return redirect('/candidate-register')->withError($th->getMessage())->withInput();

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
        $id = auth()->user()->id;
        $candidate = Candidate::where('candidate_id', $id)->get();
        //return ($candidate);
        //dd($id);
        //return view('candidate.candidate-register')->with('user', auth()->user());
        //return $candidate;
        if($candidate){
            return view('candidate.candidate-profile', compact('candidate'));
        }
        return view('candidate.candidate-register')->with('user', auth()->user())->with('status', 'Create your job profile');


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //if(auth()->user()->role)
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ApiRepo\ApiRepository;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request,ApiRepository $apirepo)
    {   

        if($request->has('page')){
            
            //so you can search like this http://localhost/ewa2015/public/candidate?page=1&gender=F&party=1&blahblah=foobar

            $candidateList=$apirepo->getCandidateListBySearch($request);

        }

        else{

            //if request have no parameter here u go with normal pagination list

            $candidateList=$apirepo->getCandidateList();
        
        }

        return view('candidate.all',compact('candidateList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show(ApiRepository $apirepo,$id)
    {
       
        $candidate=$apirepo->getCandidateById($id);

        dd($candidate);
                
        //$candidate=\App\Candidate::with('reviews')->findOrFail($id);

        //return view('candidate.show',compact('candidate'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
    public function candidateSearch(ApiRepository $apirepo,$name)
    {
        $candidate=$apirepo->getCandidateBySearch($name);

        dd($candidate);   
    }

    public function candidateListSearch(ApiRepository $apirepo,Request $request)
    {
        $candidateList=$apirepo->getCandidateListBySearch($request);

        dd($candidateList);
    }
}

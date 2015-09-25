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

        if(!$request->all()==null){
            
            //so you can search like this http://localhost/ewa2015/public/candidate?page=1&gender=F&party=1&blahblah=foobar

            $candidateList=$apirepo->getCandidateListBySearch($request);

        }

        else{

            //if request have no parameter here u go with normal pagination list

            $candidateList=$apirepo->getCandidateList();
        
        }

        if ($request->ajax()) {

            return json_encode($candidateList);
            
        }

        $meta=$candidateList->meta;

        $data=[];

        foreach ($candidateList->data as $key => $value) {
            
            $value->like=$this->getLikeCountForCandidate($value->id);

            $data[]=$value;
        }

        $result['data']=$data;

        $result['meta']=$meta;

        $candidateList=(object)$result;

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
    // test data http://localhost/ewa2015/public/candidate/55fa683a11b7f310c6884f03
    
    public function show(Request $request,ApiRepository $apirepo,$id)
    {
        
        $candidate=$apirepo->getCandidateById($id);

        if($request->ajax()){

            return json_encode($candidate);
        
        }

        //$associatedCandidate=$apirepo->getAssociatedCandidate($candidate);

        $likes=\App\LikeCandidate::where('candidate_id',$id)->count();

        return view('candidate.show',compact('candidate','likes'));
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
        $candidate=$apirepo->getCandidateByName($name);

        dd($candidate);   
    }

    public function candidateListSearch(ApiRepository $apirepo,Request $request)
    {
        $candidateList=$apirepo->getCandidateListBySearch($request);

        dd($candidateList);
    }

    protected function getLikeCountForCandidate($candidateId)
    {
        return \App\LikeCandidate::where('candidate_id',$candidateId)->count();
    }
}

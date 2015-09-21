<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LikeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
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

        $candidateId=$request->input('candidate_id');

        if($this->checkLikeExist($candidateId)==1){

            $like=\App\LikeCandidate::where('user_id',auth()->user()->id)->where('candidate_id',$candidateId)->first();

            $like->delete();

            return response()->json(['result' => 'destroyed']);

        }
        else{

        \App\LikeCandidate::create([

                'user_id'   => auth()->user()->id,
                'candidate_id'  => $candidateId
            ]);

             return response()->json(['result' => 'created']);

        }
    }


    protected function checkLikeExist($candidateId){

        $result=\App\LikeCandidate::where('user_id',auth()->user()->id)->where('candidate_id',$candidateId)->count();

        return $result;
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
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
}

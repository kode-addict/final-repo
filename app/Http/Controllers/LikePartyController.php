<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class LikePartyController extends Controller
{
   
    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {

        $candidateId=$request->input('party_id');

        if($this->checkLikeExist($candidateId)==1){

            $like=\App\LikeParty::where('user_id',auth()->user()->id)->where('party_id',$candidateId)->first();

            $like->delete();

            return response()->json(['result' => 'destroyed']);

        }
        else{

        \App\LikeParty::create([

                'user_id'   => auth()->user()->id,
                'party_id'  => $candidateId
            ]);

             return response()->json(['result' => 'created']);

        }
    }


    protected function checkLikeExist($candidateId){

        $result=\App\LikeParty::where('user_id',auth()->user()->id)->where('party_id',$candidateId)->count();

        return $result;
    }


}

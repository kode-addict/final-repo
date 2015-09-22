<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class FavoritePartyController extends Controller
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

        if($this->checkFavoriteExist($candidateId)==1){

            $favorite=\App\FavoriteParty::where('user_id',auth()->user()->id)->where('party_id',$candidateId)->first();

            $favorite->delete();

            return response()->json(['result' => 'destroyed']);

        }
        else{

        \App\FavoriteParty::create([

                'user_id'   => auth()->user()->id,
                'party_id'  => $candidateId
            ]);

             return response()->json(['result' => 'created']);

        }
    }


    protected function checkFavoriteExist($candidateId){

        $result=\App\FavoriteParty::where('user_id',auth()->user()->id)->where('party_id',$candidateId)->count();

        return $result;
    }    
}

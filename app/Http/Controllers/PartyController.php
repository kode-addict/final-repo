<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ApiRepo\ApiRepository;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PartyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request,ApiRepository $apiRepository)
    {

        if($request->has('page'))
        {   
            //when request have page it goes with pagination parameter

            $partyList=$apiRepository->getPartyList($request->get('page'));
        }

        else
        {
            $partyList=$apiRepository->getPartyList();
        }

        if($request->ajax()){

            return json_encode($partyList);

        }

        $popularParty=\App\LikeParty::select('*',\DB::raw('count(party_id) as count'))->groupBy('party_id')->orderBy('count','desc')->take(5)->get();

        return view('party.all',compact('partyList','popularParty'));
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
    public function show(Request $request,ApiRepository $apiRepository,$id)
    {

        $likes=\App\LikeParty::where('party_id',$id)->count();

        $party=$apiRepository->getPartyById($id);

        if($request->ajax()){

            return json_encode($party);

        }

        return view('party.show',compact('party','likes'));

 
        

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

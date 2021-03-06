<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ApiRepo\ApiRepository;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class GeoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request,ApiRepository $apirepo)
    {
        $DistrictList=$apirepo->getDistrictListBySearch($request);

        if($request->ajax()){

            return json_encode($DistrictList);
        }
        dd($DistrictList);
        echo json_encode($DistrictList);
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

    public function lowerHouse(Request $request,ApiRepository $apirepo)
    {   
        $lowerHouse=$apirepo->getLowerHouseBySearch($request);
        
        return json_encode($lowerHouse);
    }

    public function upperHouse(Request $request,ApiRepository $apirepo)
    {   
        $upperHouse=$apirepo->getUpperHouseBySearch($request);
        
        return json_encode($upperHouse);
    }    
}

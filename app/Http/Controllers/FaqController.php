<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ApiRepo\ApiRepository;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class FaqController extends Controller
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

            $faqList=$apirepo->getFaqList($request->input('page'));

        }

        else{

            //if request have no parameter here u go with normal pagination list

            $faqList=$apirepo->getFaqList();
        
        }

        dd($faqList);

        return view('faq.all',compact('faqList'));
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

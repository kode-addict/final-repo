<?php

namespace App\Http\Controllers;

use App\ApiRepo\ApiRepository;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    protected $apiRepo;

    public function __construct(ApiRepository $apiRepo)
    {
        $this->apiRepo = $apiRepo;
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $keyword = $request->input('keyword');
        $data = $keyword
                ? $this->apiRepo->getFaqByKeyword($keyword)
                : $this->apiRepo->getFaqList();
        return view('faq.index', compact('data', $data));
    }

    /**
     * Display single FAQ
     *
     * @return Response
     */
    public function show($id)
    {
        $faq = $this->apiRepo->getFaqById($id);
        return view('faq.show', compact('faq'));
    }
}

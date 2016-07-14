<?php

namespace App\Http\Controllers\UserManager;

use App\Models\Character;
use App\Repositories\CharacterRepository;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CharacterController extends Controller
{
    /**
     * @var CharacterRepository
     */
    protected $repository;

    /**
     * 單頁筆數
     *
     * @var int
     */
    protected $count = 10;


    /**
     * CharacterController constructor.
     *
     * @param CharacterRepository $characterRepository
     */
    public function __construct(CharacterRepository $characterRepository)
    {
        $this->repository = $characterRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @param int $page
     * @return \Illuminate\Http\Response
     */
    public function index($page = 1)
    {
        return response()->json($this->repository->getList($page, $this->count));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->repository->addNew($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json($this->repository->getOnce($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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

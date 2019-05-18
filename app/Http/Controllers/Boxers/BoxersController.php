<?php

namespace App\Http\Controllers\Boxers;

use App\Boxer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Boxers\BoxersRepository;

class BoxersController extends Controller
{
    /**
     * $model
     *
     * @var undefined
     */
    protected $model;

    /**
     * __construct
     *
     * @param Boxer $boxer
     * @return void
     */
    public function __construct(Boxer $boxer)
    {
        $this->model = new BoxersRepository($boxer);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        boxer ::all();
        
        return view('boxers.index')->withBoxers($this->model->all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('boxers-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // if Edit
        if(isset($request->boxer_id)){
            $this->model->update($request->all(), $request->boxer_id);
        // else create
        } else {
            $this->model->create($request->all());
        }
        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(request()->ajax()){
            return $this->model->with(['types'])->find($id);
        }
        return view('boxer.shwo', comapct($this->model->show($id)));
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

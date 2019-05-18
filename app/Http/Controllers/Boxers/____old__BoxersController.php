<?php

namespace App\Http\Controllers\Boxers;

use App\Boxer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Boxers\BoxersRepository;

class OLDBoxersController extends Controller
{
    // space that we can use the repository from
    protected $model;

    public function __construct(Boxer $boxer)
    {
        // set the model
        $this->model = new BoxersRepository($boxer);
    }

    public function index(){
        // return $this->model->all();
        return view('boxers.index', compact($this->model->all()));
    }

    public function FunctionName(Type $var = null)
    {
        # code...
    }
}

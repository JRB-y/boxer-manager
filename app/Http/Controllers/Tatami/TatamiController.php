<?php

namespace App\Http\Controllers\Tatami;

use App\Boxer;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Boxers\BoxersRepository;

class TatamiController extends Controller
{

    protected $tatami;
    protected $category = "tatami";

    public function __construct()
    {
        $this->boxer = new BoxersRepository(new Boxer());
    }
    public function index()
    {
        $boxersTatami = $this->boxer->ofCategory($this->category);
        return view('tatami.index', $this->boxer->filterAges($boxersTatami));
    }
}

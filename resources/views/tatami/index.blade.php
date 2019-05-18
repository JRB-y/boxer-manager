@extends('layouts.app')
@section('content')
    
    {{-- poussin --}}
    @include('tatami.table', [ 'name' => 'Poussin', 'boxers' => $poussin, 'ages' => config('weights.poussin') ])
    {{-- ecole --}}
    @include('tatami.table', [ 'name' => 'Ecole', 'boxers' => $ecole, 'ages' => config('weights.ecole') ])
    {{-- minime --}}
    @include('tatami.table', [ 'name' => 'Minime', 'boxers' => $minime, 'ages' => config('weights.minime') ])
    {{-- poussin --}}
    {{-- @include('tatami.table', [ 'name' => 'Poussin', 'boxers' => $poussin, 'ages' => config('weights.poussin') ]) --}}
    {{-- poussin --}}
    {{-- @include('tatami.table', [ 'name' => 'Poussin', 'boxers' => $poussin, 'ages' => config('weights.poussin') ]) --}}

    {{-- @include('tatami.ecole.table')

    @include('tatami.minime.table') --}}

    
@endsection
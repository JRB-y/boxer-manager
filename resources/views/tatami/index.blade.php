@extends('layouts.app')
@section('content')
    
    {{-- poussin --}}
    @include('tatami.table', [ 'name' => 'Poussin', 'boxers' => $poussin, 'length' => sizeof( config('weights.poussin')) , 'weights' => config('weights.poussin') ])
    {{-- ecole --}}
    @include('tatami.table', [ 'name' => 'Ecole', 'boxers' => $ecole, 'length' => sizeof( config('weights.poussin')) , 'weights' => config('weights.ecole') ])
    {{-- minimeHomme --}}
    @php
        $minimeHomme = $minime->filter(function($key, $val){
            return $key['sex'] == 0;
        });
        $minimeFemme = $minime->filter(function($key, $val){
            return $key['sex'] == 1;
        });
    @endphp
    {{-- minime homme --}}
    @include('tatami.table-no-sex', [ 'name' => 'Minime Homme', 'boxers' => $minimeHomme, 'weights' => config('weights.minimeHomme'), 'length' => sizeof(config('weights.minimeHomme')) , ])
    {{-- minim femme --}}
    @include('tatami.table-no-sex', [ 'name' => 'Minime Femme', 'boxers' => $minimeFemme, 'weights' => config('weights.minimeFemme'), 'length' => sizeof(config('weights.minimeFemme')) , ])
@endsection
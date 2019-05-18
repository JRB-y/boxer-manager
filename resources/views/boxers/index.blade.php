@extends('layouts.app')
@section('content')
<div class="col-md-12">
    <div class="card bg-dark text-white mt-5">
        <div class="card-title pt-5"><h1>Boxers</h1>
            <button class="btn btn-secondary col-md-12" data-toggle="modal" data-target="#new-boxer-modal"> New Boxer </button>
        </div>
        <div class="card-body">
            <table class="table table-dark table-hover" id="boxers-index" style="width:100%">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Age</th>
                        <th>Poids</th>
                        <th>Date de création</th>
                        <th>Type</th>
                        <th class="">#</th>
                    </tr>
                </thead>
                <tbody class="text-light">
                    @foreach($boxers as $boxer)
                        <tr>
                            <td>{{$boxer->nom}}</td>
                            <td>{{$boxer->prenom}}</td>
                            <td>{{$boxer->age()}}</td>
                            <td>{{$boxer->weight}} kg</td>
                            <td> {{$boxer->created_at->format('d/m/Y H:i')}} </td>
                            <td>
                                @foreach($boxer->types as $type)
                                    <span class="badge badge-success">{{ $type->name }}</span>
                                @endforeach
                            </td>
                            <td class="bg-dark">
                                <div>
                                    <i class="fa fa-eye open-boxer-details" id="{{$boxer->id}}"></i>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@include('boxers.modals.details')
@include('boxers.modals.new-boxer')
@endsection
@section('javascript')
    <script src="{{ asset('js/boxer/open-modal.js') }}"></script>
@endsection
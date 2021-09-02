@extends('layout')

@section('content')

    <style>
        .push-top {
            margin-top: 50px;
        }
    </style>

    <div class="push-top">
        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div><br />
        @endif
        <h2>List Permession</h2>
            <div class="pull-right">
                <a href="{{ url('api/users') }}" class="btn btn-success ">New Permission</a>

            </div>
        <table class="table">
            <thead>
            <tr class="table-warning">
               
                <td>Start date</td>
                <td>End date</td>
                <td>Reason</td>
                <td>State</td>
                <td class="text-center">Action</td>
            </tr>
            </thead>
            <tbody>
            @foreach($conges as $conge)
                <tr>
                  
                    <td>{{$conge->dateDebut}}</td>
                    <td>{{$conge->dateFin}}</td>
                    <td>{{$conge->raison}}</td>
                    <td>{{$conge->etat}}</td>
                   
                    <td class="text-center">
                        <a href=" {{ route('conges.editConge', $conge->id)}} " class="btn btn-primary btn-sm" >Edit</a>
                        <form action="{{ route('conges.destroyConge', $conge->id)}}" method="post" style="display: inline-block">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div>
@endsection

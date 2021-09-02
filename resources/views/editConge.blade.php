@extends('layout')

@section('content')

    <style>
        .container {
            max-width: 450px;
        }
        .push-top {
            margin-top: 50px;
        }
    </style>

    <div class="card push-top">
        <div class="card-header">
            Edit & Update
        </div>

        <div class="card-body">
{{--            @if ($errors->any())--}}
{{--                <div class="alert alert-danger">--}}
{{--                    <ul>--}}
{{--                        @foreach ($errors->all() as $error)--}}
{{--                            <li>{{ $error }}</li>--}}
{{--                        @endforeach--}}
{{--                    </ul>--}}
{{--                </div><br />--}}
{{--            @endif--}}
            <form method="post" action="{{ route('conges.updateConge', $conge->id) }}">
           
                <div class="form-group">
                    @csrf
                    @method('PATCH')
                    <label for="name1">Start date</label>
                    <input type="tdateext" class="form-control" name="dateDebut" value="{{ $conge->dateDebut }}"/>
                </div>
                <div class="form-group">
                <label for="name2">End Date</label>
                <input type="date" class="form-control" name="dateFin" value="{{ $conge->dateFin }}"/>
                </div>
                <div class="form-group">
                    <label for="name3">Reason</label>
                    <input type="text" class="form-control" name="raison" value="{{ $conge->raison }}"/>
                </div>
                <div class="form-group">
                    <label for="state">State</label>
                    <input type="text" class="form-control" name="etat" value="{{ $conge->etat }}"/>
                    
                </div>
                <button type="submit" class="btn btn-block btn-danger">Update Permission</button>
            </form>
        </div>
    </div>
@endsection

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
            Add Permission
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
            <form method="post" action="{{ route('conges.storeConge') }}">
                @csrf
                <div class="form-group">

                    <label for="name">Start date</label>
                    <input type="date" class="form-control" name="dateDebut"/>
                </div>
                <div class="form-group">
                     <label for="name2">End date</label>
                    <input type="date" class="form-control" name="dateFin"/>
                </div>
                <div class="form-group">
                    <label for="name3">Reason</label>
                    <input type="text" class="form-control" name="raison"/>
                </div>

                <div class="form-group">
                    <label for="etat">State</label>
                    <input type="text" class="form-control" name="etat"/>
                </div>
               
                <button type="submit" class="btn btn-block btn-danger">Create Permisson</button>
            </form>
        </div>
    </div>
@endsection

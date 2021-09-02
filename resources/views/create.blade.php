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
            Add User
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
            <form method="post" action="{{ route('users.store') }}">
                @csrf
                <div class="form-group">

                    <label for="name">First Name</label>
                    <input type="text" class="form-control" name="Nom"/>
                </div>
                <div class="form-group">
                     <label for="name">Last Name</label>
                    <input type="text" class="form-control" name="Prenom"/>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email"/>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="text" class="form-control" name="password"/>
                </div>
                <div class="form-group">
                    <label for="dateNaiss">Date of Birth</label>
                    <input type="date" class="form-control" name="dateNaiss"/>
                </div>
                <div class="form-group">
                    <label for="profession">Job</label>
                    <input type="text" class="form-control" name="profession"/>
                </div>
                <button type="submit" class="btn btn-block btn-danger">Create User</button>
            </form>
        </div>
    </div>
@endsection

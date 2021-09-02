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
            <form method="post" action="{{ route('users.update', $user->id) }}">
            <input type="hidden" name="-methode" value="PUT">
                <div class="form-group">
                    @csrf
                    @method('PATCH')
                    <label for="nom">Fist Name</label>
                    <input type="text" class="form-control" name="Nom" value="{{ $user->nom }}"/>
                </div>
                <div class="form-group">
                <label for="prenom">Last Name</label>
                <input type="text" class="form-control" name="Prenom" value="{{ $user->prenom }}"/>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" value="{{ $user->email }}"/>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="text" class="form-control" name="password" value="{{ $user->password }}"/>
                    <div class="form-group">
                        <label for="dateNaiss">Date of Birth</label>
                        <input type="date" class="form-control" name="dateNaiss" value="{{ $user->dateNaiss }}"/>
                    </div>
                    <div class="form-group">
                        <label for="profession">Job</label>
                        <input type="text" class="form-control" name="profession" value="{{ $user->profession }}"/>
                    </div>
                </div>
                <button type="submit" class="btn btn-block btn-danger">Update User</button>
            </form>
        </div>
    </div>
@endsection

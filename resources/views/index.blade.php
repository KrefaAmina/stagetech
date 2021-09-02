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
        <h2>List users</h2>
            <div class="pull-right">
                <a href="{{ url('api/users') }}" class="btn btn-success ">New User</a>

            </div>
        <table class="table">
            <thead>
            <tr class="table-warning">
               
                <td>First Name</td>
                <td>Last Name</td>
                <td>Email</td>
                <td>Password</td>
                <td>Date of Birth</td>
                <td>Job</td>
                <td class="text-center">Action</td>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                  
                    <td>{{$user->Nom}}</td>
                    <td>{{$user->Prenom}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->password}}</td>
                    <td>{{$user->dateNaiss}}</td>
                    <td>{{$user->profession}}</td>
                    <td class="text-center">
                        <a href=" {{ route('users.edit', $user->id)}} " class="btn btn-primary btn-sm" >Edit</a>
                        <form action="{{ route('users.destroy', $user->id)}}" method="post" style="display: inline-block">
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

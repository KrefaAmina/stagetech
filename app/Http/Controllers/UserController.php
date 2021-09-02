<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{


    public function index()//liste Users
    {
        $users = User::all();
        return view('index',compact('users'));

    }

    public function create(){
        return view('create');
    }

    public function  store(Request  $request)
    {


        $storeData = $request -> validate([
            'Nom' =>'required|max:255',
            'Prenom' =>'required|max:255',
            'email' =>'required|max:255',
            'password' =>'required|max:255',
            'dateNaiss' =>'required|max:255',
            'profession' =>'required|max:255'
        ]);
         $user = User::create(request(['Nom', 'Prenom','email', 'password','dateNaiss','profession']));

        $user->save();

        return redirect('/api/index') -> with('completed','User has been saved!');
    }

    public function  edit($id)
    {
        $user = User:: findOrFail($id);
        return view ('edit', compact('user'));

    }

    public function  update(Request $request, $id)
    {
        $updateDate = $request->validate([
            'Nom' =>'required|max:255',
            'Prenom' =>'required|max:255',
            'email' =>'required|max:255',
            'password' =>'required|max:255',
            'dateNaiss' =>'required|max:255',
            'profession' =>'required|max:255'
        ]);
        $user = User:: findOrFail($id);
        $user ->Nom= $request ->input("Nom");
        $user ->Prenom= $request ->input("Prenom");
        $user ->email= $request ->input("email");
        $user ->password= $request ->input("password");
        $user ->dateNaiss= $request ->input("dateNaiss");
        $user ->profession= $request ->input("profession");
        $user ->save();

        return redirect('/api/index') -> with('completed','User has been updated');
    }

    public  function  destroy($id)
    {
        $user = User::findOrFail($id);
        $user -> delete();

        return redirect('/api/index') -> with('completed', ' User has been deleted');

    }

}


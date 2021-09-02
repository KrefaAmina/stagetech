<?php

namespace App\Http\Controllers;
use App\Models\Conge;
use Illuminate\Http\Request;

class CongeController extends Controller
{
    
    public function indexConge()//liste Users
    {
        $conges = Conge::all();
        return view('indexConge',compact('conges'));

    }

    public function createConge(){
        return view('createConge');
    }

    public function  storeConge(Request  $request)
    {


        $storeData = $request -> validate([
            'dateDebut' =>'required|max:255',
            'dateFin' =>'required|max:255',
            'raison' =>'required|max:255',
            'etat' =>'required|max:255'
        ]);
        $conge= new Conge();
        $conge ->dateDebut= $request ->input("dateDebut");
        $conge ->dateFin= $request ->input("dateFin");
        $conge ->raison= $request ->input("raison");
        $conge ->etat= $request ->input("etat");
       
        $conge ->save();

      

        return redirect('/api/indexConge') -> with('completed','Conge has been saved!');
    }

    public function  editConge($id)
    {
        $conge = Conge:: findOrFail($id);
        return view ('editConge', compact('conge'));

    }

    public function  updateConge(Request $request, $id)
    {
        $updateDate = $request->validate([
            'dateDebut' =>'required|max:255',
            'dateFin' =>'required|max:255',
            'raison' =>'required|max:255',
            'etat' =>'required|max:255'
        ]);
        $conge = Conge:: findOrFail($id);
        $conge ->dateDebut= $request ->input("dateDebut");
        $conge ->dateFin= $request ->input("dateFin");
        $conge ->raison= $request ->input("raison");
        $conge ->etat= $request ->input("etat");
       
        $conge ->save();

        return redirect('/api/indexConge') -> with('completed','Conge has been updated');
    }

    public  function  destroyConge($id)
    {
        $conge = Conge::findOrFail($id);
        $conge -> delete();

        return redirect('/api/indexConge') -> with('completed', ' Conge has been deleted');

    }

}

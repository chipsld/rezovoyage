<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Voyage;

use Validator;

class AdminController extends Controller
{
    public function index()
    {
        $voyages = Voyage::all();
        return view('admin/admin_voyages', ['voyages' => $voyages]);
    }

    public function store(Request $request)
    {
        $voyage = new Voyage;
        $voyage->destination = $request->destination;
        $voyage->description = $request->description;
        $voyage->prix = $request->prix;
        $voyage->titre = $request->titre;
        $voyage->image = 'test';    

        // dd($voyage);
        $voyage->save();
        return redirect()->route('admin_voyages');
    }

    public function show($id)
    {
        $voyage = Voyage::findorFail($id);
        return view('admin/admin_voyages_edit', ['voyage' => $voyage]);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'destination' => 'required|min:5',
            'description' => 'required|min:5',
            'titre' => 'required|min:5',
            'prix' => 'required|numeric',
        ]);

        // dd($request);
        if ($validator->fails()){
            // return back()->withErrors($validator)->withInput();
        }
       
            $voyage = Voyage::find($id);
            $voyage->destination = $request->destination;
            $voyage->description = $request->description;
            $voyage->prix = $request->prix;
            $voyage->titre = $request->titre;

            $voyage->save();

            return redirect()->route('admin_voyages');
        
    }

    public function delete($id)
    {
        $voyage = Voyage::find($id);
        $voyage->delete();
        return redirect()->route('admin_voyages');
    }
    
   

   
}

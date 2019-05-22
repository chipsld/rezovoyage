<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Voyage;

use Validator;

class VoyageController extends Controller
{
    public function index()
    {
        $voyages = Voyage::all();
        $specificVoyage = '';
        return view('voyages', ['voyages' => $voyages , 'specific_voyage'=> $specificVoyage]);
    }

    public function showVoyage($id_voyage) 
    {
        $specificVoyage = Voyage::find($id_voyage);
        return view('show', ['specific_voyage' => $specificVoyage]);
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $voyage = new Voyage;
        $voyage->libelle = $request->libelle;
        $voyage->pays = $request->pays;
        $voyage->ville = $request->ville;
        $voyage->date_debut = $request->date_debut;
        $voyage->date_fin = $request->date_fin;
        $voyage->cout = $request->cout;
        $voyage->photo = $request->photo;
        $voyage->description = $request->description;
        $voyage->disponibilite = $request->disponibilite;
        $voyage->save();
        return redirect()->route('voyages.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$voyages = DB::select("SELECT * FROM voyages");
        $voyages = Voyage::all();
        //$columns = DB::select('show columns from voyages');
        //return view('voyages', ['id' => $id, 'voyages', $voyages]);
        return view('voyages')->with('id', $id)->with('voyages', $voyages);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $voyage = Voyage::find($id);
        return view('edit', ['voyage' => $voyage]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'libelle' => 'required|min:10',
            'pays' => 'required|min:10',
            'ville' => 'required|min:10',
            'date_debut' => 'required|min:10',
            'date_fin' => 'required|min:10',
            'cout' => 'required|min:3|numeric',
            'photo' => 'required|url',
            'description' => 'required|min:10',
            'disponibilite' => 'required|boolean'
        ]);
        if ($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }
        $voyage = Voyage::find($id);
        $voyage->libelle = $request->libelle;
        $voyage->pays = $request->pays;
        $voyage->ville = $request->ville;
        $voyage->date_debut = $request->date_debut;
        $voyage->date_fin = $request->date_fin;
        $voyage->cout = $request->cout;
        $voyage->photo = $request->photo;
        $voyage->description = $request->description;
        $voyage->disponibilite = $request->disponibilite;
        $voyage->save();
        return redirect()->route('voyages.index')->withUpdateMessage("Le voyage dont l'id est $id et le libelle est : $voyage->libelle a été mis à jour");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $voyage = Voyage::find($id);
        $voyage->delete();
        //$voyage->destroy($id);
        return redirect()->route('voyages.index')->withDeleteMessage("Le voyage dont l'id est $id et le libelle est : $voyage->libelle a été supprimé");
    }
    
   

    public function search(Request $request) {
        $ville = $request->ville;
        $searched_voyages = Voyage::where('ville','LIKE','%'.$ville."%")->get();
        return view('voyages', ['searched_voyages' => $searched_voyages]);
    }
}

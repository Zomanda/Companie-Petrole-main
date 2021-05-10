<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MarcheRequest;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;
use App\Models\MarcheInternational;

class MarcheInternationalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $marches = MarcheInternational::all();

        /*Log::emergency('The system is down!');
        Log::message('On entre dans la fonction');
        Log::debug($marches);*/
        
        return View('MarcheInternational.voirMarche', compact('marches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $marches = MarcheInternational::orderBy('nom')->get();
        return View('MarcheInternational.ajoutMarche');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MarcheRequest $request)
    {
        try {
            $marches = new MarcheInternational($request->all());
            $marches->save();
        }
        catch (\Throwable $e) {
            //Gérer l'erreur
            Log::debug($e);
        }
        return redirect()->route('MarcheInternational.store')->with('message', "Ajout du marché international " . $marches->nomCompagnie . " réussi !");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profesor;
use App\Skills;
use Illuminate\Support\Facades\Redirect;
use profesore\Http\Request\profesoresFormRequest;
use DB;
class profesorController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $profesor = Profesor::all();
        return view('profesores/profesores', compact('profesor'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('profesores/formProfesor');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      Profesor::create($request->input());
      $profesor = Profesor::all();
      return view ('profesores/profesores ', compact('profesor'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Profesor $profesor)
    {

      return view('profesores/showProfesor', compact('profesor'));
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
      $profesor->nombre = $request->input('profesor');
     $profesor->save();

     return redirect()->route('skills/skills',$profesor->id);
   }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profesor $profesor )
    {
       $profesor->delete();
	
	return redirect()->route('profesor.index')->with('succes','Profesor eliminado');

    }

}

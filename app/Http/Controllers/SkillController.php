<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Skills;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('skills.addSkills');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // VERIF QUE LES CHAMPS SOIENT BIEN REMPLIS
        $this->validate($request, [
          'name' => 'required',
          'description' => 'required',
          'level' => 'required'
        ]);
        // CREATION D'UN OBJET Model
        $competence = new Skill([
          'name' => $request->get('name'),
          'description' => $request->get('description'),
          'level' => $request->get('level')
        ]);
        $competence->save();
        return redirect()->route('skills.skillsManager')->with('success', 'Compétence Ajoutée');
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

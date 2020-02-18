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
  public function index(){
    $skills = Skills::latest();
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create(){
    return view('skills.addSkills');
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request){
    // VERIF QUE LES CHAMPS SOIENT BIEN REMPLIS
    $this->validate($request, [
      'name' => 'required',
      'description' => 'required'
    ]);
    // CREATION D'UN OBJET Model
    Skills::create([
      'name' => $request->name,
      'description' => $request->get('description'),
      'logo' => $request->get('logo')
    ]);

    return redirect()->route('addSkills')->with('success', 'Compétence Ajoutée');
  }

  /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  // public function show($id)
  // {
  //   //
  // }

  public function show(Skills $skill){
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
  // public function update(Request $request, $id)
  // {
  //   //$request->id
  // }
  public function update(Request $request){
    $request->validate([
        'name' => 'required',
        'description' => 'required',
        'logo' => 'required',
      ]);

      $skill->update($request->all());

      return redirect()->route('home')->with('success', 'Skills udpated');
  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function destroy(Request $request){
    $this->validate($request, [
      'name' => 'required'
    ]);

    $name = $request->name;

    Skills::where('name', $name)->delete();

    return redirect()->route('home');
  }
}

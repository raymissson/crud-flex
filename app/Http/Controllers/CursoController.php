<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curso;
use App\Professor;
class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $curso = Curso::all();
        return view('curso/index', compact('curso'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $professor = Professor::all();
        return view('curso.create', compact('professor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
          'curso_nome' => 'required',
          'prof_id' => 'required'
        ]);

        $curso = Curso::create($validateData);

        return redirect('/cursos')->with('sucess', 'Cursos cadastrado com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $curso = Curso::findOrFail($id);
      $professor = Professor::all();
      return view('curso.edit', compact('curso', 'professor'));
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
        $validateData = $request->validate([
          'curso_nome' => 'required',
          'prof_id' => 'required'
        ]);

        Curso::whereId($id)->update($validateData);

        return redirect('/cursos')->with('sucess', 'Curso atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $curso = Curso::findOrFail($id);

      $curso->delete();

      return redirect('/cursos')->with('sucess', 'Curso deletado com sucesso');
    }
}

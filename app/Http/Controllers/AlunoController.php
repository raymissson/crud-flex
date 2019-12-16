<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aluno;
use App\Curso;
use PDF;
use Illuminate\Support\Facades\DB;
class AlunoController extends Controller
{

  public function pdf(){
    $aluno = Aluno::all();
    $pdf = PDF::loadView('aluno.pdf', compact('aluno'));
    return $pdf->download('alunos.pdf');
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $aluno = Aluno::all();
        return view('aluno.index', compact('aluno'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        $curso = Curso::all();

        return view('aluno.create', compact('curso'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $validateData = $request->validate([
          'aluno_nome' => 'required',
          'aluno_nasc' => 'required',
          'aluno_logra' => 'required',
          'aluno_cep' => 'required',
          'aluno_bairro' => 'required',
          'aluno_cidade' => 'required',
          'aluno_estado' => 'required',
          'aluno_num' => 'required',
          'curso_id' => 'required'
        ]);

        $aluno = Aluno::create($validateData);

        return redirect('/alunos')->with('sucess', 'Aluno cadastrado com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $aluno = Aluno::findOrFail($id);

        $curso = Curso::all();

        return view('aluno.edit', compact('aluno', 'curso'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        $validateData = $request->validate([
          'aluno_nome' => 'required',
          'aluno_nasc' => 'required',
          'aluno_logra' => 'required',
          'aluno_cep' => 'required',
          'aluno_bairro' => 'required',
          'aluno_cidade' => 'required',
          'aluno_estado' => 'required',
          'aluno_num' => 'required',
          'curso_id' => 'required'
        ]);

        Aluno::whereId($id)->update($validateData);

        return redirect('/alunos')->with('sucess', 'Aluno atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $aluno = Aluno::findOrFail($id);

        $aluno->delete();

        return redirect('/alunos')->with('sucess', 'Aluno deletado com sucesso');
    }
}

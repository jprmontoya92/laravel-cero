<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCurso;
use App\Models\Curso;
use Illuminate\Http\Request;


class CursoController extends Controller
{
    public function index(){

        $curso = Curso::orderBy('id','desc')->paginate();
        return view('cursos.index',compact('curso'));
    }

    public function create(){
        return view('cursos.create');
    }

    public function store(StoreCurso $request){

       /*  $curso = new Curso();
        $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;

        $curso->save(); */

       /*  $curso = Curso::create([
            'name' => $request->name,
            'description' => $request->descripcion,
            'categoria' => $request->categoria 
        ]); */

        $curso = Curso::create($request->all());

        return redirect()->route('cursos.show',$curso);
    }

    public function show(Curso $curso){

        //$curso = Curso::find($id);

        return view('cursos.show', compact('curso'));
    }


    //podemos instanciar el modelo curso y al mismo tiempo recibir la variable que pasamos por la url y este nos retornara con un objeto de acuerdo al id que le hemos pasado
    public function edit(Curso $curso){
        
        return view('cursos.edit',compact('curso'));
    }

    public function update(Request $request, Curso $curso){

         $request->validate([
            'name' => 'required',
            'descripcion' => 'required',
            'categoria' =>'required'
        ]);
    /*

        $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;

        $curso->save();
 */
        $curso->update($request->all());

        return redirect()->route('cursos.show',$curso);
    }

    public function destroy(Curso $curso){
        
        $curso->delete();

        return redirect()->route('cursos.index');
    }
}

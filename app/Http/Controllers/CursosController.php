<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\curso;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
class CursosController extends Controller
{
    private $curso;
    public function __construct(curso $curso){
        $this->curso = $curso;
    }
    
    public function index(curso $curso){
       $title = "Listagem de cursos";
       $cursos = DB::table('curso')
        //inner join categoria ct on ct.id = cs.idcategoria
        ->join('categoria','categoria.id','=','curso.idcategoria')
        ->join('consultor','consultor.id','=','curso.idconsultor')
        ->select('curso.id','consultor.nome as consultor','categoria.descricao as categoria','curso.descricao as descricao','curso.nome as curso' ,'curso.fim','curso.inicio','curso.endereco','curso.bairro','curso.cidade', 'curso.valor')
       
        ->get();
       return view('cursos', compact('cursos','title'));
    }
    
    public function descricao($id){
       //$curso = $this->curso->find($id); 
        $curso = DB::table('curso')
        //inner join categoria ct on ct.id = cs.idcategoria
        ->join('categoria','categoria.id','=','curso.idcategoria')
        ->join('consultor','consultor.id','=','curso.idconsultor')
        ->select('consultor.nome as consultor','categoria.descricao as categoria','curso.descricao as descricao','curso.nome as curso','curso.horainicial','curso.horafinal','curso.fim', 'curso.inicio','curso.endereco','curso.bairro','curso.cidade', 'curso.valor','curso.numero')
        ->where('curso.id', $id)
        ->get();
        
        
       return view('descricaocursos',compact('curso'));
    }
    
    public function pesquisa(){
      if(Input::has('texto')==false){ 
          return redirect('/');
      }
     // $cursos = curso::where('descricao','like','%'.Input::get('texto').'%')->get();
    
       $cursos = DB::table('curso')
        //inner join categoria ct on ct.id = cs.idcategoria
        ->join('categoria','categoria.id','=','curso.idcategoria')
        ->join('consultor','consultor.id','=','curso.idconsultor')
        ->select('curso.id','consultor.nome as consultor','categoria.descricao as categoria','curso.descricao as descricao','curso.nome as curso','curso.fim', 'curso.inicio','curso.endereco','curso.bairro','curso.cidade', 'curso.valor')
        ->where('curso.nome','like','%'.Input::get('texto').'%')
        ->get();
      return view('pesquisa')->with('cursos',$cursos);
      
      }
    
}

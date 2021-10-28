<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{

   private $produto;

   public function __construct(Produto $produto)
   {
       $this->produto = $produto;
   }


    public function index()
    {
        $produtos = Produto::all()->toArray();
        return array_reverse($produto);      
    }

    public function store(Request $request)
    {
        $produto = new Produto([
            'nome' => $request->input('nome'),
            'preco' => $request->input('preco'),
            'codigo' => $request->input('codigo'),
            'categoria' => $request->input('categoria'),
            'status' => $request->input('status')
        ]);

        $produto->save();

        return response()->json('Produto criado!');
    }

    public function show($id)
    {
        $produto = Produto::find($id);
        return response()->json($produto);
    }

    public function update($id, Request $request)
    {
        $produto = Produto::find($id);
        $produto->update($request->all());

        return response()->json('Produto atualizado!');
    }

    public function destroy($id)
    {
        $produto = Produto::find($id);
        $produto->delete();

        return response()->json('Produto deletado!');
    }
}
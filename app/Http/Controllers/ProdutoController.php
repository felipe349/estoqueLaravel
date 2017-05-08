<?php

namespace estoque\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use estoque\Http\Requests;

class ProdutoController extends Controller
{
    public function lista(){
        
        $produtos = DB::select('select * from produtos');
        $data = ['produtos' => $produtos];
        return view('listagem', $data);
    }
}

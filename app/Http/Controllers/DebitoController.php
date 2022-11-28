<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DebitoController extends Controller
{
//
    public function cadastro(Request $req)
    {
        $data = $req->all();

        $titulo = $data['titulo'];
        $valor = $data['valor'];
        $categoria_id = $data['categoria'];
        $prioridade  = $data['prioridade'];
        $vencimento = $data['vencimento'];
        $recorrente_id = isset($data['recorrente']) ? 1 : 0;
        $observacao = $data['obs'];
        $status = 0;
        $instituicao = $data['instituicao'];
        $user_id = 1;

        $insert = array(
            'titulo' => $titulo,
            'valor' => $valor,
            'categoria_id' => $categoria_id,
            'prioridade' => $prioridade,
            'vencimento' => $vencimento,
            'recorrente' => $recorrente_id,
            'obs' => $observacao,
            'status'=>$status,
            'instituicao'=>$instituicao,
            'user_id'=>$user_id
        );
        
        DB::table('debito')
        ->insert($insert);
        return redirect()->to('/');
    }
}
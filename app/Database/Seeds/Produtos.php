<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Produtos extends Seeder
{
    public function run()
    {
        $nome = ['camisa', 'camisa manga longa','casaco moletom', 'jaqueta', 'regata', 'moletom sem touca'];
        $desc = ['algodão, poliester','algodão poliester','moletom, algodão', 'jeans, dri-fit', 'algodão e poliester', 'moletom, algodão'];
        $cor = ['Cor 01', 'Preto', 'Nude', 'Pink', 'Cor 02', 'Opaca'];
        $cobertura = ['Alta', 'Alta', 'Alta', 'Baixa', 'Alta', 'Média'];
        $tamanho = ['p', 'm', 'g', 'gg', 'xg', 'xl'];
        $valor = [80,80,120,160,60,100];

        for($x = 0; $x < 6; $x++){
            $data = [
                'nome' => $nome[$x],
                'descricao' => $desc[$x],
                'cor' => $cor[$x],
                'cobertura' => $cobertura[$x],
                'tamanho' => $tamanho[$x],
                'valor'    => $valor[$x],
            ];

            
            $this->db->table('produtos')->insert($data);
        }
    }
}
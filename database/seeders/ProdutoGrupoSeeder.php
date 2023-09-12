<?php

namespace Database\Seeders;

use App\Models\ProdutoGrupo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdutoGrupoSeeder extends Seeder
{

    public function run(): void
    {
        ProdutoGrupo::insert([
            [
                'nm_produto_grupo' => 'console'

            ],
            [
                'nm_produto_grupo' => 'celulares'

            ],
            [
                'nm_produto_grupo' => 'moveis'

            ],
            [
                'nm_produto_grupo' => 'eletrodomesticos'
            ],
            [
                'nm_produto_grupo' => 'roupas'

            ],
            [
                'nm_produto_grupo' => 'acessorios'

            ],
            [
                'nm_produto_grupo' => 'calcados'

            ]
        ]);
    }
}

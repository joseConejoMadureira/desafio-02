<?php

namespace Database\Seeders;

use App\Models\Produto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdutoSeeder extends Seeder
{

    public function run(): void
    {
        Produto::insert([
            [
                'nm_produto' => 'xbox',
                'vl_compra' => 1500.00,
                'vl_venda' => 2500.00,
                'produto' => 'video game',
                'id_produto_grupo' => 1

            ],
            [
                'nm_produto' => 'iphone',
                'vl_compra' => 1500.00,
                'vl_venda' => 2500.00,
                'produto' => 'apple',
                'id_produto_grupo' => 2

            ],
            [
                'nm_produto' => 'ps5',
                'vl_compra' => 2500.00,
                'vl_venda' => 3500.00,
                'produto' => 'sony',
                'id_produto_grupo' => 1

            ],
            [
                'nm_produto' => 'j5',
                'vl_compra' => 500.00,
                'vl_venda' => 700.00,
                'produto' => 'samsung',
                'id_produto_grupo' => 2

            ],
            [
                'nm_produto' => 'redmi',
                'vl_compra' => 500.00,
                'vl_venda' => 700.00,
                'produto' => 'xiaomi',
                'id_produto_grupo' => 2

            ],
            [
                'nm_produto' => 'geladeira',
                'vl_compra' => 500.00,
                'vl_venda' => 700.00,
                'produto' => 'consul',
                'id_produto_grupo' => 4

            ],
            [
                'nm_produto' => 'fogao',
                'vl_compra' => 500.00,
                'vl_venda' => 700.00,
                'produto' => 'brastamp',
                'id_produto_grupo' => 4

            ],
            [
                'nm_produto' => 'sofa',
                'vl_compra' => 1000.00,
                'vl_venda' => 1500.00,
                'produto' => 'marabraz',
                'id_produto_grupo' => 3

            ],
            [
                'nm_produto' => 'camisa',
                'vl_compra' => 200.00,
                'vl_venda' => 250.00,
                'produto' => 'nike',
                'id_produto_grupo' => 5

            ],
            [
                'nm_produto' => 'secador',
                'vl_compra' => 100.00,
                'vl_venda' => 200.00,
                'produto' => 'taiff',
                'id_produto_grupo' => 6

            ],
            [
                'nm_produto' => 'tenis',
                'vl_compra' => 150.00,
                'vl_venda' => 300.00,
                'produto' => 'adidas',
                'id_produto_grupo' => 7

            ]



        ]);
    }
}

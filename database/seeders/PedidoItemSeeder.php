<?php

namespace Database\Seeders;

use App\Models\PedidoItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PedidoItemSeeder extends Seeder
{

    public function run(): void
    {

        //5) Selecione os dias com maior venda no ano de 2023;
        PedidoItem::insert([
            [
                'qt_produto' => 150,
                'id_pedido' => 1,
                'id_produto' => 1
            ],
            [
                'qt_produto' => 500,
                'id_pedido' => 1,
                'id_produto' => 1
            ],
            [
                'qt_produto' => 400,
                'id_pedido' => 2,
                'id_produto' => 2
            ],
            [
                'qt_produto' => 300,
                'id_pedido' => 3,
                'id_produto' => 3
            ],
            [
                'qt_produto' => 200,
                'id_pedido' => 4,
                'id_produto' => 4
            ],
            [
                'qt_produto' => 100,
                'id_pedido' => 5,
                'id_produto' => 5
            ],
            [
                'qt_produto' => 50,
                'id_pedido' => 6,
                'id_produto' => 6
            ]

        ]);
        /*
        PedidoItem::insert([
            [
                'qt_produto' => 150,
                'id_pedido' => 1,
                'id_produto' => 1
            ],
            [
                'qt_produto' => 500,
                'id_pedido' => 1,
                'id_produto' => 1
            ],
            [
                'qt_produto' => 400,
                'id_pedido' => 2,
                'id_produto' => 2
            ],
            [
                'qt_produto' => 300,
                'id_pedido' => 3,
                'id_produto' => 3
            ],
            [
                'qt_produto' => 200,
                'id_pedido' => 4,
                'id_produto' => 4
            ],
            [
                'qt_produto' => 100,
                'id_pedido' => 5,
                'id_produto' => 5
            ],
            [
                'qt_produto' => 50,
                'id_pedido' => 6,
                'id_produto' => 6
            ]

        ]);
        */
    }
}

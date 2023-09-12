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
        //4) Selecione os 5 grupos com maior venda em agosto 23;
        PedidoItem::insert([
            [
                'qt_produto' => 15,
                'id_pedido' => 7,
                'id_produto' => 1
            ],
            [
                'qt_produto' => 30,
                'id_pedido' => 7,
                'id_produto' => 3
            ],
            [
                'qt_produto' => 30,
                'id_pedido' => 7,
                'id_produto' => 3
            ],
            [
                'qt_produto' => 14,
                'id_pedido' => 8,
                'id_produto' => 4
            ],
            [
                'qt_produto' => 13,
                'id_pedido' => 9,
                'id_produto' => 8
            ],
            [
                'qt_produto' => 12,
                'id_pedido' => 10,
                'id_produto' => 7
            ],
            [
                'qt_produto' => 11,
                'id_pedido' => 11,
                'id_produto' => 9
            ],
            [
                'qt_produto' => 10,
                'id_pedido' => 12,
                'id_produto' => 10
            ],
            [
                'qt_produto' => 9,
                'id_pedido' => 13,
                'id_produto' => 11
            ]


        ]);

    }
}

<?php

namespace Database\Seeders;

use App\Models\Pedido;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PedidoSeeder extends Seeder
{

    public function run(): void
    {
       // 5) Selecione os dias com maior venda no ano de 2023;
        Pedido::insert([
            [
                'dt_pedido' => '2023-07-01',
                'id_cliente' => 6,


            ],
            [
                'dt_pedido' => '2023-07-02',
                'id_cliente' => 6,


            ],
            [
                'dt_pedido' => '2023-07-03',
                'id_cliente' => 6,


            ],
            [
                'dt_pedido' => '2023-07-04',
                'id_cliente' => 6,


            ],
            [
                'dt_pedido' => '2023-07-05',
                'id_cliente' => 6,


            ],
            [
                'dt_pedido' => '2023-07-06',
                'id_cliente' => 6,


            ]

        ]);

        // 4) Selecione os 5 grupos com maior venda em agosto 23;
        Pedido::insert([
            [
                'dt_pedido' => '2023-08-01',
                'id_cliente' => 6,
            ],
            [
                'dt_pedido' => '2023-08-02',
                'id_cliente' => 6,
            ],
            [
                'dt_pedido' => '2023-08-03',
                'id_cliente' => 6,
            ],
            [
                'dt_pedido' => '2023-08-04',
                'id_cliente' => 6,
            ],
            [
                'dt_pedido' => '2023-08-05',
                'id_cliente' => 6,
            ],
            [
                'dt_pedido' => '2023-08-06',
                'id_cliente' => 6,
            ],
            [
                'dt_pedido' => '2023-08-07',
                'id_cliente' => 6,
            ]


        ]);

    }
}

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

        /*
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
        */
    }
}

<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cliente::insert([
            [
                'nm_cliente' => 'jovem 1',
                'dt_nascimento' => '1952-09-04'
            ],
            [
                'nm_cliente' => 'jovem 2',
                'dt_nascimento' => '1953-01-15'
            ],
            [
                'nm_cliente' => 'jovem 3',
                'dt_nascimento' => '1953-01-15'
            ],
            [
                'nm_cliente' => 'jovem 4',
                'dt_nascimento' => '1951-01-15'
            ],
            [
                'nm_cliente' => 'jovem 5',
                'dt_nascimento' => '1941-01-15'
            ],
            [
                'nm_cliente' => 'jose',
                'dt_nascimento' => '1993-01-15'
            ]

        ]);
    }
}

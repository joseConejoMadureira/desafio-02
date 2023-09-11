<?php

namespace Database\Seeders;


use Database\Seeders\ClienteSeeder;
use Database\Seeders\PedidoItemSeeder;
use Database\Seeders\PedidoSeeder;
use Database\Seeders\ProdutoGrupoSeeder;
use Database\Seeders\ProdutoSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        $this->call(ClienteSeeder::class);
        $this->call(PedidoSeeder::class);
        $this->call(ProdutoGrupoSeeder::class);
        $this->call(ProdutoSeeder::class);
        $this->call(PedidoItemSeeder::class);
    }
}

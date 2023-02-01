<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('servicos')->insert([
            [
                'nome' => 'Formatação',
            ],
            [
                'nome' => 'Instalação do Office',
            ],
            [
                'nome' => 'Ativação do SO e Office',
            ],
            [
                'nome' => 'Backup',
            ],
            [
                'nome' => 'Instalação Leitor de PDF, Zip, Navegadores, atualização do S.O.',
            ]
        ]);
    }
}

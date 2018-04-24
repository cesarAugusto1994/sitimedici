<?php

use Illuminate\Database\Seeder;
use App\Models\Servicos;

class ServicosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $itens = [
          'Convenção Coletiva de Trabalho',
          'Contribuição',
          'Boletos',
          'Sindicalize-se',
          'Agenda de Homologação',
          'Convenios',
          'Fale Conosco'
        ];

        foreach ($itens as $key => $item) {
          $servico = new Servicos();
          $servico->nome = $item;
          $servico->url = "";
          $servico->save();
        }
    }
}

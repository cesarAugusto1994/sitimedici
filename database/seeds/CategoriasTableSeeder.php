<?php

use Illuminate\Database\Seeder;
use App\Models\Categorias;

class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorias = [
            [
                'nome' => 'Inicio',
                'url' => '#',
            ],
            [
                'nome' => 'SitiMedici',
                'url' => '#',
            ],
            [
                'nome' => 'Servicos',
                'url' => '#',
            ],
            [
                'nome' => 'Midias',
                'url' => '#',
            ],
            [
                'nome' => 'Secretarias',
                'url' => '#',
            ],
            [
                'nome' => 'Sedes Regionais',
                'url' => '#',
            ],
            [
                'nome' => 'Ajuda',
                'url' => '#',
            ],
        ];

        foreach ($categorias as $item) {
            $categoria = new Categorias();
            $categoria->nome = $item['nome'];
            $categoria->url = $item['url'];
            $categoria->Save();
        }

    }
}

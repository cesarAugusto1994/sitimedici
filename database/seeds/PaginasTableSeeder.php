<?php

use Illuminate\Database\Seeder;
use App\Models\Paginas;

class PaginasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $paginas = [
            [
                'nome' => 'Nossa Historia',
                'url' => '#',
                'categoria_id' => 2,
            ],
            [
                'nome' => 'Diretoria',
                'url' => '#',
                'categoria_id' => 2,
            ],
            [
                'nome' => 'Fale Conosco',
                'url' => '#',
                'categoria_id' => 2,
            ],

            [
                'nome' => 'Acordos e convenções',
                'url' => '#',
                'categoria_id' => 3,
            ],
            [
                'nome' => 'Homologação',
                'url' => '#',
                'categoria_id' => 3,
            ],
            [
                'nome' => 'Jurudico',
                'url' => '#',
                'categoria_id' => 3,
            ],

            [
                'nome' => 'Videos',
                'url' => '#',
                'categoria_id' => 4,
            ],
            [
                'nome' => 'Fotos',
                'url' => '#',
                'categoria_id' => 4,
            ],
            [
                'nome' => 'Blog',
                'url' => '#',
                'categoria_id' => 4,
            ],
            [
                'nome' => 'Noticias',
                'url' => '#',
                'categoria_id' => 4,
            ],

            [
                'nome' => 'Presidencia',
                'url' => '#',
                'categoria_id' => 5,
            ],
            [
                'nome' => 'Assuntos Juridicos',
                'url' => '#',
                'categoria_id' => 5,
            ],
            [
                'nome' => 'Comunicação',
                'url' => '#',
                'categoria_id' => 5,
            ],
            [
                'nome' => 'Finanças',
                'url' => '#',
                'categoria_id' => 5,
            ],
            [
                'nome' => 'Formação',
                'url' => '#',
                'categoria_id' => 5,
            ],
            [
                'nome' => 'Saúde',
                'url' => '#',
                'categoria_id' => 5,
            ],
            [
                'nome' => 'Secretaria Geral',
                'url' => '#',
                'categoria_id' => 5,
            ],

            [
                'nome' => 'Sede Principal',
                'url' => '#',
                'categoria_id' => 6,
            ],

            [
                'nome' => 'Forum e Discursões',
                'url' => '#',
                'categoria_id' => 7,
            ],

        ];

        foreach ($paginas as $item) {
            $pagina = new Paginas();
            $pagina->nome = $item['nome'];
            $pagina->url = $item['url'];
            $pagina->categoria_id = $item['categoria_id'];
            $pagina->Save();
        }
    }
}

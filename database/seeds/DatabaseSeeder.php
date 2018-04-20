<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ServicosTableSeeder::class);

        $this->call(CategoriasTableSeeder::class);
        $this->call(PaginasTableSeeder::class);
    }
}

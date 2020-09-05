<?php

use Illuminate\Database\Seeder;
use App\Personagem;

class PersonagemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Personagem::class, 10)->create();
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Models\Usuario;

class TablaUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            factory(Usuario::class, 5)->create();
        }
    }
}

<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->truncateTablas([
         'rol',
         'permiso',
         'usuario',
        ]);
        // $this->call(UsersTableSeeder::class);
        $this->call(TablaRolSeeder::class) ;
        $this->call(TablaPermisoSeeder::class);
        $this->call(TablaUsuarioSeeder::class);
    }

    protected function truncateTablas(array $tablas){
      DB::statement('SET FOREIGN_KEY_CHECKS = 0;');

      foreach ($tablas as $tabla){
          DB::table($tabla)->truncate();
      }
      DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}

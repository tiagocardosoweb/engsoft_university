<?php

use App\Classe;
use Illuminate\Database\Seeder;

/**
 * Class ClasseTableSeeder
 */
class ClasseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Classe::class, 50)->create();
    }
}

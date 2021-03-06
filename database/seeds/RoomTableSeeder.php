<?php

use App\Stunet;
use Illuminate\Database\Seeder;

/**
 * Class RoomTableSeeder
 */
class RoomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Room::class, 100)->create();
    }
}

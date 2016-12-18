<?php

use Illuminate\Database\Seeder;
use App\Album;

class AlbumsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Album::class, 150)->create();
    }
}

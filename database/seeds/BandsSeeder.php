<?php

use Illuminate\Database\Seeder;
use App\Band;

class BandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    factory(App\Band::class, 50)->create();
    }



    // public function run()
    // {
	   //  factory(App\Band::class, 50)->create()->each(function ($band) {
	   //      $band->albums()->save(factory(App\Album::class)->make());
	   //  });
    // }


}

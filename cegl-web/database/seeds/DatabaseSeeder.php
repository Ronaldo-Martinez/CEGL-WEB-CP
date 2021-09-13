<?php

use Illuminate\Database\Seeder;
use App\Mision;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $mision= new Mision();
        $mision->mision="";
        $mision->vision="";
        $mision->save();
    }
}

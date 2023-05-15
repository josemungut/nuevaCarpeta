<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Fruit;
use Illuminate\Support\Facades\DB;
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
        \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('frutas')->delete();
        Fruit::factory(100)->create();

        /*DB::table('frutas')->insert([
            ['nombre'=>'manzana','temporada'=>1,'pais'=>'España'],
            ['nombre'=>'naranja','temporada'=>2,'pais'=>'España'],
            ['nombre'=>'fresa','temporada'=>1,'pais'=>'Francia']
        ]);*/
        /*
        $f = new Fruit();
        $f->nombre = "Pera";
        $f->temporada = 1;
        $f->pais = "España";
        $f->save();

        $f = new Fruit();
        $f->nombre = "Sandia";
        $f->temporada = 2;
        $f->pais = "Argentina";
        $f->save();*/
    }
}

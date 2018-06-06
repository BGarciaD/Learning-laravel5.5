<?php

use App\Models\Profession;
// use App\Profession as Profesion; Using an alias
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // SQL sentence to insert data
        // DB::insert('INSERT INTO professions (title) VALUES (:title)', ['title' => 'Desarrollador Frack-End']);
        
        Profession::create([
            'title' => 'Front-End Developer',
        ]);

        Profession::create([
            'title' => 'Back-End Developer',
        ]);

        Profession::create([
            'title' => 'Full-Stack Developer',
        ]);
        /*
        DB::table('professions')->insert([
            'title' => 'Front-End Developer',
        ]);
        
        DB::table('professions')->insert([
            'title' => 'Back-End Developer',
        ]);

        DB::table('professions')->insert([
            'title' => 'Full-Stack Developer',
        ]);
        */ 
    }
}
